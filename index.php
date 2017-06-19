<?php
    ini_set('display_errors', 1);

    $connection = mysqli_connect('localhost', 'root', 'root');
    mysqli_select_db($connection, 'php_glossar');
    mysqli_query($connection, "SET NAMES 'utf8'");
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

    </body>

</html>

<?php
    mysqli_close($connection);
?>
