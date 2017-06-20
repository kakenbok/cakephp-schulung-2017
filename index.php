<?php require_once 'init.php'; ?>

<html>

    <head>
        <title>CakePHP</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>

        <?php
            if ($auth->user) {
                echo $auth->user['username'] . ' <a href="logout.php">Logout</a>';
            } else {
                echo '<a href="login.php">Login</a>';
            }
        ?>

        <h1>Glossar</h1>

        <?php
        ?>

        <table class="table">
            <?php
                $entries = $database->select('glossar', '*');
                foreach ($entries as $entry) {
            ?>
            <tr>
                <td><?= $entry['term'] ?></td>
                <td><?= $entry['description'] ?></td>
            </tr>
            <?php
                } // close foreach block
            ?>
        </table>

        <?php
        if ($auth->user) {
            echo <<<EOL
            <form method="POST" action="add.php">
                Term: <input name="term">
                Beschreibung: <input name="description">
                <button type="submit">Eintragen</button>
            </form>
EOL;
        }
        ?>


    </body>

</html>
