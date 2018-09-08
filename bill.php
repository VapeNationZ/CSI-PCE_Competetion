<?php 

if(isset($_POST['submit'])) {
   
$full_name      = $_POST['full_name'];
$email          = $_POST['email'];
$address        = $_POST['address'];
$city           = $_POST['city'];
$zip            = $_POST['zip'];
$state          = $_POST['state'];

$connection = mysqli_connect('localhost', 'root', '', 'ecomm');    
    
    if($connection) {
    
     header("Location: index.html");
    
    } else {
    
    die("Database connection failed");
    
    }
    
    $query  = "INSERT INTO cod_ecomm(full_name,email,address,city,zip,state)";
    $query .= "VALUES ('$full_name','$email','$address','$city','$zip','$state')";
    
    $result = mysqli_query($connection,$query);
    
    
    if(!$result)  {
        
 
    }
    
    
}


?>