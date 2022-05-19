<?php
define('DB_CONNECTION', $connection_string = [
    'hostname' => 'localhost:3306',
    'username' => 'yourpres_admin',
    'password' => 'M52502002s',
    'database' => 'yourpres_ORDERLAB'
]);

function connect($array) {
    return mysqli_connect($array['hostname'], $array['username'], $array['password'], $array['database']);
}