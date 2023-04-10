<?php
    include_once "dbc.php";
    $name =$_POST['Fname'];
    $email =$_POST['Femail'];
    $address =$_POST['Faddress'];
    $password =$_POST['Fpassword'];
    $contactNumber =$_POST['Fnumber'];
    

    $sql="INSERT INTO regsheet(name,email,address,password,contactnumber) VALUES ('$name','$email','$address','$password','$contactNumber');";
    $results =mysqli_query($con,$sql);
    header("Location:index.html?Successfully_added_massage_to_the_database");
?>