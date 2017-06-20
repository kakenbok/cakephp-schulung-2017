<?php
    require_once 'init.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $auth->login();

        if ($auth->user) {
            header('Location: /');
            exit;

        } else {
            header('HTTP/1.1 403 Forbidden');
            echo <<<EOL
            Keine Berechtigung.

            <a href="/">Zurück zur Liste</a>
EOL;
            exit;
        }

    } else {
      echo <<<EOL
      <form method="POST" action="login.php">
          <input name="username">
          <input name="password">
          <button type="submit">Login</button>
      </form>
EOL;
    }

?>