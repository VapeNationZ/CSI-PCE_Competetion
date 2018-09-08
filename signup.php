<?php 

if(isset($_POST['submit'])) {
   
$f_name      = $_POST['f_name'];
$l_name      = $_POST['l_name'];
$email       = $_POST['email'];
$password    = $_POST['password'];
$c_password  = $_POST['c_password'];
    
$connection = mysqli_connect('localhost', 'root', '', 'ecomm');    
    
    if($connection) {
    
    header("Location: index.html");
    
    } else {
    
    die("Database connection failed");
    
    }
    
    $query  = "INSERT INTO signup_ecomm(f_name,l_name,email,password,c_password)";
    $query .= "VALUES ('$f_name','$l_name','$email','$password','$c_password')";
    
    $result = mysqli_query($connection,$query);
    
    
    if(!$result)  {
        
    }
    
    
}


?>