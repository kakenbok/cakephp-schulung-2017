<?php
    ini_set('display_errors', 1);

    $connection = mysqli_connect('localhost', 'root', 'root', 'php_glossar');
    mysqli_query($connection, "SET NAMES 'utf8'");

    $term = $_POST['term'] ?? null;
    $description = $_POST['description'] ?? null;
    if ($term && $description) {
        mysqli_query($connection,
            'insert into glossar (term, description) VALUES(\'' . $term . '\',\'' . $description . '\')');
        header ('Location: /');
        exit;
    }

    $result = mysqli_query($connection, 'select * from glossar');
?>

<html>

    <head>
        <title>CakePHP</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <h1>Glossar</h1>

        <?php
        ?>

        <table class="table">
            <?php
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td><?= $row['term'] ?></td>
                <td><?= $row['description'] ?></td>
            </tr>    
            <?php
                } // close foreach block
            ?>
        </table>

        <form method="POST">
            Term: <input name="term">
            Beschreibung: <input name="description">
            <button type="submit">Eintragen</button>
        </form>

    </body>

</html>

<?php
    mysqli_close($connection);
?>
