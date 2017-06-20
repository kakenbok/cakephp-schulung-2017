<?php
    require_once 'init.php';

    if (!$auth->user) {
        header('HTTP/1.1 403 Forbidden');
        echo <<<EOL
        Keine Berechtigung.

        <a href="/">Zurück zur Liste</a>
EOL;
        exit;
    }

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
