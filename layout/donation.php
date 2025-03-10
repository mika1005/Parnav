<style>
    .title {
        z-index: 999;
    }

    .title::after {
        content: url(images/title-after.png);
        bottom: 0;
    }

    .support-txt h1 {
        font-family: Manrope;
        font-size: 24px;
        font-weight: 400;
        line-height: 51px;
        letter-spacing: 0.11em;
        text-align: center;
        color: #3B3A3A;
    }

    .support-txt span {
        font-weight: 800;
        color: #F2B200;
    }

    .form-donate h4 {
        font-family: Poppins;
        font-size: 16px;
        font-weight: 600;
        line-height: 51px;
        letter-spacing: 0.11em;
        text-align: center;
        margin: 15px 0px;
    }

    .nav-item.doante_item:after {
        display: none;
    }
    .nav-pills .nav-link.btn-donate-us.active, .nav-pills .show>.nav-link.btn-donate-us{
        background-color:transparent
    }
    .nav-pills .nav-link.btn-donate-us.active {
        color: #F2B200;
        background-color: #fff;
        border-bottom: 1px solid #F2B200;
    }
</style>
<div class="modal fade" id="doante_now" tabindex="-1" aria-labelledby="doante_now" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 text-center mb-5 mt-4">
                            <div class="title text-center">
                                <h1>SUPPORT THE CAUSE</h1>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 pr-lg-5 text-center border-right">
                            <div class="support-txt">
                                <h1>YOUR <span>DONATION</span> MAKES <br>A<br> DIFFERENCE</h1>
                            </div>
                            <img src="images/donation-model.png" class="img-fluid" alt="" />

                        </div>
                        <div class="col-lg-6 col-12 pl-lg-5">
                            <div class="d-block mb-5">
                                <button type="button" class=" btn rounded-0 btn-warning w-100 d-block">MAKE A DIFFERENCE</button>
                            </div>
                            <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item doante_item">
                                    <a class="nav-link btn-donate-us active" id="pills-one-time-tab" data-toggle="pill" href="#pills-one-time" role="tab" aria-controls="pills-one-time" aria-selected="true">One Time</a>
                                </li>
                                <li class="nav-item doante_item">
                                    <a class="nav-link btn-donate-us" id="pills-monthly-tab" data-toggle="pill" href="#pills-monthly" role="tab" aria-controls="pills-monthly" aria-selected="false">Monthly</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-one-time" role="tabpanel" aria-labelledby="pills-one-time-tab">

                                    <form class="form-donate">
                                        <div class="form-row m-0 justify-content-around align-items-center">
                                            <div class="form-group">
                                                <p class="m-0"> <strong> Amount</strong></p>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="amount" id="100" checked>
                                                    <label class="form-check-label" for="100">
                                                        ₹100
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="amount" id="500">
                                                    <label class="form-check-label" for="500">
                                                        ₹500
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="amount" id="1000">
                                                    <label class="form-check-label" for="1000">
                                                        ₹1000
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="amount" id="1500">
                                                    <label class="form-check-label" for="1500">
                                                        ₹1500
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="amount" id="2000">
                                                    <label class="form-check-label" for="2000">
                                                        ₹2000
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-around align-items-center">
                                            <div class="form-group">
                                            <p class="m-0"> <strong> Focus Area</strong></p>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="focus_area" id="education" checked>
                                                    <label class="form-check-label" for="education">
                                                    Education
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="focus_area" id="health">
                                                    <label class="form-check-label" for="health">
                                                    Health Care
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="focus_area" id="disaster">
                                                    <label class="form-check-label" for="disaster">
                                                    Disaster Response
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <h4>DONATE & HELP US TO HELP THEM!</h4>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="₹  Other Amount" id="recipient-name">
                                        </div>
                                       
                                        <div class="d-block mb-3">
                                            <button type="button" class="rounded-0 btn btn-danger w-100 d-block">DONATE NOW</button>
                                        </div>
                                        <div class="text-center">
                                        <img src="images/protect.png"class="img-fluid">
                                        </div>
                                        <h4>OR</h4>
                                        <div class="d-block mb-3">
                                            <a href="#" class="rounded-0 btn-enquire w-100 d-block">WANTS TO DONATE BLOOD? <strong>OR OTHER ITEM?</strong></a>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                                    <form>
                                    <div class="form-row m-0 justify-content-around align-items-center">
                                            <div class="form-group">
                                                <p class="m-0"> <strong> Amount</strong></p>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="amount" id="100" checked>
                                                    <label class="form-check-label" for="100">
                                                        ₹100
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="amount" id="500">
                                                    <label class="form-check-label" for="500">
                                                        ₹500
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="amount" id="1000">
                                                    <label class="form-check-label" for="1000">
                                                        ₹1000
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="amount" id="1500">
                                                    <label class="form-check-label" for="1500">
                                                        ₹1500
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="amount" id="2000">
                                                    <label class="form-check-label" for="2000">
                                                        ₹2000
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Anount:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                        <div class="d-block mb-3">
                                            <button type="button" class="rounded-0 btn btn-danger w-100 d-block">DONATE NOW</button>
                                        </div>
                                        <div class="text-center">
                                        <img src="images/protect.png"class="img-fluid">
                                        </div>
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