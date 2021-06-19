<?php
    $servername='localhost';
    $username='root';
    $password='Mysql123';
    $dbname='crs';
    $conn = mysqli_connect($servername,$username,$password,"$dbname");
    if(!$conn){
        echo 'Could not Connect MY Sql: '. mysqli_connect_error();
    }
?>
