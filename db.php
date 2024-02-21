<?php

$server_name="localhost";
$username ="root";
$password="";
$database_name = "SignUp";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

 if(!$conn)
 {
    die("Connection Failed:" . mysqli_connect_error());
 }

if(isset($_POST ['save']))
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];

    
       
        $sql_query = "INSERT INTO user (firstname,lastname,email,phoneNumber,passwordd) 
             VALUES('$firstname','$lastname','$email','$phoneNumber','$password')";
    
          
   if(mysqli_query($conn,$sql_query))
    {

    echo "New Details Entry Inserted Successfully !";
    echo "<div id='countdown'></div>"; 

    
    echo "<script>
            var countdown = 3;
            var countdownElement = document.getElementById('countdown');
            function updateCountdown() {
                countdownElement.innerHTML = 'Redirecting in ' + countdown + ' seconds...';
                if (countdown == 0) {
                    window.location.href = 'main.html'; //target page
                } else {
                    countdown--;
                    setTimeout(updateCountdown, 1000);
                }
            }
            updateCountdown();
         </script>";

    exit(); 
    
  
  }
    else
      {
    echo "Error: " . $sql . "" . mysqli_error($conn);
      }
  mysqli_close($conn);

}


?>