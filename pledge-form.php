<?php include('layout/header.php') ?>


<div class="container-fluid px-lg-5">
    <div class="row">
        <div class="col-lg-4 col-md-6 mr-auto">
            <div class="banner-heading">
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="javascript:void(0);">Pledge</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<main class="container-in">
    <div class="inner-container">
        <section class="Pledge-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 pb-lg-5 wow bounceIn text-center">
                        <div class="title text-center">
                            <h1>Pledge Form</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h5 class="text-success">VOLUNTARY BLOOD DONATION FORM</h5><br>
                        <p>
                            <strong>Pledge :</strong><br>
                            I, hereby pledge to donate my blood at least once a year, on my birthday and I will
                            motivate & make
                            at least one more person take this pledge. I take the decision to be true to the
                            cause of blood
                            donation and donate blood till the age of 65.
                        </p>
                    </div>
                    <div class="col-12 py-5">
                        <h2 id="voluntarysuccessmsg" style="display:none; color:green;">Thank You for Your
                            Generous
                            Support to Parnav Foundation! </h2>
                        <h2 id="voluntaryerrormsg" style="display:none; color:red;">Something Went Wrong. Kindly
                            Try
                            Again!!!
                        </h2>
                        <a id="anotherresponsevoluntary" href="https://parnav.org/new-01/pledge-form.php"
                            style="display:none; color:#F2B200;"><b>For Submit Another Response Click Here
                                !!!</b> </a>
                        <form id="voluntary-form" method="post" enctype="multipart/form-data">
                            <fieldset id="voluntary-form-id">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Name <span class="text-danger">*</span></label>
                                        <input type="text" placeholder="Full Name" title="Name" name="voluntary_name"
                                            class="form-control inputTextBox mandatoryvalue" id="voluntary_name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="dob">Date Of Birth</label>
                                        <input type="date" title="Date of Birth" class="form-control"
                                            placeholder="DD-MM-YYYY" id="voluntary_dob" name="voluntary_dob">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Email Address <span class="text-danger">*</span></label>
                                        <input type="text" title="Email ID" name="voluntary_email"
                                            class="form-control mandatoryvalue emailid" id="voluntary_email">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="number">Phone Number <span class="text-danger">*</span></label>
                                        <input type="text" title="Phone Number"
                                            class="form-control mandatoryvalue numbervalue" name="voluntary_number"
                                            id="voluntary_number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Address">Address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control mandatoryvalue" name="voluntary_address"
                                        title="Address" id="voluntary_address">
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="city">City <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control mandatoryvalue inputTextBox"
                                            name="voluntary_city" title="City" id="voluntary_city">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="city">State <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control inputTextBox mandatoryvalue"
                                            title="State" name="voluntary_state" id="voluntary_state">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="pin">Pin Code <span class="text-danger">*</span></label>
                                        <input type="number" class="form-control numbervalue mandatoryvalue"
                                            name="voluntary_pin" title="Pin" id="voluntary_pin">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="pin">Country <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control inputTextBox mandatoryvalue"
                                            id="voluntary_country" name="voluntary_country" title="Country">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="dtype">Blood Group</label>
                                        <select class="form-control" name="bloodgroupv" id="bloodgroupv"
                                            title="Blood Group">
                                            <option>Select</option>
                                            <option value="O-">O-</option>
                                            <option value="O+">O+</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B-">B-</option>
                                            <option value="B+">B+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="AB+">AB+</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="dtype">How do you came to know about Raktabhiyan ? <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" name="about_raktsankalp"
                                            title="How do you came to know about RaktSankalp" id="about_raktsankalp">
                                            <option>Select</option>
                                            <option value="Social Media">Social Media</option>
                                            <option value="Freind">Freind </option>
                                            <option value="Blood Bank">Blood Bank</option>
                                            <option value="News">News </option>
                                            <option value="Other">Other </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="dtype">Do you agree to take pledge  of Voluntary Blood Donation on
                                            your birthday week every year? <span class="text-danger">*</span></label>
                                        <select class="form-control" name="voluntary_blood_birthday"
                                            title="Do you agree to take pledge  of Voluntary Blood Donation on your birthday week every year?"
                                            id="voluntary_blood_birthday">
                                            <option>Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No </option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="dtype">Do you agree to make one person take this pledge? </label>
                                        <select class="form-control" name="pledge_person"
                                            title="Do you agree to make one person take this pledge?"
                                            id="pledge_person">
                                            <option>Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No </option>

                                        </select>
                                    </div>

                                </div>


                                <div class="form-row">
                                    <div class="form-group m-0">
                                        <p>Recommend a person to take this pledge. Name and Contact No.
                                            (Optional)
                                        </p>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" placeholder="Name" title="Name"
                                            class="form-control inputTextBox" id="recommend_person_name"
                                            name="recommend_person_name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="text" placeholder="Phone Number" title="Phone Number"
                                            class="form-control numbervalue" maxlength="10"
                                            name="recommend_person_mobile" id="recommend_person_mobile">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="dtype">Would you like to volunteer with us ?</label>
                                        <select class="form-control" name="would_you_like"
                                            title="Would you like to volunteer with us ?"
                                            id="would_you_like">
                                            <option>Select</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No </option>
                                            <option value="Maybe">Maybe </option>

                                        </select>
                                    </div>

                                </div>


                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="dtype">Additional Comments or Instructions: </label>
                                        <textarea class="form-control" name="additional_comments_or_instructions"
                                            id="additional_comments_or_instructions" row="5"></textarea>
                                    </div>
                                </div>
                                <!-- <div class="form py-3">
                                    <p><strong>Terms and Conditions:</strong></p>
                                    <P>
                                    <ul>
                                        <li>
                                            By signing/submitting this form, I acknowledge that this pledge is
                                            a commitment to donate the specified amount or resource to Parnav
                                            Foundation.
                                        </li>
                                        <li>
                                            I understand that this pledge is subject to the terms and conditions
                                            set
                                            forth by Parnav Foundation.
                                        </li>
                                    </ul>
                                    </P>
                                </div> -->
                                <!-- <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlFile1">Donar's Signature </label>
                                        <input type="file" class="form-control form-control-file" id="volunter_donar_sign" title="Donar's Signature" name="volunter_donar_sign">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="odonation">Date</label>
                                        <input type="date" name="volunter_date" title="Date" placeholder="DD-MM-YYYY" class="form-control" id="volunter_date">
                                    </div>
                                </div> -->
                                <div class="form-row py-5">
                                    <button type="button" id="volunter_submit" onclick="submitVolunterform()"
                                        class="btn rounded-0 px-5 btn-secondary">Submit</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<script>
    function submitVolunterform() {
        if (validateFormValue('voluntary-form-id') == false) {
            var firstEmptyField = $("select.mandatoryvalue, input.mandatoryvalue,textarea.mandatoryvalue").filter(function () {
                return $(this).val() == null || $(this).val() == 'null' || $(this).val() == '' || $(this).val() == -1;
            }).first();

            if (firstEmptyField.length > 0) {
                firstEmptyField.focus();
            }

        } else {
            $('#volunter_submit').attr('disabled', 'disabled');
            $('.loader').show();
            var formData = new FormData($('#voluntary-form')[0]);
            console.log(formData);
            $.ajax({
                type: 'POST',
                url: 'sendmail-volunter-form.php',
                data: formData,
                processData: false,
                contentType: false,
                success: function (data) {
                    console.log(data);
                    if (data == 'success') {
                        $('.loader').hide();
                        $('#voluntary-form').hide();
                        $('#voluntaryerrormsg').hide();
                        $('#voluntarysuccessmsg').show();
                        $('#anotherresponsevoluntary').show();
                    } else {
                        $('.loader').hide();
                        $('#voluntary-form').hide();
                        $('#voluntaryerrormsg').show();
                        $('#voluntarysuccessmsg').hide();
                        $('#anotherresponsevoluntary').show();
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error('AJAX Error:', textStatus, errorThrown);
                    // Handle the error here (show an error message, log, etc.)
                }
            });
        }
    }
</script>
<?php include('layout/footer.php') ?>