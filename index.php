<?php session_start() ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Project Biblio</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <!-- <script src='main.js'></script> -->
</head>

<body class="grid">

    <div class="top-logo">
        <img src="images/library_icon.svg" class="img-fill">
    </div>

    <h1 class="top-title">Project Biblio</h1>
    <div class="login-box">
        <p>Identifiez-vous :</p>
        <form action="php/user_login.php" method="get">
            <input type="text" name="user"><br>
            <input type="password" name="pass"><br>
            <button type="submit">Connexion</button><br>
            <?php var_dump($_SESSION); ?>
        </form>

    </div>

    <nav class="main-navbar">
        <a href="#">Accueil</a>
        <a href="#">Chercher</a>
        <a href="#">Autre...</a>
    </nav>

    <main class="main-main">
        Main
    </main>

    <aside class="basket">
        Panier
    </aside>

</body>

</html>