<?php
session_start();
$page = 'Livres';
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

        <?php
        $pdo = new PDO('mysql:host=localhost;dbname=biblio_db;charset=utf8', 'root', '');
        $query = $pdo->query(
            "SELECT * FROM books NATURAL JOIN book_authors NATURAL JOIN authors WHERE first_name='john'"
        );

        $data = $query->fetchAll();
        foreach($data as $book) {
            echo $book['title'];
        }

        ?>


    </main>




    <aside class="basket">

        Panier

    </aside>




</body>
</html>