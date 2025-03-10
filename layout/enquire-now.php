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
                                <h1>GET INVOLVED</h1>
                            </div>
                        </div>
                        <div class="col-12">
                            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item about-item mb-lg-0 mb-2">
                                    <a class="nav-link btn btn-about-us px-5 d-inline-block active"
                                        id="pills-member-tab" data-toggle="pill" href="#pills-member" role="tab"
                                        aria-controls="pills-member" aria-selected="true">Member </a>
                                </li>
                                <li class="nav-item about-item mb-lg-0 mb-2">
                                    <a class="nav-link btn btn-about-us px-5 d-inline-block" id="pills-volunteer-tab"
                                        data-toggle="pill" href="#pills-volunteer" role="tab"
                                        aria-controls="pills-volunteer" aria-selected="false">Volunteer</a>
                                </li>
                                <li class="nav-item about-item mb-lg-0 mb-2">
                                    <a class="nav-link btn btn-about-us px-5 d-inline-block" id="pills-internship-tab"
                                        data-toggle="pill" href="#pills-internship" role="tab"
                                        aria-controls="pills-internship" aria-selected="false">Internship</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active py-lg-4" id="pills-member" role="tabpanel"
                                    aria-labelledby="pills-member-tab">
                                    <form id="member-form" method="post">
                                        <fieldset id="member-form-id1">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="fname">First Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" title="First Name"
                                                        class="form-control inputTextBox mandatoryvalue" id="fname" name="fname"
                                                        placeholder="First Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="lname">Last Name</label>
                                                    <input type="text" title="Last Name"
                                                        class="form-control inputTextBox mandatoryvalue" id="lname" name="lname"
                                                        placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="email">Email Address <span
                                                            class="text-danger">*</span></label>
                                                    <input type="email" title="Email Address"
                                                        class="form-control mandatoryvalue emailid" id="email"
                                                        name="email" placeholder="Email Address">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="phone">Phone Number <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" title="Phone Number"
                                                        class="form-control numbervalue mandatoryvalue" maxlength="10" id="phone"
                                                        placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="message">Message <span style="color:red;">*</span></label>
                                                <textarea class="form-control mandatoryvalue" title="Message" rows="5"
                                                    id="message_member" name="message_member"
                                                    placeholder="Message"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="button" id="member_submit" onclick="memberSubmit()"
                                                    class="btn btn-secondary px-5">Submit</button>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="tab-pane fade py-lg-4" id="pills-volunteer" role="tabpanel"
                                    aria-labelledby="pills-volunteer-tab">
                                    <form id="volunteer-form">
                                        <fieldset id="volunteer-form-id">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="fname">First Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" title="First Name"
                                                        class="form-control inputTextBox mandatoryvalue" name="vfname" id="vfname"
                                                        placeholder="First Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="lname">Last Name</label>
                                                    <input type="text" title="Last Name" class="form-control inputTextBox mandatoryvalue" name="vlname"
                                                        id="vlname" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="email">Email Address <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" title="Email Address" class="form-control mandatoryvalue emailid"
                                                        name="vemail" id="vemail" placeholder="Email Address">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="phone">Phone Number <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" title="Phone Number" class="form-control mandatoryvalue numbervalue"
                                                        maxlength="10" name="vphone" id="vphone"
                                                        placeholder="Phone Number">
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
                                                <button type="button" onclick="submitVolunter()"
                                                    class="btn btn-secondary px-5">Submit</button>
                                            </div>
                                        </fieldset>
                                    </form>

                                </div>
                                <div class="tab-pane fade py-lg-4" id="pills-internship" role="tabpanel"
                                    aria-labelledby="pills-internship-tab">
                                    <form id="internship-form">
                                        <fieldset id="internship-form-id">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="fname">First Name <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" title="First Name" class="form-control mandatoryvalue inputTextBox" name="ifname" id="ifname"
                                                        placeholder="First Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="lname">Last Name</label>
                                                    <input type="text" class="form-control mandatoryvalue inputTextBox" name="ilname" title="Last Name" id="ilname" placeholder="Last Name">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="email">Email Address <span
                                                            class="text-danger">*</span></label>
                                                    <input type="email" class="form-control mandatoryvalue emailid" title="Email Address" name="iemail" id="iemail"
                                                        placeholder="Email Address">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="phone">Phone Number <span
                                                            class="text-danger">*</span></label>
                                                    <input type="number" class="form-control mandatoryvalue numbervalue" name="iphone" title="Phone Number" id="iphone"
                                                        placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="email">Course Name </label>
                                                    <input type="text" title="Course Name" class="form-control inputTextBox" name="coursename" id="coursename">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="phone">Year</label>
                                                    <input type="number" title="Year" class="form-control numbervalue" maxlength="4" id="Yearname" name="Yearname">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="email">Course Major </label>
                                                    <input type="text" title="Course Major" class="form-control inputTextBox" name="Course_Major" id="Course_Major">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="phone">College</label>
                                                    <input type="text" title="College" class="form-control" name="icollege" id="icollege">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="message">1. How many days would you like to intern?</label>
                                                <textarea title="How many days would you like to intern?" class="form-control" id="like_to_intern" name="like_to_intern" placeholder="Type here...."></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="message">2. What do you wish to learn in your internship with Parnav foundation?</label>
                                                    <textarea title="What do you wish to learn in your internship with Parnav foundation?" class="form-control" id="internship_with_parnav" name="internship_with_parnav" placeholder="Type here...."></textarea>
                                            </div>

                                            <div class="form-group">
                                                <button type="button" onclick="submitInternship()" class="btn btn-secondary px-5">Submit</button>
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
    </div>
</div>