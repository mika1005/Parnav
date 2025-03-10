<?php include('layout/header.php') ?>


<div class="container-fluid px-lg-5">
    <div class="row">
        <div class="col-lg-4 col-md-6 mr-auto">
            <div class="banner-heading">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="javascript:void(0);" class="active">Get Involved</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<main class="container-in">
    <div class="inner-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow bounceIn text-center">
                    <div class="title text-center">
                        <h1>Internship Registration</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="Pledge-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2 id="internshipsuccessmsg" style="display:none; color:green;">Thank You for Your Interest in an Internship at Parnav Foundation!  </h2>
                        <h2 id="internshiperrormsg" style="display:none; color:red;">Something Went Wrong. Kindly
                            Try
                            Again!!!
                        </h2>
                        <a id="anotherresponseinternshipreg" href="https://parnav.org/new-01/internship-registration.php"
                            style="display:none; color:#F2B200;"><b>For Submit Another Response Click Here
                                !!!</b> </a>
                        <form id="internship-form" method ="post">
                            <fieldset id="internship-form-id">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="fname">First Name <span class="text-danger">*</span></label>
                                        <input type="text" title="First Name"
                                            class="form-control mandatoryvalue inputTextBox" name="first" id="ifname"
                                            placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lname">Last Name</label>
                                        <input type="text" class="form-control inputTextBox"
                                            name="ilname" title="Last Name" id="last" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control mandatoryvalue emailid"
                                            title="Email Address" name="email" id="iemail" placeholder="Email Address">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phone">Phone Number <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control mandatoryvalue numbervalue"
                                            name="phone" title="Phone Number" id="iphone" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Course Name </label>
                                        <input type="text" title="Course Name" class="form-control inputTextBox"
                                            name="course" id="coursename">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phone">Year</label>
                                        <input type="number" title="Year" class="form-control numbervalue" maxlength="4"
                                            id="Yearname" name="year">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Course Major </label>
                                        <input type="text" title="Course Major" class="form-control inputTextBox"
                                            name="major" id="Course_Major">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phone">College</label>
                                        <input type="text" title="College" class="form-control" name="college"
                                            id="icollege">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">1. How many days would you like to intern?</label>
                                    <textarea title="How many days would you like to intern?" class="form-control"
                                        id="like_to_intern" name="msg1"
                                        placeholder="Type here...."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="message">2. What do you wish to learn in your internship with Parnav foundation?</label>
                                    <textarea
                                        title="What do you wish to learn in your internship with Parnav foundation?"
                                        class="form-control" id="internship_with_parnav" name="msg2"
                                        placeholder="Type here...."></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="button" id="submit-internship" onclick="submitInternship()" 
                                        class="btn rounded-0 btn-secondary px-5">Submit</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>










<?php
include("db.php");


    if (isset($_POST['submit'])) {
   
        $first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $course = $_POST['course'];
        $year = $_POST['year'];
        $major = $_POST['major'];
        $college = $_POST['college'];
        $msg1 = $_POST['msg1'];
        $msg2 = $_POST['msg2'];
    
       
    

   
    
        $query="INSERT INTO `internship`(`first`, `last`, `email`, `phone`, `course`, `year`, `major`, `college`,`msg1`, `msg2`)
         VALUES ('$first','$last','$email','$phone','$course','$year','$major','$college','$msg1','$msg2')";
  
    
     if( $run = mysqli_query($conn,$query));{
        $submitSuccess='  
        <strong><center>data Submitted <center></strong>';
        if(isset( $submitSuccess)) 
                    echo $submitSuccess;
     
     }
    }


 ?>








<?php include('layout/footer.php') ?>