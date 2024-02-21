<?php

$email = $_POST ['email'];
$password = $_POST ['password'];

$con = new mysqli( "localhost","root","","SignUp");

If($con->connect_error)
{
    die("Filed to connect: " . $con->connect_error);
}

else
{
    
    $stmt= $con-> prepare("select * from User where email = ?");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();


    if($stmt_result->num_rows > 0)
    {
       $data = $stmt_result->fetch_assoc();
        if($data['passwordd'] === $password)
        {
           
   
    $htmlContent = file_get_contents('main.html');

    
    echo $htmlContent;
    
           
        }
     else{ 
            
        include 'signin.html';
            echo "<h2 class='error-message'>Invalid Email or Password. <br> Try again.</h2>";
        }
    } 
    
    else{
        
        include 'signin.html';
            echo "<h2 class='error-message'>Invalid Email or Password. <br> Try again.</h2>";
    } 

}

?> 