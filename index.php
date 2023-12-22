<?php

$firstname=$_REQUEST['firstname'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];


if(isset($_POST['btntest'])){

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "bis";









    $conn = mysqli_connect($host,$user,$password,$db);

    $insert = "insert into table1 values('$firstname','$email','$password')";

    mysqli_query($conn,$insert);

    if($conn){
        echo("<h1 style = 'color:red;'>your registration is done!</h1>");
    }
    else{
        echo("<h1 style = 'color:blue;'>your registration is failed!</h1>");
        
    }




}







?>