<?php
require_once __DIR__ . '/connection.php';
$message = "";

if(isset($_POST['register-button'])){
    $nome = $connect->real_escape_string($_POST['nome']);
    $cognome = $connect->real_escape_string($_POST['cognome']);
    $email = $connect->real_escape_string($_POST['email']);
    $password = $connect->real_escape_string($_POST['password']);
    $password = md5($password);

    $sql = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('$nome', '$cognome', '$email', '$password')";

    if($connect->query($sql) === true) {
        $message =
            "<div class='message-success'>Dati salvati correttamente<br>Clicca <a href='index.php'>QUI</a> per accedere alla tua area riservata</div>
            <div class=''></div>
            "
        ;
    } else{
        $message = "<div class='message-error'>Errore durante l'inserimento: . $connect->error</div>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione - Edusogno</title>
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>
<body>
    <!-- HEADER -->
    <header class="rectangle-1">
        <img class="logo" src="./assets/images/logo.svg">
    </header>

    <!-- MAIN -->
    <main>
        <section>
            <div class="container">
                <h1>
                    Crea il tuo account
                </h1>
                <!-- form -->
                <div class="form-container">

                    <?php echo $message; ?>

                    <form action="" method="post">
                        <div>
                            <label for="nome">Inserisci il nome</label>
                            <input type="text" name="nome" id="nome" placeholder="Mario" required>
                        </div>

                        <div>
                            <label for="cognome">Inserisci il cognome</label>
                            <input type="text" name="cognome" id="cognome" placeholder="Rossi" required>
                        </div>

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
                            <button type="submit"  name="register-button">REGISTRATI</button>
                        </div>

                        <?php



                        $connect->close();
                        ?>

                        <div class="form-text">
                            Hai già un account? <a href="index.php">Accedi</a>
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
        </div>

    </main>

    <script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>