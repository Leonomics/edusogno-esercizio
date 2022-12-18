<?php

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
                            <button type="submit" class="btn" name="btn-login">ACCEDI</button>
                        </div>

                        <div class="form-text">
                            Non hai ancora un profilo? <a href="register.php">Registrati</a>
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