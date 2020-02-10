<?php
session_start();
require '__dao.php';
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <!-- required for DataTables -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

</head>

<!-- ------------------------------------------------------------- -->

<body class="grid">

    <?php
    include '_header.php';
    ?>


    <main class="main-main">

        <form action="books.php">
            <fieldset name="recherche">
                <legend>Recherche par critères</legend>
                Nom ou prénom: <input type="text" name="author"><wbr>
                Titre: <input type="text" name="title"><br>
                Genre: <select name="genre">

                    <!-- menu déroulant des thèmes -->
                    <option value='' default>tous</option>

                    <?php
                    foreach (getBookGenres() as $genre) {   // from __dao.php
                        echo "<option value='$genre[genre_id]'>$genre[genre]</option>";
                    }
                    ?>

                </select>

                <input type="submit" value="Rechercher">

            </fieldset>
        </form>

        <!-- ------------------------------------------------------------- -->

        <?php
        if ($_SERVER['QUERY_STRING']) {

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
                foreach (searchBooks($_GET['author'], $_GET['title'], $_GET['genre']) as $book) {
                    echo "<tr><td>$book[title]</td><td>$book[author]</td><td>$book[genre]</td></tr>";
                }
            }
                ?>

                </tbody>
            </table>
            <!-- ------------------------------------------------------------- -->

            <script>
                // chargement de la DATATABLE jquery
                $(document).ready(function() {
                    $('#results').DataTable();
                });
            </script>


    </main>

    <?php
    include '_basket.php';
    ?>

</body>

</html>