<?php
require 'library/_dao.php';
include 'page/_header.php';
?>


<main class="main-main">

    <form action="index.php?page=books&do=search" method="POST">
        <fieldset name="recherche">
            <legend>Recherche par critères</legend>
            Nom ou prénom: <input type="text" name="author"><wbr>
            Titre: <input type="text" name="title"><br>
            Genre: <select name="genre">

                <!-- menu déroulant des thèmes -->
                <option value='' default>tous</option>

                <?php
                foreach (getBookGenres() as $genre) {   // from library/_dao.php
                    echo "<option value='$genre[genre_id]'>$genre[genre]</option>";
                }
                ?>

            </select>

            <input type="submit" value="Rechercher">

        </fieldset>
    </form>

    <!-- ------------------------------------------------------------- -->

    <?php
    if ($do == 'search') {

    ?>

        <table id="results">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Genre</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach (searchBooks($_POST['author'], $_POST['title'], $_POST['genre']) as $book) {
                    echo "<tr><td>$book[title]</td><td>$book[author]</td><td>$book[genre]</td></tr>";
                }
                ?>

            </tbody>
        </table>

        <script>
            // chargement de la DATATABLE jquery
            $(document).ready(function() {
                $('#results').DataTable();
            });
        </script>

    <?php
    }
    ?>



</main>

<?php
include 'page/_basket.php';
include 'page/_footer.php';
?>