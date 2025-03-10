<?php include('layout/header.php') ?>


<div class="container-fluid px-lg-5">
    <div class="row">
        <div class="col-lg-4 col-md-6 mr-auto">
            <div class="banner-heading">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="javascript:void(0);" class="active">Others Form</a></li>
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
        <section id="tw-intro" class="aboutus  position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item about-item mb-lg-0 mb-2">
                                <a class="nav-link btn btn-about-us px-5 d-inline-block active" id="pills-about-tab" data-toggle="pill" href="#pills-about" role="tab" aria-controls="pills-about" aria-selected="true">Blood Donation/ Receive Blood </a>
                            </li>
                            <li class="nav-item about-item mb-lg-0 mb-2">
                                <a class="nav-link btn btn-about-us px-5 d-inline-block" id="pills-visioin-tab" data-toggle="pill" href="#pills-visioin" role="tab" aria-controls="pills-visioin" aria-selected="false">Ration</a>
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
                <div class="tab-pane fade show active" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 py-5">
                                <div class="form-row align-items-center justify-content-start">
                                    <div class="form-group col-lg-1">
                                        <p class="m-0"><strong>You are</strong></p>
                                    </div>
                                    <div class="form-group col-lg-1">
                                        <div class="form-check">
                                            <input class="form-check-input radioshow" type="radio" name="Donar" id="radio1" data-class="div1" Checked>
                                            <label class="form-check-label" for="radio1">
                                                Donar
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-1">
                                        <div class="form-check">
                                            <input class="form-check-input radioshow" type="radio" name="Donar" data-class="div2" id="radio2">
                                            <label class="form-check-label" for="radio2">
                                                Recipient
                                            </label>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group col-lg-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="Donar" id="1000">
                                            <label class="form-check-label" for="1000">
                                                Blood Bank
                                            </label>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <h5 class="text-success">Donar Information</h5>
                            </div>
                            <div class="col-12">
                                <div class="div1 allshow">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Name <span class="text-danger">*</span></label>
                                                <input type="text" placeholder="Full Name" name="name" class="form-control" id="name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="dob">Date Of Birth </label>
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
                                                <label for="dtype">Blood Group </label>
                                                <select class="form-control" id="dtype">
                                                    <option>Select</option>
                                                    <option>A+</option>
                                                    <option>A-</option>
                                                    <option>AB+</option>
                                                    <option>AB-</option>
                                                    <option>B+</option>
                                                    <option>B-</option>
                                                    <option>O+</option>
                                                    <option>O-</option>
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
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">I have read the requirements I am eligible to donate blood</label>
                                        </div>
                                        <div class="form-row py-5">
                                            <button type="submit" class="btn rounded-0 px-5 btn-secondary">Submit For Blood Donation</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="div2 allshow" style="display: none;">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="name">Patienet Name <span class="text-danger">*</span></label>
                                                <input type="text" placeholder="Full Name" name="name" class="form-control" id="name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="number">Contact Number <span class="text-danger">*</span></label>
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
                                                <label for="pin">Location <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="pin">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="pin">Hospital Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="hospital-name">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="dtype">Blood Group </label>
                                                <input type="text" class="form-control" id="blood-g">
                                            </div>
                                        </div>
                                        <div class="form-row py-5">
                                            <button type="submit" class="btn rounded-0 px-5 btn-secondary">Submit</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-visioin" role="tabpanel" aria-labelledby="pills-visioin-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Name <span class="text-danger">*</span></label>
                                            <input type="text" placeholder="Full Name" name="name" class="form-control" id="name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="dob">Date Of Birth </label>
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
                                            <label for="odonation">Occupation <span class="text-danger">*</span></label>
                                            <input type="text" placeholder="" class="form-control" id="odonation">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="odonation">Ration Kit <span class="text-danger">*</span></label>
                                            <select class="form-control" id="dtype">
                                                <option>Select</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="city">Donation Drop Location </label>
                                            <input type="text" class="form-control" id="city">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="city">I want pick- up arrangement from NGO </label>
                                            <input type="text" class="form-control" id="state">
                                        </div>
                                    </div>
                                    <div class="form-row py-5">
                                        <button type="submit" class="btn rounded-0 px-5 btn-secondary">Submit For Donation</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-we-do" role="tabpanel" aria-labelledby="pills-we-do-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Name <span class="text-danger">*</span></label>
                                            <input type="text" placeholder="Full Name" name="name" class="form-control" id="name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="dob">Date Of Birth </label>
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
                                            <label for="odonation">Occupation <span class="text-danger">*</span></label>
                                            <input type="text" placeholder="" class="form-control" id="odonation">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="odonation">Food Item <span class="text-danger">*</span></label>
                                            <select class="form-control" id="dtype">
                                                <option>Select</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="city">Donation Drop Location </label>
                                            <input type="text" class="form-control" id="city">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="city">I want pick- up arrangement from NGO </label>
                                            <input type="text" class="form-control" id="state">
                                        </div>
                                    </div>
                                    <div class="form-row py-5">
                                        <button type="submit" class="btn rounded-0 px-5 btn-secondary">Submit For Donation</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-our-team" role="tabpanel" aria-labelledby="pills-our-team-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Name <span class="text-danger">*</span></label>
                                            <input type="text" placeholder="Full Name" name="name" class="form-control" id="name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="dob">Date Of Birth </label>
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
                                            <label for="odonation">Occupation <span class="text-danger">*</span></label>
                                            <input type="text" placeholder="" class="form-control" id="odonation">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="odonation">Clothes <span class="text-danger">*</span></label>
                                            <select class="form-control" id="dtype">
                                                <option>Select</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="city">Donation Drop Location </label>
                                            <input type="text" placeholder="Adddress" class="form-control" id="city">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="city">I want pick- up arrangement from NGO </label>
                                            <input type="text" placeholder="Adddress" class="form-control" id="state">
                                        </div>
                                    </div>
                                    <div class="form-row py-5">
                                        <button type="submit" class="btn rounded-0 px-5 btn-secondary">Submit For Donation</button>
                                    </div>
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