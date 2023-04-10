<?php
    $serverName ='localhost';
    $userName='root';
    $password ='';
    $dbName='formInterviwe';
    $con=mysqli_connect($serverName,$userName,$password,$dbName);
    if ($con){
        echo "successfully";
    }