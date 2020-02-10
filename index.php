<?php
session_start();
$page = 'Accueil';
?>

<!-- ------------------------------------------------------------- -->

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Project Biblio<?= " - $page" ?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
</head>

<!-- ------------------------------------------------------------- -->

<body class="grid">

    <?php
    include '_header.php';
    ?>

    <main class="main-main">
        Main


    </main>

    <?php
    include '_basket.php';
    ?>

</body>

</html>