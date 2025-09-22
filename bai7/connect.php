<?php
    $sv="localhost";
    $user="root";
    $pass="";
    $db="tintuc";
    
    $conn = new mysqli($sv,$user,$pass,$db);

    if($error_mess=$conn->connect_error){
    die("Error: $error_mess");
}
?>