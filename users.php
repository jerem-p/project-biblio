<?php
session_start();
require '__dao.php';
$page = 'Usagers';
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

    <table id="results">
                <thead>
                    <tr>
                        <th>user_id</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                foreach (getUsers() as $user) {
                    echo "<tr><td>$user[user_id]</td><td>$user[first_name]</td><td>$user[last_name]</td></tr>";
                }
                ?>

                </tbody>
            </table>

    </main>

    <?php
    include '_basket.php';
    ?>

</body>

</html>