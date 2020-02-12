<?php
require 'library/_dao.php';
?>

<!-- ------------------------------------------------------------- -->

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Project Biblio<?= " - $title" ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='style/main.css'>
</head>

<!-- ------------------------------------------------------------- -->

<body class="grid">

    <?php
    include '_header.php';
    ?>

    <main class="main-main">

        <?php
        if (isset($_SESSION['user_id'])) {

            $data = getUserInfo($_SESSION['user_id'])
        ?>

            <ul>
                <li>Identifiant : <b><?= $data['user_id'] ?></b></li>
                <li>Nom : <?= $data['last_name'] ?></li>
                <li>Prénom : <?= $data['first_name'] ?></li><br>
                <li>Catégorie : <i><?= $data['category'] ?></i></li>

                <li>Adresse : <?= $data['street_address'] ?></li>
                <li>Code postal : <?= $data['postal_code'] ?></li>
                <li>Ville : <?= $data['city_name'] ?></li><br>

                <li>N° tél : <?= $data['phone_number'] ?> <a href='#'>-> modifier</a></li>
                <li>E-mail : <?= $data['email_address'] ?> <a href='#'>-> modifier</a></li>
                <li>Fin d'adhésion : <?= $data['membership_end'] ?></li>
            </ul>

        <?php
        } ?>

    </main>

    <?php
    include '_basket.php';
    ?>

</body>

</html>