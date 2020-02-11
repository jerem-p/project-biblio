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

        <form action="__createuser.php" method="POST">
            <fieldset>
                <legend>Ajouter un usager</legend>
                <label for="first_name">Prénom : </label><input type="text" id="first_name" name="first_name">
                <label for="last_name">Nom : </label><input type="text" id="last_name" name="last_name"><br>
                <label for="user_id">User_ID : </label><input type="text" id="user_id" name="user_id">
                <label for="category_id">Catégorie : </label><select id="category_id" name="category_id"><br>

                    <!-- menu déroulant des catégories d'utilisateur -->
                    <option value='' default>---</option>

                    <?php
                    foreach (getCategories() as $categ) {   // from __dao.php
                        echo "<option value='$categ[category_id]'>$categ[category]</option>";
                    }
                    ?>

                </select><br>
                <label for="password">Mot de passe : </label><input type="password" id="password" name="password">
                <input type="submit" value="Valider">


            </fieldset>

        </form><br>

        <!-- ------------------------------------------------------------- -->
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