<?php include('layout/header.php') ?>


<div class="container-fluid px-lg-5">
    <div class="row">
        <div class="col-lg-4 col-md-6 mr-auto">
            <div class="banner-heading">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="javascript:void(0);">Pledge</a></li>
                    <li><a href="javascript:void(0);" class="active">Raktabhiyan Pledge</a></li>
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
                        <h1>Raktabhiyan Pledge</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="Pledge-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h5 class="text-success">VOLUNTARY BLOOD DONATION FORM</h5><br>
                        <p>
                            <strong>Pledge :</strong><br>
                            I, hereby pledge to donate my blood at least once a year, on my birthday and I will motivate & make
                            at least one more person take this pledge. I take the decision to be true to the cause of blood
                            donation and donate blood till the age of 65.
                        </p>
                    </div>
                    <div class="col-12 py-5">
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
                                    <label for="dtype">Blood Group</label>
                                    <select class="form-control" id="dtype">
                                        <option>Select</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="dtype">How do you came to know about RaktSankalp ? <span class="text-danger">*</span></label>
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
                                <div class="form-group m-0">
                                    <p>Do you agree to take pledge  of Voluntary Blood Donation on your birthday week every year? </p>
                                </div>
                            </div>
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
                            <div class="form-row">
                                <div class="form-group m-0">
                                    <p>Do you agree to make one person take this pledge?</p>
                                </div>
                            </div>
                            <div class="form-row align-items-center justify-content-start">
                                <div class="form-group col-lg-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pledge" id="100">
                                        <label class="form-check-label" for="100">
                                            Yes
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-lg-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pledge" id="500">
                                        <label class="form-check-label" for="500">
                                            No
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group m-0">
                                    <p>Recommend a person to take this pledge. Name and Contact No. (Optional)</p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" placeholder="Name" class="form-control" id="pin">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" placeholder="Phone Number" class="form-control" id="pin">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group m-0">
                                    <p>Do you agree to make one person take this pledge?</p>
                                </div>
                            </div>
                            <div class="form-row align-items-center justify-content-start">
                                <div class="form-group col-lg-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="person" id="100">
                                        <label class="form-check-label" for="100">
                                            Yes
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-lg-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="person" id="500">
                                        <label class="form-check-label" for="500">
                                            No
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-lg-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="amount" id="500">
                                        <label class="form-check-label" for="500">
                                        Maybe
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="dtype">Additional Comments or Instructions: </label>
                                    <textarea class="form-control" row="5"></textarea>
                                </div>
                            </div>
                            <div class="form py-3">
                                <p><strong>Terms and Conditions:</strong></p>
                                <P>
                                <ul>
                                    <li>
                                        By signing/submitting this form, I acknowledge that this pledge is
                                        a commitment to donate the specified amount or resource to Parnav
                                        Foundation.
                                    </li>
                                    <li>
                                        I understand that this pledge is subject to the terms and conditions set forth by Parnav Foundation.
                                    </li>
                                </ul>
                                </P>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlFile1">Donar's Signature <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control form-control-file" id="exampleFormControlFile1">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="odonation">Date <span class="text-danger">*</span></label>
                                    <input type="date" placeholder="DD-MM-YYYY" class="form-control" id="date">
                                </div>
                            </div>
                            <div class="form-row py-5">
                                <button type="submit" class="btn rounded-0 px-5 btn-secondary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

















<?php include('layout/footer.php') ?>