<?php
    session_start();
    require_once __DIR__ . '/connection.php';
    include_once './vendor/autoload.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';



    function send_password_reset($get_name, $get_email, $token)
    {
        $mail = new PHPMailer(true);
        //Server settings
        $mail->isSMTP();
        $mail->SMTPAuth   = true;

        $mail->Host = 'smtp.gmail.com';
        $mail->Mailer = "smtp";
        $mail->Username = '***@gmail.com';
        $mail->Password = '***';

        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('from@example.com', $get_name);
        $mail->addAddress($get_email);

        $mail->isHTML(true);
        $mail->Subject = 'Imposta la password';

        $email_template = "
            <h2>Buogiorno $get_name,</h2>
            <h3>Abbiamo ricevuto una richiesta di cambio password per questo account</h3>
            <a href='http://localhost:8888/edusogno-esercizio/password-change.php=$token&$get_email'>Clicca qui per reimpostare la password</a>
        ";

        $mail->Body= $email_template;
        $mail->send();
    }

    if(isset($_POST['password-reset-button'])){
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $token = md5(rand());

        $check_email = "SELECT email FROM utenti WHERE email='$email' LIMIT 1";
        $check_email_run = mysqli_query($connect, $check_email);

        if(mysqli_num_rows($check_email_run)>0){
            $row = mysqli_fetch_array($check_email_run);
            $get_name = $row['nome'];
            $get_email = $row['email'];

            $update_token = "UPDATE utenti SET verify_token='$token' WHERE email='$get_email' LIMIT 1 ";
            $update_token_run = mysqli_query($connect, $update_token);

            if($update_token_run)
            {
                send_password_reset($get_name,$get_email, $token);
                $_SESSION['status'] = "Ti abbiamo inviato un link per reimpostare la password ";
                header("Location: password-reset.php");
                exit(0);
            }
            else
            {
                $_SESSION['status'] = "Qualcosa è andato storto ";
                header("Location: password-reset.php");
                exit(0);
            }


        }
        else{
            $_SESSION['status'] = "Nessuna email trovata";
            header("Location: password-reset.php");
            exit(0);
        }
    }

?>