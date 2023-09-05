<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "root"; //default pass is root
    $dbdatabase = "didongshop";
    $port= "3306";

    //ket nối cơ sở dữ liệu
    $conn = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbdatabase,$port);

    // kt
    if (mysqli_connect_errno())
    {
        echo "không kết nối được". mysqli_connect_errno();
        //tat MySQL hoăc5 Mamp
        exit();
    }



?>