<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ParNav Foundation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="fonts/flaticon.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div class="top-bar d-none d-md-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="top-bar-left">
                        <div class="text">
                            <i class="fa fa-phone-alt"></i>
                            <p>+91 8860840179</p>
                        </div>
                        <div class="text">
                            <i class="fa fa-envelope"></i>
                            <p>parnavfoundation@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top-bar-right">
                        <div class="social">
                            <a href="https://twitter.com/_par_nav_?s=20"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/arjun.parnav/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/company/parnav-foundation/"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="https://www.instagram.com/_par_nav_/"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UC0asONfzK3VJE2kiAXrNYIA"><i
                                    class="fab fa-youtube"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">

            <a href="index.html" class="navbar-brand"><img src="img/logo.png" />ParNav</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="index.html" class="nav-item nav-link active">About</a>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Impact</a>
                        <div class="dropdown-menu">
                           
                            <a href="notfound.html" class="dropdown-item">Raktabhiyan</a>
                             <a href="notfound.html" class="dropdown-item">Education</a>
                                
                            <a href="notfound.html" class="dropdown-item">livelihood</a>
                            <a href="notfound.html" class="dropdown-item">Disaster relief & Rehabilitation</a>
                         

                        </div>
                        </div>-->
                    <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Join Us</a>
                            <div class="dropdown-menu">
                                <a href="notfound.html" class="dropdown-item">Blood Connector </a>
                                <a href="notfound.html" class="dropdown-item">Blood Bank </a>
                            
                                <a href="notfound.html" class="dropdown-item">Volunteer </a>
                                <a href="notfound.html" class="dropdown-item">Partner with us </a>
                                <a href="notfound.html" class="dropdown-item">Share Food</a>
                               
                                <a href="notfound.html" class="dropdown-item">Register as College /Company Ambassador  </a>



                            </div>
                            </div> -->

                            <a href="joinus.php" class="nav-item nav-link">Join Us</a>
                    <a href="blog.php" class="nav-item nav-link">Blog</a>
                    <a href="raktabhiyan.php" class="nav-item nav-link">Raktabhiyan</a>
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                    <!--  <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <a href="single.html" class="dropdown-item">Detail Page</a>
                                <a href="service.html" class="dropdown-item">What We Do</a>
                                <a href="team.html" class="dropdown-item">Meet The Team</a>
                                <a href="donate.html" class="dropdown-item">Donate Now</a>
                                <a href="volunteer.html" class="dropdown-item">Contribute</a>
                            </div>
                        </div>-->
                    <!-- <a href="notfound.html" class="nav-item nav-link">Contribute</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.html">Home</a>
                        <a href="#">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>Contact for any query</h2>
                </div>
                <div class="contact-img">
                    <img src="img/contact.jpg" alt="Image">
                </div>
                <div class="contact-form">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" action="mail-us.php" method="post"  novalidate="novalidate">
                            <div class="control-group"> 
                                <input type="text" class="form-control" id="name" placeholder="Your Name" name="name"  required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email"  name="email"  required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject"  name="subject"  placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" name="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit" value="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        <!-- Contact End -->


       <!-- Footer Start -->
       <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="footer-contact">
                        <h2>Our Head Office</h2>
                        <p><i class="fa fa-map-marker-alt"></i>Sector 73 , Noida , Uttar Pradesh</p>
                        <p><i class="fa fa-phone-alt"></i>+91 8860840179<br> +91 9870262669 <br>9953842558</p>
                        <p><i class="fa fa-envelope"></i>parnavfoundation@gmail.com</p>
                        <div class="footer-social">
                            <a class="btn btn-custom" href="https://twitter.com/_par_nav_?s=20"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-custom" href="https://www.facebook.com/arjun.parnav/"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-custom" href="https://www.youtube.com/channel/UC0asONfzK3VJE2kiAXrNYIA"><i
                                    class="fab fa-youtube"></i></a>
                            <a class="btn btn-custom" href="https://www.instagram.com/_par_nav_/"><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-custom" href="https://www.linkedin.com/company/parnav-foundation/"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="footer-link">
                        <h2>Popular Links</h2>
                        <a href="index.html">About Us</a>
                        <a href="contact.php">Contact Us</a>
                       
                        <a href="blog.php">Latest Blog</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="footer-link">
                        <h2>Useful Links</h2>
                        <a href="joinus.php">Join Us</a>
                       <!-- <a href="no
                        tfound.html">Privacy policy</a>
                        <a href="notfound.html">Help</a>
                        <a href="notfound.html">FQAs</a>-->
                    </div>
                </div>

            </div>
        </div>
        <div class="container copyright">
            <div class="row">
                <div class="col-md-12">
                    <p>&copy; <a href="index.html">ParNav Founadtion</a>, All Right Reserved.</p>
                </div>
            
            </div>
        </div>
    </div>
    <!-- Footer End -->
    <a href="index.html" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/counterup.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jqBootstrapValidation.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

