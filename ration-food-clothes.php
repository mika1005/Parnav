<?php include('layout/header.php') ?>


<div class="container-fluid px-lg-5">
    <div class="row">
        <div class="col-lg-4 col-md-6 mr-auto">
            <div class="banner-heading">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="javascript:void(0);" class="active">Ration / Food / Clothes Form</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<main class="container-in">
    <div class="inner-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pb-lg-5 wow bounceIn text-center">
                    <div class="title text-center">
                        <h1>Form</h1>
                    </div>
                </div>
            </div>
        </div>
         <h2 id="donarsuccessmsg" style="display:none; color:green;text-align: center;">Thank You for Donation </h2>
                        <h2 id="donarerrormsg" style="display:none; color:red;text-align: center;">Something Went Wrong. Kindly
                            Try
                            Again!!!
                        </h2>
                        <a id="anotherresponsevoluntaryreg" href="https://www.parnav.org/ration-food-clothes.php"
                            style="display:none; color:#F2B200;text-align: center;"><b><center></center>For Submit Another Response Click Here
                                !!!</center></b> </a>
        <section id="tw-intro" class="aboutus  position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                            <!-- <li class="nav-item about-item mb-lg-0 mb-2">
                                <a class="nav-link btn btn-about-us px-5 d-inline-block active" id="pills-about-tab" data-toggle="pill" href="#pills-about" role="tab" aria-controls="pills-about" aria-selected="true">Blood Donation/ Receive Blood </a>
                            </li> -->
                            <li class="nav-item about-item mb-lg-0 mb-2">
                                <a class="nav-link btn btn-about-us px-5 d-inline-block active" id="pills-visioin-tab" data-toggle="pill" href="#pills-visioin" role="tab" aria-controls="pills-visioin" aria-selected="false">Ration</a>
                            </li>
                            <li class="nav-item about-item mb-lg-0 mb-2">
                                <a class="nav-link btn btn-about-us px-5 d-inline-block" id="pills-we-do-tab" data-toggle="pill" href="#pills-we-do" role="tab" aria-controls="pills-we-do" aria-selected="false">Food</a>
                            </li>
                            <li class="nav-item about-item mb-lg-0 mb-2">
                                <a class="nav-link btn btn-about-us px-5 d-inline-block" id="pills-our-team-tab" data-toggle="pill" href="#pills-our-team" role="tab" aria-controls="pills-our-team" aria-selected="false">Clothes</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <!-- <div class="tab-pane fade show active" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 py-5">
                                <div class="form-row align-items-center justify-content-start">
                                    <div class="form-group col-lg-1">
                                        <p class="m-0"><strong>You are</strong></p>
                                    </div>
                                    <div class="form-group col-lg-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="Donar" id="100" Checked>
                                            <label class="form-check-label" for="100">
                                                Donar
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="Donar" id="500">
                                            <label class="form-check-label" for="500">
                                                Recipient
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="Donar" id="1000">
                                            <label class="form-check-label" for="1000">
                                                Blood Bank
                                            </label>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h5 class="text-success">Donar Information</h5>
                            </div>
                            <div class="col-12">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Name <span class="text-danger">*</span></label>
                                            <input type="text" placeholder="Full Name" name="name" class="form-control" id="name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="dob">Date Of Birth <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" placeholder="DD-MM-YYYY" id="dob">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="email">Email Address <span class="text-danger">*</span></label>
                                            <input type="email" maxlength="10" minlangth="10" name="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="number">Phone Number <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Address">Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="Address">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="city">City <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="city">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="city">State <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="state">
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="pin">Pin Code <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="pin">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="pin">Country <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="pin">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="pin">Occupation <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="occupation">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="dtype">Blood Type <span class="text-danger">*</span></label>
                                            <select class="form-control" id="dtype">
                                                <option>Select</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row border-bottom mb-3">
                                        <div class="form-group col-md-6">
                                            <p>Did you ever donate blood before? <span class="text-danger">*</span></p>
                                            <div class="form-row align-items-center justify-content-start">
                                                <div class="form-group col-lg-1">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="voluntary" id="100">
                                                        <label class="form-check-label" for="100">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-1">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="voluntary" id="500">
                                                        <label class="form-check-label" for="500">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <p>Did you donate blood three months back? <span class="text-danger">*</span></p>
                                            <div class="form-row align-items-center justify-content-start">
                                                <div class="form-group col-lg-1">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="voluntary" id="100">
                                                        <label class="form-check-label" for="100">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-1">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="voluntary" id="500">
                                                        <label class="form-check-label" for="500">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <h5 class="text-success">Health Security Check</h5>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <p>Do you suffer any diseases? <span class="text-danger">*</span></p>
                                            <div class="form-row align-items-center justify-content-start">
                                                <div class="form-group col-lg-1">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="voluntary" id="100">
                                                        <label class="form-check-label" for="100">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-1">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="voluntary" id="500">
                                                        <label class="form-check-label" for="500">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <p>Do you have allergies? <span class="text-danger">*</span></p>
                                            <div class="form-row align-items-center justify-content-start">
                                                <div class="form-group col-lg-1">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="voluntary" id="100">
                                                        <label class="form-check-label" for="100">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-1">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="voluntary" id="500">
                                                        <label class="form-check-label" for="500">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="dtype">Other Allergies </label>
                                            <textarea class="form-control" row="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <p>Have you ever had positive Blood test for HbsAg, Hcv, HIV? <span class="text-danger">*</span></p>
                                            <div class="form-row align-items-center justify-content-start">
                                                <div class="form-group col-lg-1">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="voluntary" id="100">
                                                        <label class="form-check-label" for="100">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-1">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="voluntary" id="500">
                                                        <label class="form-check-label" for="500">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <p>Do you have any cardiac problems? <span class="text-danger">*</span></p>
                                            <div class="form-row align-items-center justify-content-start">
                                                <div class="form-group col-lg-1">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="voluntary" id="100">
                                                        <label class="form-check-label" for="100">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-1">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="voluntary" id="500">
                                                        <label class="form-check-label" for="500">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row border-bottom mb-3">
                                        <div class="form-group col-md-6">
                                            <p>Do you suffer any bleeding disorders? <span class="text-danger">*</span></p>
                                            <div class="form-row align-items-center justify-content-start">
                                                <div class="form-group col-lg-1">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="voluntary" id="100">
                                                        <label class="form-check-label" for="100">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-1">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="voluntary" id="500">
                                                        <label class="form-check-label" for="500">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <p>Do you take any medication? <span class="text-danger">*</span></p>
                                            <div class="form-row align-items-center justify-content-start">
                                                <div class="form-group col-lg-1">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="voluntary" id="100">
                                                        <label class="form-check-label" for="100">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-1">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="voluntary" id="500">
                                                        <label class="form-check-label" for="500">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group">
                                            <h5 class="text-success">Consent & Signature</h5>
                                        </div>
                                    </div>
                                    <div class="form py-3">
                                        <p>I want to donate blood voluntarily and will not be entitled to claim any exchange for my donation I guarantee that all the provided
                                            information is true, I understand the questions, which are for my protection as well as to protect the recipient of my blood.</p>

                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <p>Parnav Foundation Requirements for males that wants to donate blood:</p>
                                            <P>
                                            <ul>
                                                <li>Be healthy and feeling well </li>
                                                <li> Be at least 18 years old</li>
                                                <li>Be at least 5'1</li>
                                                <li>Weigh at least 130 lbs</li>
                                            </ul>
                                            </P>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <p>Parnav Foundation Requirements for males that wants to donate blood:</p>
                                            <P>
                                            <ul>
                                                <li>Be healthy and feeling well </li>
                                                <li> Be at least 18 years old</li>
                                                <li>Be at least 5'5</li>
                                                <li>Weigh at least 150 lbs</li>
                                            </ul>
                                            </P>
                                        </div>
                                    </div>


                                    <div class="form-row">
                                        <div class="form-group col-12">
                                            <label for="exampleFormControlFile1">Donar's Signature <span class="text-danger">*</span></label>
                                            <input type="file" class="form-control form-control-file" id="exampleFormControlFile1">
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">I have read the requirements I am eligible to donate blood</label>
                                    </div>
                                    <div class="form-row py-5">
                                        <button type="submit" class="btn rounded-0 px-5 btn-secondary">Submit For Blood Donation</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="tab-pane fade show active" id="pills-visioin" role="tabpanel" aria-labelledby="pills-visioin-tab">
                    <div class="container">
                        <div class="row">
                        <div class="col-12 py-5">
                                <h5 class="text-success">Donor Information</h5>
                            </div>
                            <div class="col-12">
                                <form method="post" id="ration">
                                    <input type="hidden" name="type" id="type" value="ration">
                                    <fieldset id="ration-donar">
                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Name <span class="text-danger">*</span></label>
                                            <input type="text" title="Full Name" name="name" class="form-control inputTextBox mandatoryvalue" id="name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="dob">Date Of Birth </label>
                                            <input type="date" class="form-control " name="dob" title="Date Of Birth" id="dob">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="email">Email Address <span class="text-danger"></span></label>
                                            <input type="email" name="email" title="Email Id" class="form-control emailid " id="email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="number">Phone Number <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control numbervalue mandatoryvalue" title="Phone" name="phone" id="number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Address">Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control " name="address" title="Address" id="Address">
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="city">City <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control inputTextBox mandatoryvalue" placeholder="City" name="city" id="city">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="city">State <span class="text-danger"></span></label>
                                            <input type="text" class="form-control inputTextBox " title="State" name="state" id="state">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="pin">Pin Code <span class="text-danger"></span></label>
                                            <input type="number" class="form-control numbervalue " tile="Pin code" name="pincode" id="pin">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="pin">Country <span class="text-danger"></span></label>
                                            <input type="text" class="form-control inputTextBox " title="Country" name="country" id="country">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="odonation">Occupation <span class="text-danger"></span></label>
                                            <input type="text" placeholder="" class="form-control inputTextBox " title="Occupation" name="occupation" id="odonation">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="ration-kit">Ration Kit</label>
                                            <input type="text" placeholder="" class="form-control " title="ration Kit" name="ration_kit" id="ration-kit">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="city">Donation Drop Location </label>
                                            <input type="text" class="form-control " name="drop_location" title="Drop Location" id="drop_location">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="city">I want pick- up arrangement from NGO </label>
                                            <input type="text" class="form-control " name="pickup_from_ngo" title="Pick-up arrangement from NGO" id="state">
                                        </div>
                                    </div>
                                    <div class="form-row py-5">
                                        <button type="button" id="submit" onclick="submitDonarForm('ration','ration-donar')" class="btn rounded-0 px-5 btn-secondary">Submit For Donation</button>
                                    </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-we-do" role="tabpanel" aria-labelledby="pills-we-do-tab">
                    <div class="container">
                        <div class="row">
                        <div class="col-12 py-5">
                                <h5 class="text-success">Donor Information</h5>
                            </div>
                            <div class="col-12">
                                <form method="post" id="food">
                                    <input type="hidden" name="type" id="type" value="food">
                                    <fieldset id="food-donal">
                                        <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Name <span class="text-danger">*</span></label>
                                            <input type="text" title="Full Name" name="name" class="form-control inputTextBox mandatoryvalue" id="name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="dob">Date Of Birth </label>
                                            <input type="date" class="form-control " name="dob" title="Date Of Birth" id="dob">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="email">Email Address <span class="text-danger"></span></label>
                                            <input type="email" name="email" title="Email Id" class="form-control emailid " id="email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="number">Phone Number <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control numbervalue mandatoryvalue" title="Phone" name="phone" id="number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Address">Address <span class="text-danger"></span></label>
                                        <input type="text" class="form-control" name="address" title="Address" id="Address">
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="city">City <span class="text-danger"></span></label>
                                            <input type="text" class="form-control inputTextBox" placeholder="City" name="city" id="city">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="city">State <span class="text-danger"></span></label>
                                            <input type="text" class="form-control inputTextBox" title="State" name="state" id="state">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="pin">Pin Code <span class="text-danger"></span></label>
                                            <input type="number" class="form-control numbervalue " tile="Pin code" name="pincode" id="pin">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="pin">Country <span class="text-danger"></span></label>
                                            <input type="text" class="form-control inputTextBox " title="Country" name="country" id="country">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="odonation">Occupation <span class="text-danger"></span></label>
                                            <input type="text" placeholder="" class="form-control inputTextBox " title="Occupation" name="occupation" id="odonation">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="ration-kit">Ration Kit</label>
                                            <input type="text" placeholder="" class="form-control " title="ration Kit" name="ration_kit" id="ration-kit">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="city">Donation Drop Location </label>
                                            <input type="text" class="form-control " name="drop_location" title="Drop Location" id="drop_location">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="city">I want pick- up arrangement from NGO </label>
                                            <input type="text" class="form-control " name="pickup_from_ngo" title="Pick-up arrangement from NGO" id="state">
                                        </div>
                                    </div>
                                    <div class="form-row py-5">
                                        <button type="button" onclick="submitDonarForm('food','food-donar')" class="btn rounded-0 px-5 btn-secondary">Submit For Donation</button>
                                    </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-our-team" role="tabpanel" aria-labelledby="pills-our-team-tab">
                    <div class="container">
                        <div class="row">
                        <div class="col-12 py-5">
                                <h5 class="text-success">Donor Information</h5>
                            </div>
                            <div class="col-12">
                                <form method="post" id="clothes">
                                    <input type="hidden" name="type" id="type" value="clothes">
                                   <fieldset id="clothes-donar">
                                       <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Name <span class="text-danger">*</span></label>
                                            <input type="text" title="Full Name" name="name" class="form-control inputTextBox mandatoryvalue" id="name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="dob">Date Of Birth </label>
                                            <input type="date" class="form-control " name="dob" title="Date Of Birth" id="dob">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="email">Email Address <span class="text-danger"></span></label>
                                            <input type="email" name="email" title="Email Id" class="form-control emailid mandatoryvalue" id="email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="number">Phone Number <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control numbervalue mandatoryvalue" title="Phone" name="phone" id="number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Address">Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control " name="address" title="Address" id="Address">
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="city">City <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control inputTextBox " placeholder="City" name="city" id="city">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="city">State <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control inputTextBox " title="State" name="state" id="state">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="pin">Pin Code <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control numbervalue " tile="Pin code" name="pincode" id="pin">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="pin">Country <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control inputTextBox" title="Country" name="country" id="country">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="odonation">Occupation <span class="text-danger">*</span></label>
                                            <input type="text" placeholder="" class="form-control inputTextBox " title="Occupation" name="occupation" id="odonation">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="ration-kit">Ration Kit</label>
                                            <input type="text" placeholder="" class="form-control" title="ration Kit" name="ration_kit" id="ration-kit">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="city">Donation Drop Location </label>
                                            <input type="text" class="form-control " name="drop_location" title="Drop Location" id="drop_location">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="city">I want pick- up arrangement from NGO </label>
                                            <input type="text" class="form-control " name="pickup_from_ngo" title="Pick-up arrangement from NGO" id="state">
                                        </div>
                                    </div>
                                    <div class="form-row py-5">
                                        <button type="button" onclick="submitDonarForm('clothes','clothes-donar')" class="btn rounded-0 px-5 btn-secondary">Submit For Donation</button>
                                    </div>
                                   </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

















<?php include('layout/footer.php') ?>