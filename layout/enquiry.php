<style>
    .title {
        z-index: 999;
    }

    .title::after {
        content: url(images/title-after.png);
        bottom: 0;
    }

    .error {
        color: red;
        font-weight: 700;
        text-align: left;
        font-size: 12px;
    }
</style>



<div class="modal fade" id="enquire_now" tabindex="-1" aria-labelledby="enquire_now" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center mb-5 mt-4">
                            <div class="title text-center">
                                <h1>Enquiry</h1>
                            </div>
                        </div>
                        <div class="col-12">

                            <form id="member-form" method="post">
                                <fieldset id="member-form-id">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="fname">First Name <span class="text-danger">*</span></label>
                                            <input type="text" title="First Name" class="form-control inputTextBox mandatoryvalue" id="fname" name="fname" placeholder="First Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="lname">Last Name</label>
                                            <input type="text" title="Last Name" class="form-control inputTextBox mandatoryvalue" id="lname" name="lname" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="email">Email Address <span class="text-danger">*</span></label>
                                            <input type="email" title="Email Address" class="form-control mandatoryvalue emailid" id="email" name="email" placeholder="Email Address">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="phone">Phone Number <span class="text-danger">*</span></label>
                                            <input type="number" title="Phone Number" class="form-control numbervalue mandatoryvalue" maxlength="10" id="phone" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="occupation">Occupation <span class="text-danger">*</span></label>
                                            <select class="form-control" id="occupation">
                                                <option>Select</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="enquiry-type">Enquiry Type <span class="text-danger">*</span></label>
                                            <select class="form-control" id="enquiry-type">
                                                <option>Select</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Details <span style="color:red;">*</span></label>
                                        <textarea class="form-control mandatoryvalue" title="Message" rows="5" id="message_member" name="message_member" placeholder="Detail your enquiry here"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" id="member_submit" onclick="memberSubmit()" class="btn btn-secondary px-5">Submit</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>