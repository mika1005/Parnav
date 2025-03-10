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
                        <h1>Member Registration</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="Pledge-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5">
                        <form id="member-form" method="post">
                            <fieldset id="member_form_submit">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="fname">First Name <span class="text-danger">*</span></label>
                                        <input type="text" title="First Name" class="form-control inputTextBox mandatoryvalue" id="fname" name="first" placeholder="First Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lname">Last Name</label>
                                        <input type="text" title="Last Name" class="form-control inputTextBox " id="lname" name="last" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="email">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" title="Email Address" class="form-control mandatoryvalue emailid" id="email" name="email" placeholder="Email Address">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phone">Phone Number <span class="text-danger">*</span></label>
                                        <input type="number" title="Phone Number" class="form-control numbervalue mandatoryvalue" name = "phone" maxlength="10" id="phone" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message <span style="color:red;"></span></label>
                                    <textarea class="form-control " title="Message" rows="5" id="message_member" name="msg1" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="button" name="submit" id="submit" value="Submit" onclick="memberFormSubmit()" class="btn rounded-0 btn-secondary px-5">Submit</button>
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
     function memberFormSubmit() {


        if (validateFormValue('member_form_submit') == false) {
            var firstEmptyField = $("select.mandatoryvalue, input.mandatoryvalue,textarea.mandatoryvalue").filter(function () {
                return $(this).val() == null || $(this).val() == 'null' || $(this).val() == '' || $(this).val() == -1;
            }).first();

            if (firstEmptyField.length > 0) {
                firstEmptyField.focus();
            }
        }
        else
        {
            $('.loader').show();
            var formData = new FormData($('#member-form')[0]);
            console.log(formData);
            $.ajax({
                type: 'POST',
                url: 'member-form-submit.php',
                data: formData,
                processData: false,
                contentType: false,
                success: function (data) {
                    $('.loader').hide();
                    console.log(data);
                    $('#member_form_submit').css('display','none');
                    $('#member-form').html(data);
                    // if (data == 'success') {
                    //     $('.loader').hide();
                    //     $('#volunteer-form').hide();
                    //     $('#voluntaryregerrormsg').hide();
                    //     $('#voluntaryregsuccessmsg').show();
                    //     $('#anotherresponsevoluntaryreg').show();
                    //     setTimeout(() => {
                    //         $("html, body").animate({
                    //         scrollTop: 0
                    //     }, 1000);
                    //     }, 500);
                    // } else{
                    //     $('.loader').hide();
                    //     $('#volunteer-form').hide();
                    //     $('#voluntaryregerrormsg').show();
                    //     $('#voluntaryregsuccessmsg').hide();
                    //     $('#anotherresponsevoluntaryreg').show();
                    //      setTimeout(() => {
                    //         $("html, body").animate({
                    //         scrollTop: 0
                    //     }, 1000);
                    //     }, 500);
                    // }
                }
            });
        }
    }
</script>

<?php include('layout/footer.php') ?>














