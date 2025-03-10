<?php
$page_url = "https://parnav.org/raktabhiyan.php";
?>
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
        margin: 50px 0px;
    }

    .nav-item.doante_item:after {
        display: none;
    }

    .nav-pills .nav-link.btn-donate-us.active {
        color: #F2B200;
        background-color: #fff;
        border-bottom: 1px solid #F2B200;
    }
</style>
<div class="modal fade" id="share" tabindex="-1" aria-labelledby="share" aria-hidden="true">
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
                                <h1>Help By Sharing</h1>
                            </div>
                            <p>Fundraiser shared on social networks raise upto 5 times more!</p>
                        </div>
                    </div>
                </div>
                <div class="share border-top border-bottom">
                    <div class="container-fluid">
                        <div class="row share-icons py-5 d-lg-flex flex-wrap align-items-center justify-content-around">
                            <div class="icons">
                            <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode($page_url); ?>" target="_blank">                                    <span class="d-block">  
                                        <img src="images/icon-img/twitter-icon.png" class="img-fluid" alt="icon" />
                                    </span>
                                    <span class="d-block">
                                        X (Twitter)
                                    </span>
                                </a>
                            </div>
                            <!-- <div class="icons">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($page_url); ?>" target="_blank">
                            <span class="d-block">
                                        <img src="images/icon-img/instagram-icon.png" class="img-fluid" alt="icon" />
                                    </span>
                                    <span class="d-block">
                                        Instagram
                                    </span>
                                </a>
                            </div> -->
                            <div class="icons">
                            <a href="https://api.whatsapp.com/send?text=<?php echo urlencode($page_url); ?>" target="_blank">
                            <span class="d-block">
                                        <img src="images/icon-img/whatsapp-icon.png" class="img-fluid" alt="icon" />
                                    </span>
                                    <span class="d-block">
                                        Whats App
                                    </span>
                                </a>
                            </div>
                            <div class="icons">
                            <a href="mailto:?subject=Check%20this%20out!&body=I%20found%20this%20interesting:%20<?php echo urlencode($page_url); ?>">
                            <span class="d-block">
                                        <img src="images/icon-img/email-icon.png" class="img-fluid" alt="icon" />
                                    </span>
                                    <span class="d-block">
                                        e-Mail
                                    </span>
                                </a>
                            </div>
                            <div class="icons">
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode($page_url); ?>" target="_blank">
                            <span class="d-block">
                                        <img src="images/icon-img/linkedin-icon.png" class="img-fluid" alt="icon" />
                                    </span>
                                    <span class="d-block">
                                        LinkedIn
                                    </span>
                                </a>
                            </div>
                            <div class="icons">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($page_url); ?>" target="_blank">
                            <span class="d-block">
                                        <img src="images/icon-img/facebook-icon.png" class="img-fluid" alt="icon" />
                                    </span>
                                    <span class="d-block">
                                        Facebook
                                    </span>
                                </a>
                            </div>
                            <!-- <div class="icons">
                                <a href="#" class="">
                                    <span class="d-block">
                                        <img src="images/icon-img/embad-icon.png" class="img-fluid" alt="icon" />
                                    </span>
                                    <span class="d-block">
                                        Embed Widget
                                    </span>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="container py-5">
                    <div class="row">
                        <div class="col-12">
                                                    <form>
                                <div class="form-group">
                                    <label for="copy">Copy URL</label>
                                    <input type="text" class="form-control" value="https://parnav.org/raktabhiyan.php" id="copy">
                                </div>
                                <div class="form-group text-center">
                                    <button type="button" class="btn btn-secondary px-5" onclick="copyUrl()">COPY</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
function copyUrl() {
    // Select the text field
    var copyText = document.getElementById("copy");

    // Select the text inside the input field
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices

    // Copy the text inside the input field
    navigator.clipboard.writeText(copyText.value).then(() => {
        alert("URL copied to clipboard!");
    }).catch(err => {
        console.error("Failed to copy: ", err);
    });
}
</script>
