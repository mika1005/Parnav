<?php
include("db.php");
    
    if (isset($_SERVER['REQUEST_METHOD'])=="POST") {
        $first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $msg1 = $_POST['msg1'];
      
       
    

   
   
        $query="INSERT INTO `member`(`first`, `last`, `email`, `phone`, `msg1`)
         VALUES ('$first','$last','$email','$phone','$msg1')";
   
    
     if( $run = mysqli_query($conn,$query));{
        $submitSuccess='  
        <strong><center>Thank You for Submitting the form we will contact youn soon ..</center></strong>';
        if(isset( $submitSuccess)) 
                    echo $submitSuccess;
     
     }
    }


 ?>