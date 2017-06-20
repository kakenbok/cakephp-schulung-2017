<?php
    ini_set('display_errors', 1);
    
    require 'vendor/autoload.php';
    $config = @include('config.php'); // @include = no warning if not exists, $config will be null then

    use Medoo\Medoo;

    $database = new Medoo([
        'database_type' => 'mysql',
        'database_name' => 'php_glossar',
        'server' => 'localhost',
        'username' => 'root',
        'password' => 'root',
        'charset' => 'utf8',
        'port' => $config['database_port'] ?? 3306, // ??: if !isset(config[port]) take 3306
    ]);

    $term = $_POST['term'] ?? null;
    $description = $_POST['description'] ?? null;
    if ($term && $description) {
        $database->insert("glossar", [
            'term' => $term,
            'description' => $description
        ]);
        header ('Location: /');
        exit;
    }

    $entries = $database->select('glossar', '*');
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

        <form method="POST">
            Term: <input name="term">
            Beschreibung: <input name="description">
            <button type="submit">Eintragen</button>
        </form>

    </body>

</html>
