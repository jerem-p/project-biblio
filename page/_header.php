<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Project Biblio<?= " - $title" ?></title>
    <link rel="icon" type="image/svg" href="image/library_icon.svg">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='style/main.css'>
    <link rel="stylesheet" type="text/css" href="style/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <!-- required for DataTables -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

</head>



<body class="grid">
    <div class="top-logo">
        <img src="image/library_icon.svg" class="img-fill">
    </div>

    <h1 class="top-title">Project Biblio</h1>
    <div class="login-box">

        <?php
        if (isset($_SESSION['user_id'])) {
        ?>

            Bonjour, <b><?= $_SESSION['user_first_name'] ?></b><br>
            (<?= $_SESSION['user_category'] ?>)<br>
            <a href="index.php?page=home&do=disconnect">Déconnexion</a>

        <?php
        } else {
        ?>

            Identifiez-vous :
            <form action="index.php?page=home&do=connect" method="POST">
                <input type="text" name="user_id"><br>
                <input type="password" name="user_pw"><br>
                <button type="submit">Connexion</button><br>
            </form>

        <?php
        }

        ?>

    </div>


    <nav class="main-navbar">
        <a href="index.php?page=home">Accueil</a>
        <a href="index.php?page=books">Livres</a>
        <a href="index.php?page=users">Usagers</a>
        <?php
        if (isset($_SESSION['user_id'])) {
        ?>

            <a href="index.php?page=account">Mon compte</a>

        <?php
        }
        ?>

    </nav>