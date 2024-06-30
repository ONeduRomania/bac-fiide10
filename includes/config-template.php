<?php
$config = [
    'hostname' => 'yourserver',
    'database' => 'yourdatabase',
    'user' => 'youruser',
    'password' => 'yourpassword'
];

function get_db_connection($config) {
    $conn = new mysqli($config['hostname'], $config['user'], $config['password'], $config['database']);
    $conn->set_charset("utf8mb4");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
?>
