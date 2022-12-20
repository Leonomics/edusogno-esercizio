<?php
    session_start();
    require_once __DIR__ . '/connection.php';

    $message = "";

    if(isset($_POST['login-button'])){

        $email = $connect->real_escape_string($_POST['email']);
        $password = $connect -> real_escape_string(md5($_POST['password']));


        if ($email != "" && $password != ""){

            //registered email
            $sql_email = "SELECT count(*) AS email FROM utenti WHERE email='".$email."'";
            $result_email = mysqli_query($connect, $sql_email);
            $row_email = mysqli_fetch_array($result_email);

            $count_email = $row_email['email'];

            if($count_email > 0){
                // registered password
                $sql_password = "SELECT count(*) AS email FROM utenti WHERE email='".$email."' AND password='".$password."'";
                $result_password = mysqli_query($connect, $sql_password);
                $row_password = mysqli_fetch_array($result_password);

                $count_password = $row_password['email'];
                // access
                if($count_password > 0){
                    //session variables
                    $_SESSION['email'] = $email;
                    header('Location: events.php');
                }else{
                    $message = "<div class='message-error'>Password errata</div>";
                }
            }else{
                $message = "<div class='message-error'>Email errata</div>";
            }
        }else{
            $message = "<div class='message-error'>Inserisci Email e Password</div>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edusogno</title>
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <header class="rectangle-1">
        <img class="logo" src="./assets/images/logo.svg">
    </header>

    <main>
        <section>
            <div class="container">
                <h1>
                    Hai già un account?
                </h1>
                <div class="form-container">

                    <form action="" method="POST">
                        <div>
                            <label for="email">Inserisci l'e-mail</label>
                            <input type="email" name="email" id="email" placeholder="name@example.com" required>
                        </div>

                        <div class="password-container">
                            <label for="password">Inserisci la password</label>
                            <input type="password" name="password" id="password" placeholder="Scrivila qui" required>
                            <i class="fa-solid fa-eye" id="password-visible"></i>
                        </div>

                        <div>
                            <button type="submit" name="login-button">ACCEDI</button>
                        </div>

                        <div class="form-text">
                            Non hai ancora un profilo? <a href="./registration.php">Registrati</a>
                        </div>



                    </form>

                </div>

            </div>
        </section>
        <div class="vector-4">
            <img src="./assets/images/vector-4.svg" alt="">
        </div>
        <div class="vector-5">
            <img src="./assets/images/vector-5.svg" alt="">
        </div>
        <div class="vector-1">
            <img src="./assets/images/vector-1.svg" alt="">
        </div>
        <div class="ellipse-12">

        </div>
        <div class="ellipse-13">

        </div>
        <div class="rocket">
            <div class="rocket-tip">
                <img src="./assets/images/rocket-tip.svg">
            </div>
            <div class="rocket-body">

            </div>
            <div class="rocket-hole">

            </div>
            <div class="rocket-left-wing">
                <img src="./assets/images/vector-2.svg">
            </div>
            <div class="rocket-right-wing">
                <img src="./assets/images/vector-2.svg">
            </div>
            <div class="rocket-central-wing">

            </div>
        </div>


    </main>

    <script type="text/javascript" src="assets/js/script.js"></script>

</body>

</html>