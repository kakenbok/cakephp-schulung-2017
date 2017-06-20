<?php

    ini_set('display_errors', 1);
    session_start();
    
    require_once 'vendor/autoload.php';
    require_once 'Auth.php';
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

    $auth = new Auth($database);
    $auth->authenticate();

?>

