<?php
    ini_set('display_errors', 1);
?>

<html>

    <head>
        <title>CakePHP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <script type="text/javascript" src="scripts.js"></script>
    </head>

    <body>
        <h1><?= 'hallo zur cake php schulung 2017'; ?></h1>

        <?php
            $seasons = [
                'Winter' => 'kalt',
                'Frühling' => 'schön',
                'Sommer' => 'warm',
                'Herbst' => 'nass',
            ];
        ?>

        <table class="table">
            <?php
                foreach ($seasons as $season => $weather) {
                    if (isset($_POST['season']) && $_POST['season'] === $season) {
                        $weather = $_POST['weather'];
                    }
            ?>
            <tr>
                <td><?= $season ?></td>
                <td><?= $weather ?></td>
            </tr>    
            <?php
                } // close foreach block
            ?>
        </table>

        <p>Oder stimmt das nicht? Dann gib etwas anderes ein:</p>

        <form method="POST" class="form-inline">
            <select name="season" class="form-control">
                <?php
                    foreach (array_keys($seasons) as $season) {
                        echo '<option>' . $season . '</option>';
                    }
                ?>
            </select>
            <input name="weather" class="form-control">
            <button type="submit" class="btn btn-primary">Ändern</button>
        </form>

        <button class="btn btn-primary" onclick="showWeather()">Wie wird das Wetter?</button>

        <img src="kathedrale.jpg" />
    </body>

</html>
