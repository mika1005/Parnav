<?php include('layout/header.php') ?>


<div class="container-fluid px-lg-5">
    <div class="row">
        <div class="col-lg-4 col-md-6 mr-auto">
            <div class="banner-heading">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="javascript:void(0);">Get Involved</a></li>
                    <li><a href="javascript:void(0);" class="active">Blood Bank</a></li>
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
                        <h1>Blood Bank Form</h1>
                    </div>
                </div>
            </div>
        </div>
        <section id="tw-intro" class="aboutus  position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h5 class="text-success">Donar Information</h5>
                    </div>
                    <div class="col-12">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="name">Blood Bank Name <span class="text-danger">*</span></label>
                                    <input type="text" placeholder="Full Name" name="name" class="form-control" id="name">
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
                                <div class="form-group">
                                    <h5 class="text-success">Contact Person</h5>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                    <input type="text" placeholder="Full Name" name="name" class="form-control" id="name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="pin">Designation <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="occupation">
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
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="dtype">Blood Group <span class="text-danger">*</span></label>
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
                                <div class="form-group col-md-6">
                                    <label for="dtype">Frequency <span class="text-danger">*</span></label>
                                    <select class="form-control" id="dtype">
                                        <option>Select</option>
                                        <option>1 Unit</option>
                                        <option>2 Units</option>
                                        <option>3 Units</option>
                                        <option>4 Units</option>
                                        <option>5 Units</option>
                                        <option>10 Units</option>
                                        <option>15 Units</option>
                                        <option>20 Units</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="date">Date <span class="text-danger">*</span></label>
                                    <input type="date" name="date" class="form-control" id="date">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="time">Time <span class="text-danger">*</span></label>
                                    <input type="time" class="form-control" name="time" id="time">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="doner-required">No.Of Donar Required <span class="text-danger">*</span></label>
                                    <input type="text" name="doner-required" class="form-control" id="doner-required">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="dtype">Blood Component Needed <span class="text-danger">*</span></label>
                                    <select class="form-control" id="dtype">
                                        <option>Select</option>
                                        <option>1 </option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
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