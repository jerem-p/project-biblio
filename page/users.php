<?php
require 'library/_dao.php';
include 'page/_header.php';
?>

<main class="main-main">

    <form action="index.php?page=users&do=create" method="POST">
        <fieldset>
            <legend>Ajouter un usager</legend>
            <label for="first_name">Prénom : </label><input type="text" id="first_name" name="first_name">
            <label for="last_name">Nom : </label><input type="text" id="last_name" name="last_name"><br>
            <label for="user_id">User_ID : </label><input type="text" id="user_id" name="user_id">
            <label for="category_id">Catégorie : </label><select id="category_id" name="category_id"><br>

                <!-- menu déroulant des catégories d'utilisateur -->
                <option value='' default>---</option>

                <?php
                foreach (getCategories() as $categ) {   // from library/_dao.php
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
include 'page/_basket.php';
include 'page/_footer.php';
?>