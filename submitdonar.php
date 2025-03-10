<?php
    error_reporting(1);
  include("db.php");

    $qry = "INSERT INTO `donation`(`name`, `dob`, `email`, `phone`, `address`, `city`, `state`, `pincode`, `country`, `occupation`, `ration_kit`, `drop_location`, `pickup_from_ngo`,`type`) VALUES ('" . $_REQUEST['name'] . "','" . $_REQUEST['dob']  . "','" .  $_REQUEST['email']  . "','" .  $_REQUEST['phone']  . "','" .  $_REQUEST['address']  . "','" .  $_REQUEST['city']  . "','" .  $_REQUEST['state']  . "','" .  $_REQUEST['pincode']  . "','" .  $_REQUEST['country']  . "','" .  $_REQUEST['occupation']  . "','" .  $_REQUEST['ration_kit']  . "','" .  $_REQUEST['drop_location']  . "','" .  $_REQUEST['pickup_from_ngo']  . "','" .  $_REQUEST['type']  . "')";
    $exquted = mysqli_query($conn, $qry);
        
    if($exquted)
    {
        echo 'success';
    }
    else
    {
        echo 'error';
    }



?>