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