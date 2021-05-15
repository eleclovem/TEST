<?php

try{
    $mysqli = new mysqli("localhost", "root", "test", "myDB");
    echo "Connected !!!";
    // echo var_dump($mysqli);

}
catch(Exception $e) {
    echo $e->getMessage();
    echo "Error !!!";
}

?>