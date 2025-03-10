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
                        <h1>Volunteer Registration</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="Pledge-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2 id="voluntaryregsuccessmsg" style="display:none; color:green;">Thank You for Your
                            Interest To Be A Volunteer At Parnav Foundation! </h2>
                        <h2 id="voluntaryregerrormsg" style="display:none; color:red;">Something Went Wrong. Kindly
                            Try
                            Again!!!
                        </h2>
                        <a id="anotherresponsevoluntaryreg" href="https://parnav.org/volunteer-registration.php"
                            style="display:none; color:#F2B200;"><b>For Submit Another Response Click Here
                                !!!</b> </a>
                        <form id="volunteer-form"  method="post">
                            <fieldset id="volunteer-form-id">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="fname">First Name <span class="text-danger">*</span></label>
                                        <input type="text" title="First Name"
                                            class="form-control inputTextBox mandatoryvalue" name="vfname" id="vfname"
                                            placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lname">Last Name</label>
                                        <input type="text" title="Last Name"
                                            class="form-control inputTextBox " name="vlname" id="vlname"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Email Address <span class="text-danger">*</span></label>
                                        <input type="text" title="Email Address"
                                            class="form-control mandatoryvalue emailid" name="vemail" id="vemail"
                                            placeholder="Email Address">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phone">Phone Number <span class="text-danger">*</span></label>
                                        <input type="text" title="Phone Number"
                                            class="form-control mandatoryvalue numbervalue" maxlength="10" name="vphone"
                                            id="vphone" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">1. Which days would you like to volunteer?
                                        Weekdays/Weekends</label>
                                    <textarea class="form-control"
                                        title="Which days would you like to volunteer? Weekdays/Weekends"
                                        name="would_you_like_volunter" placeholder="Type here ...."
                                        id="would_you_like_volunter"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="message">2. Would you be ready to volunteer minimum 6 hours
                                        on a day? If not the how much hours you can give?</label>
                                    <textarea class="form-control"
                                        title="Would you be ready to volunteer minimum 6 hours on a day? If not the how much hours you can give?"
                                        name="volunteer_minimum" placeholder="Type here ...."
                                        id="volunteer_minimum"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="message">3. Would you like to help with office work or Field
                                        work?</label>
                                    <textarea class="form-control"
                                        title="Would you like to help with office work or Field work?"
                                        name="office_work_or_Field_work" placeholder="Type here ...."
                                        id="office_work_or_Field_work"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="button" id="submit" onclick="submitVolunterreg()"
                                        class="btn rounded-0 btn-secondary px-5">Submit</button>
                                        <!--<button type="submit" name="submit" id="submit" value="Submit" class="btn rounded-0 btn-secondary px-5" >Submit </button>-->

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
// include("db.php");


//     if (isset($_POST['submit'])) {
//     $shopImg = '';
//         $first = $_POST['first'];
//         $last = $_POST['last'];
//         $email = $_POST['email'];
//         $phone = $_POST['phone'];
//         $msg1 = $_POST['msg1'];
//         $msg2 = $_POST['msg2'];
//         $msg3 = $_POST['msg3'];
       
    

   
    
//         $query="INSERT INTO `volunteer`(`first`, `last`, `email`, `phone`, `msg1`, `msg2`, `msg3`)
//          VALUES ('$first','$last','$email','$phone','$msg1','$msg2','$msg3')";
  
    
//      if( $run = mysqli_query($conn,$query));{
//         $submitSuccess='  
//         <strong>data entered successfully</strong>';
//         if(isset( $submitSuccess)) 
//                     echo $submitSuccess;
     
//      }
//     }


 ?>
















<?php include('layout/footer.php') ?>