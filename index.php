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
            ?>
            <tr>
                <td><?= $season ?></td>
                <td><?= $weather ?></td>
            </tr>    
            <?php
                } // close foreach block
            ?>
        </table>

        <button class="btn btn-primary" onclick="showWeather()">Wie wird das Wetter?</button>

        <img src="kathedrale.jpg" />
    </body>

</html>
