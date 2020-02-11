<div class="top-logo">
    <img src="images/library_icon.svg" class="img-fill">
</div>

<h1 class="top-title">Project Biblio</h1>
<div class="login-box">

    <?php
    if (isset($_SESSION['user_id'])) {
    ?>

        Bonjour, <b><?= $_SESSION['user_first_name'] ?></b><br>
        (<?= $_SESSION['user_category'] ?>)<br>
        <a href="__connect.php">Déconnexion</a>

    <?php
    } else {
    ?>

        Identifiez-vous :
        <form action="__connect.php" method="get">
            <input type="text" name="user_id"><br>
            <input type="password" name="user_pw"><br>
            <button type="submit">Connexion</button><br>
        </form>

    <?php
    }

    ?>

</div>


<nav class="main-navbar">
    <a href="index.php">Accueil</a>
    <a href="books.php">Livres</a>
    <a href="users.php">Usagers</a>
    <?php
    if (isset($_SESSION['user_id'])) {
    ?>

        <a href="useraccount.php">Mon compte</a>

    <?php
    }
    ?>

</nav>