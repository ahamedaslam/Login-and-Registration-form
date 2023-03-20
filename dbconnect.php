<?php

class dbconnect {
   
    function __construct(){

require_once('config.php');
$conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
mysqli_select_db(DATABASE, $conn);

if(!$conn)
{
    die("cannot connect the database");

}
return $conn;
    }
}

?>