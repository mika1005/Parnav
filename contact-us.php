<?php include('layout/header.php') ?>

<style>
    .error {
        color: red;
        font-weight: 700;
        text-align: left;
    }

    
</style>

<div class="container-fluid px-lg-5">
    <div class="row">
        <div class="col-lg-4 col-md-6 mr-auto">
            <div class="banner-heading">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="javascript:void(0);" class="active">Contact Us</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="page-title" style="background: url(images/get-involved-bg.png) center center no-repeat;">
    <div class="container-fluid px-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">
                <h1 class="Times">Contact Us<br>
                    To Help Needy People</h1>
            </div>
        </div>
    </div>
</section>
<main class="container-in">
    <div class="inner-container">
        <section class="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <h4 class="pb-5">Contact Details</h4>
                        <div class="row pb-5 justify-content-start">
                            <div class="col-lg-3 col-4">
                                <div class="contact-wrapper d-flex justify-content-around">
                                    <span> <img src="images/address.png" class="img-fluid"></span>
                                    <span><img src="images/about-us-before.png" class="img-fluid"></span>
                                </div>
                            </div>
                            <div class="col-lg-9 col-8">
                                <div class="icon-text">
                                    <h5 class="icon-box-title">Address</h5>
                                    <div class="content">
                                        <p>Sara Apartment, Near Asquare Mall, Sector 73, Noida U.P 201304</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pb-5 justify-content-start">
                            <div class="col-lg-3 col-4">
                                <div class="contact-wrapper d-flex justify-content-around">
                                    <span> <img src="images/email-2.png" class="img-fluid"></span>
                                    <span><img src="images/about-us-before.png" class="img-fluid"></span>
                                </div>
                            </div>
                            <div class="col-lg-9 col-8">
                                <div class="icon-text">
                                    <h5 class="icon-box-title">Mail Id</h5>
                                    <div class="content">
                                        <p>care@parnav.org <br> raktabhaiyan@gmail.com


                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pb-5 justify-content-start">
                            <div class="col-lg-3 col-4">
                                <div class="contact-wrapper d-flex justify-content-around">
                                    <span> <img src="images/phone-call.png" class="img-fluid"></span>
                                    <span><img src="images/about-us-before.png" class="img-fluid"></span>
                                </div>
                            </div>
                            <div class="col-lg-9 col-8">
                                <div class="icon-text">
                                    <h5 class="icon-box-title">Phone No.</h5>
                                    <div class="content">
                                        <p>+91-8826271085<br>
                                            +91-9870262669<br>
                                            +91-9953842558
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 mb-lg-0 mb-5 text-center">
                        <div class="qr-code">
                            <h2>Scan QR Code For Donation</h2>
                            <div class="p-4 border rounded">
                                <img src="images/qr-dontation.png" class="img-fluid rounded">
                            </div>

                           

                        </div>
                    </div>
                </div>
            </div>
            <div class="follow-us-bg py-4 mb-5">
                <div class="container-fluid px-lg-5">
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-12">
                            <h4 class="pb-3">Follow Us On Social Media</h4>
                            <div class="social-icon">
                                <ul class="d-flex justify-content-between p-0">
                                    <li><a href="https://www.facebook.com/arjun.parnav/" target="_blank"><img src="images/facebook-icon.png" class="img-fluid" alt=" ParNav Facebook"></a></li>
                                    <li><a href="https://www.instagram.com/_par_nav_/" target="_blank"><img src="images/instagram-icon.png" class="img-fluid" alt="ParNav Instagram"></a></li>
                                    <li><a href="https://www.linkedin.com/company/parnav-foundation/" target="_blank"><img src="images/linkedin-icon.png" class="img-fluid" alt="ParNav Linkedin"></a></li>
                                    <li><a href="https://twitter.com/_par_nav_?s=20" target="_blank"><img src="images/twitter-icon.png" class="img-fluid" alt="Facebook"></a></li>
                                    <li><a href="https://wa.me/+918860840179" target="_blank"><img src="images/whatsapp-icon.png" class="img-fluid" alt="Facebook"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <h4 class="pb-3">Parnav Foundation Bank Details:</h4>
                            <p>
                            Bank Name- IndusInd Bank<br>
IFSC Code- INDB0001358<br>
A/C Holder Name- Parnav Foundation<br>
A/C Number- 201028880137
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pb-lg-5">
                <div class="row">
                    <div class="col-12 text-center py-lg-0 py-3 form-footer p-lg-5">
                        <div class="form-title">
                            <h1>GET INVOLVED <span>TODAY!</span></h1>
                            <p>Your Information Is safe With Us!</p>
                        </div>

                        <h2 id="successmsg" style="display:none; color:green;">Thank You for Reaching Out to Parnav
                            Foundation! </h2>
                        <h2 id="errormsg" style="display:none; color:red;">Something Went Wrong. Kindly Try Again!!!
                        </h2>
                        <a id="anotherresponse" href="https://parnav.org/contact-us.php" style="display:none; color:#F2B200;"><b>Submit Another Query !!!</b> </a>
                        <form method="post" id="contact-form">
                            <fieldset id="contact-form-id">
                                <div class="form-row pb-4">
                                    <div class="form-group col-lg-4 col-12">
                                        <input type="text" title="Name" name="fullname" id="fullname" placeholder="Name" class="form-control contact-form-tag mandatoryvalue inputTextBox form-control-lg">
                                        <!-- <p id="fullname-error" class="error"></p> -->
                                    </div>
                                    <div class="form-group col-lg-4 col-12">
                                        <input type="text" name="emailid" title="Email ID" id="emailid" placeholder="Email" class="form-control contact-form-tag mandatoryvalue emailid form-control-lg">
                                        <!-- <p id="emailid-error" class="error"></p> -->
                                    </div>
                                    <div class="form-group col-lg-4 col-12">
                                        <input type="text" name="mobileno" title="Phone Number" maxlength="10" id="mobileno" placeholder="Phone Number" class="form-control contact-form-tag mandatoryvalue numbervalue form-control-lg">
                                        <!-- <p id="mobileno-error" class="error"></p> -->
                                    </div>
                                </div>
                                <div class="form-row  pb-4">
                                    <div class="form-group col-lg-12 col-12">
                                        <textarea name="meassge_contact" title="Message" id="meassge_contact" class="form-control contact-form-tag mandatoryvalue form-control-lg" placeholder="Message"></textarea>
                                        <!-- <p id="meassge_contact-error" class="error"></p> -->
                                    </div>
                                </div>
                                <button type="button" id="submitbtnContact" onclick="submitContactform()" class="btn btn-sm btn-danger btn-doante px-5">SEND</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</main>

<?php include('layout/footer.php') ?>
