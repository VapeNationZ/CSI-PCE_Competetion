<?php 

if(isset($_POST['submit'])) {
   
$email       = $_POST['email'];
$password    = $_POST['password'];
    
$connection = mysqli_connect('localhost', 'root', '', 'ecomm');    
    
    if($connection) {
    
     header("Location: index.html");
    
    } else {
    
    die("Database connection failed");
    
    }
    
    $query  = "INSERT INTO signup_ecomm(email,password)";
    $query .= "VALUES ('$email','$password')";
    
    $result = mysqli_query($connection,$query);
    
    
    if(!$result)  {
        
    }
    
    
}


?>