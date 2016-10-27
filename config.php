<?php

$_SESSION['logged'] = (isset($_SESSION['logged']))?$_SESSION['logged']:false;

ini_set('display_errors', 1);
// connection à la base (l'objet bdd est utilisé dans tout le site pour les opération sur la base)
$link = mysqli_connect("127.0.0.1", "knab", "knab", "tp4bb");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

?>
