<?php
    session_start();
    require_once __DIR__ . '/connection.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - Edusogno</title>
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
                    Reimposta la password
                </h1>
                <div class="form-container">

                    <form action="password-reset-code.php" method="POST">
                        <div>
                            <label for="email">Inserisci l'e-mail</label>
                            <input type="email" name="email" id="email" placeholder="name@example.com" required>
                        </div>

                        <div>
                            <button type="submit" name="password-reset-button">INVIA EMAIL</button>
                        </div>

                        <div class="form-text">
                            Riceverai un email con le istruzioni per cambiare la password
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