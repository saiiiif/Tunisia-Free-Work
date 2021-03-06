

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobpress.icookcode.net/dev/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 23:08:59 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TunisianFreeWork Template</title>

    <!-- CSS -->
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Ionicons -->
    <link href="fonts/ionicons/css/ionicons.min.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="css/animate.min.css" rel="stylesheet">
    <!--Magnific Popup -->
    <link href="css/magnific-popup.css" rel="stylesheet">
    <!--Tagsinput CSS -->
    <link href="css/tagsinput.css" rel="stylesheet">
    <!-- Style.css -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body>

<!-- Header -->

@include('header.header');

 <!-- end .header -->

<!-- Responsive Menu -->
<div class="responsive-menu">
    <a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
    <nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
</div> <!-- end .responsive-menu -->

<!-- Login/Signup Popup -->
<div class="modal fade bs-modal-sm" aria-hidden="true" aria-labelledby="myTabContent"  id="login-signup-popup" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-sm login-signup-modal">
        <div class="modal-content">
            <div class="popup-tabs">
                <ul class="nav nav-tabs" id="myTab">
                    <li class=""><a data-toggle="tab" href="#login">login</a></li>
                    <li class="active"><a data-toggle="tab" href="#register">Register</a></li>
                </ul>
            </div> <!-- end .popup-tabs -->
            <div class="modal-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="login">
                        <form class="login-form">

                            <div class="form-group">
                                <label for="InputEmail1">votre Email *</label>
                                <input type="email" class="form-control" id="InputEmail1" placeholder="Enter your email">
                            </div>

                            <div class="form-group">
                                <label for="InputPassword1">Password *</label>
                                <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
                            </div>

                            <div class="checkbox flex space-between">
                                <div>
                                    <input id="sigin-checkbox" type="checkbox">
                                    <label for="sigin-checkbox">Remember me</label>
                                </div>
                                <a href="#0">Lost password?</a>
                            </div> <!-- end .checkbox -->

                            <button type="button" class="button" data-dismiss="modal">Login</button>

                            <p class="text-center divider-text small"><span>or login using</span></p>

                            <div class="social-buttons">
                                <ul class="list-unstyled flex space-between">
                                    <li class="twitter-btn"><a href="#0"><i class="ion-social-twitter"></i></a></li>
                                    <li class="fb-btn"><a href="#0"><i class="ion-social-facebook"></i></a></li>
                                    <li class="g-plus-btn"><a href="#0"><i class="ion-social-googleplus"></i></a></li>
                                </ul>
                            </div> <!-- end .social-buttons -->

                        </form> <!-- end .login-form -->
                    </div> <!-- end login-tab-content -->

                    <div class="tab-pane fade active in" id="register">
                        <form class="signup-form">
                            <div class="form-group">
                                <label for="InputEmail1">Your Email *</label>
                                <input type="email" class="form-control" id="InputEmail2" placeholder="Enter your email">
                            </div>

                            <div class="form-group">
                                <label for="InputPassword1">Password *</label>
                                <input type="password" class="form-control" id="InputPassword2" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="InputPassword2">Confirm Password *</label>
                                <input type="password" class="form-control" id="InputPassword3" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <label for="select1">Register as:</label>
                                <div class="select-wrapper">
                                    <select class="form-control" id="select1">
                                        <option>Freelancer</option>
                                        <option>Utilisateur</option>
                                    </select>
                                </div> <!-- end .select-wrapper -->
                            </div>

                            <div class="checkbox">
                                <input id="signup-checkbox" type="checkbox">
                                <label for="signup-checkbox">I agree with the Terms of Use</label>
                            </div> <!-- end .checkbox -->

                            <button type="button" class="button" data-dismiss="modal">Sign Up</button>

                            <p class="text-center divider-text small"><span>or login using</span></p>

                            <div class="social-buttons">
                                <ul class="list-unstyled flex space-between">
                                    <li class="twitter-btn"><a href="#0"><i class="ion-social-twitter"></i></a></li>
                                    <li class="fb-btn"><a href="#0"><i class="ion-social-facebook"></i></a></li>
                                    <li class="g-plus-btn"><a href="#0"><i class="ion-social-googleplus"></i></a></li>
                                </ul>
                            </div> <!-- end .social-buttons -->

                        </form> <!-- end .signup-form -->
                    </div> <!-- end signup-tab-content -->
                </div> <!-- end .mytabcontent -->
            </div> <!-- end .modal-body -->
        </div> <!-- end .modal-content -->
    </div> <!-- end .modal-dialog -->
</div> <!-- end .modal -->

<!-- Page Title Section -->
<div class="section page-title text-center" style="background-image: url('images/background04.jpg');">
    <div class="inner">
        <h1 class="light">
            À propos de nous</h1>
        <h3 class="light"></h3>
    </div> <!-- end .inner -->
</div> <!-- end .section -->

<!-- Tabs Section -->
<div class="section tabs-section about-page">
    <ul class="nav nav-tabs jobpress-dynamic-tabs flex space-center items-center no-column">
        <li class="active"><a data-toggle="tab" href="#company"><i class="ion-ios-glasses-outline"></i>
                notre société</a></li>
        <li><a data-toggle="tab" href="#how-it-works"><i class="ion-ios-cog-outline"></i>Comment ça marche?</a></li>
        <li><a data-toggle="tab" href="#team"><i class="ion-ios-person-outline"></i>Equipe</a></li>
        <li><a href="help.html"><i class="ion-ios-help-empty"></i>Faq</a></li>
        <li><a href="contact-us-full-width.html"><i class="ion-ios-email-outline"></i>Contactez Nous</a></li>
    </ul> <!-- end .jobpress-dynamic-tabs -->

    <div class="tab-content jobpress-dynamic-tabs-content">

        <div id="company" class="tab-pane company-tab-content text-center fade in active">
            <div class="testimonial">
                <p><q>Donec at cursus sem. Duis condimentum posuere<br>purus, at <strong>venenatis tellus</strong> mollis. Vestibulum cursus<br>convallis venenatis. Sed ut blandit mauris. Proin pret-<br>ium consequat est, sit amet consectetur.</q></p>
            </div> <!-- end .testimonial -->
            <div class="core-values">
                <div class="core-values-inner">
                    <div class="container">
                        <div class="images">
                            <div class="images-inner flex space-between no-wrap items-center">
                                <div class="image-item">
                                    <img src="images/company01.jpg" alt="company-office-images" class="img-responsive">
                                </div> <!-- end .image-item -->
                                <div class="spacer-xs-m"></div>
                                <div class="image-item">
                                    <img src="images/company02.jpg" alt="company-office-images" class="img-responsive">
                                </div> <!-- end .image-item -->
                                <div class="spacer-xs-m"></div>
                                <div class="image-item">
                                    <img src="images/company03.jpg" alt="company-office-images" class="img-responsive">
                                </div> <!-- end .image-item -->
                            </div> <!-- end .images-inner -->
                        </div> <!-- end .images -->
                    </div> <!-- end .container -->
                    <div class="values-text-content">
                        <div class="container">
                            <div class="values-text-content-inner flex space-around no-wrap items-center">
                                <div class="vision box">
                                    <div class="icon">
                                        <img src="images/vision-icon.png" alt="vision-icon" class="img-responsive">
                                    </div> <!-- end .icon -->
                                    <h3 class="dark">Notre Vision</h3>
                                    <p>..................</p>
                                </div> <!-- end .vision -->
                                <div class="spacer-md-m"></div>
                                <div class="mission box">
                                    <div class="icon">
                                        <img src="images/our-mission-icon.png" alt="our-mission-icon" class="img-responsive">
                                    </div> <!-- end .icon -->
                                    <h3 class="dark">Notre Vision</h3>
                                    <p>...................</p>
                                </div> <!-- end .vision -->
                                <div class="spacer-md-m"></div>
                                <div class="target box">
                                    <div class="icon">
                                        <img src="images/our-target-icon.png" alt="our-target-icon" class="img-responsive">
                                    </div> <!-- end .icon -->
                                    <h3 class="dark">Notre Vision</h3>
                                    <p>.....................</p>
                                </div> <!-- end .vision -->

                            </div> <!-- end .values-text-content-inner -->
                        </div> <!-- end .container -->

                    </div> <!-- end .values-text-content -->
                </div> <!-- end .core-values-inner -->
                <div class="background-text">
                    <h1>Core Values</h1>
                </div> <!-- end .background-text -->
            </div> <!-- end .core-values -->

            <div class="section team-members-section">
                <div class="inner">
                    <div class="container">
                        <h1 class="section-title text-center">
                            Conseil des dirigeants</h1>
                        <div class="team-members-inner-row flex space-between no-column items-center">
                            <div class="team-member">
                                <img src="images/team-member01.jpg" alt="team-member-image" class="img-responsive">
                                <div class="team-member-info text-center">
                                    <h3 class="team-member-name">Albert Martin</h3>
                                    <h6 class="team-member-designation">Founder of Jobpress</h6>
                                    <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                                        <li><a href="#0">+fb</a></li>
                                        <li><a href="#0">+tw</a></li>
                                        <li><a href="#0">+gp</a></li>
                                        <li><a href="#0">+ins</a></li>
                                    </ul> <!-- end .social-info -->
                                </div> <!-- end .team-member-info -->
                            </div> <!-- end .team-member -->
                            <div class="team-member">
                                <img src="images/team-member02.jpg" alt="team-member-image" class="img-responsive">
                                <div class="team-member-info text-center">
                                    <h3 class="team-member-name">Kenneth Turner</h3>
                                    <h6 class="team-member-designation">Co-Founder of Jobpress</h6>
                                    <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                                        <li><a href="#0">+fb</a></li>
                                        <li><a href="#0">+tw</a></li>
                                        <li><a href="#0">+gp</a></li>
                                        <li><a href="#0">+ins</a></li>
                                    </ul> <!-- end .social-info -->
                                </div> <!-- end .team-member-info -->
                            </div> <!-- end .team-member -->
                            <div class="team-member">
                                <img src="images/team-member03.jpg" alt="team-member-image" class="img-responsive">
                                <div class="team-member-info text-center">
                                    <h3 class="team-member-name">Dorothy Cole</h3>
                                    <h6 class="team-member-designation">HR Manager</h6>
                                    <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                                        <li><a href="#0">+fb</a></li>
                                        <li><a href="#0">+tw</a></li>
                                        <li><a href="#0">+gp</a></li>
                                        <li><a href="#0">+ins</a></li>
                                    </ul> <!-- end .social-info -->
                                </div> <!-- end .team-member-info -->
                            </div> <!-- end .team-member -->
                            <div class="team-member">
                                <img src="images/team-member04.jpg" alt="team-member-image" class="img-responsive">
                                <div class="team-member-info text-center">
                                    <h3 class="team-member-name">Alan Schmidt</h3>
                                    <h6 class="team-member-designation">Product Lead</h6>
                                    <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                                        <li><a href="#0">+fb</a></li>
                                        <li><a href="#0">+tw</a></li>
                                        <li><a href="#0">+gp</a></li>
                                        <li><a href="#0">+ins</a></li>
                                    </ul> <!-- end .social-info -->
                                </div> <!-- end .team-member-info -->
                            </div> <!-- end .team-member -->
                        </div> <!-- end .team-inner -->
                    </div> <!-- end .container -->
                </div> <!-- end .inner -->
            </div> <!-- end .team-memebers-section -->
        </div> <!-- end .company-tab-content -->

        <div id="how-it-works" class="tab-pane how-it-works-tab-content fade">
            <div class="section">
                <div class="inner">
                    <div class="container">
                        <h3 class="text-center">Content Heading</h3>
                        <p class="text-center">Your content goes here.</p>
                    </div> <!-- end .container -->
                </div> <!-- end .inner -->
            </div> <!-- end .section -->
        </div> <!-- end .how-it-works-tab-content -->

        <div id="team" class="tab-pane team-tab-content fade">
            <div class="section team-members-section">
                <div class="inner">
                    <div class="container">
                        <div class="team-members-inner-row flex space-between no-column items-center">
                            <div class="team-member">
                                <img src="images/team-member01.jpg" alt="team-member-image" class="img-responsive">
                                <div class="team-member-info text-center">
                                    <h3 class="team-member-name">Saif Eddien Jebri</h3>
                                    <h6 class="team-member-designation">Founder of Jobpress</h6>
                                    <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                                        <li><a href="#0">+fb</a></li>
                                        <li><a href="#0">+tw</a></li>
                                        <li><a href="#0">+gp</a></li>
                                        <li><a href="#0">+ins</a></li>
                                    </ul> <!-- end .social-info -->
                                </div> <!-- end .team-member-info -->
                            </div> <!-- end .team-member -->
                            <div class="team-member">
                                <img src="images/team-member02.jpg" alt="team-member-image" class="img-responsive">
                                <div class="team-member-info text-center">
                                    <h3 class="team-member-name">Safwen Ferchichi</h3>
                                    <h6 class="team-member-designation">Co-Founder of Jobpress</h6>
                                    <ul class="list-unstyled social-info flex no-column no-wrap space-center">
                                        <li><a href="#0">+fb</a></li>
                                        <li><a href="#0">+tw</a></li>
                                        <li><a href="#0">+gp</a></li>
                                        <li><a href="#0">+ins</a></li>
                                    </ul> <!-- end .social-info -->
                                </div> <!-- end .team-member-info -->
                            </div> <!-- end .team-member -->

                            </ul> <!-- end .social-info -->
                        </div> <!-- end .team-member-info -->
                    </div> <!-- end .team-member -->

                </div> <!-- end .team-inner -->

                <div class="spacer-md"></div>

                <ul class="jobpress-custom-pager list-unstyled flex no-column space-center items-center">
                    <li><a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a></li>
                    <li><a href="#0">1</a></li>
                    <li><a href="#0">2</a></li>
                    <li><a href="#0">3</a></li>
                    <li><a href="#0">4</a></li>
                    <li><a href="#0">5</a></li>
                    <li><a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a></li>
                </ul>

            </div> <!-- end .container -->
        </div> <!-- end .inner -->
    </div> <!-- end .team-members-section -->

</div> <!-- end .team-tab-content -->

<div id="faq" class="tab-pane faq-tab-content fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
</div>

<div id="contact-us" class="tab-pane contact-us-tab-content fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
</div>



</div> <!-- end .tab-content -->
</div> <!-- end .section -->

<!-- Clients Section -->
<div class="section clients-section solid-blue-bg">
    <div class="inner">
        <div class="container">
            <div class="logo-grid">
                <div class="logo-grid-row flex space-between">
                    <div class="logo-item solid-blue flex">
                        <img src="images/client-logo-light01.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                    <div class="logo-item solid-blue flex">
                        <img src="images/client-logo-light02.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                    <div class="logo-item solid-blue flex">
                        <img src="images/client-logo-light03.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                    <div class="logo-item solid-blue flex">
                        <img src="images/client-logo-light04.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                    <div class="logo-item solid-blue flex">
                        <img src="images/client-logo-light05.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                    <div class="logo-item solid-blue flex">
                        <img src="images/client-logo-light06.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                </div> <!-- end .logo-grid-row -->
            </div> <!-- end .logo-grid -->
        </div> <!-- end .container -->
    </div> <!-- end .inner -->
</div> <!-- end .section -->

<!-- Footer -->

@include('footer.footer');
 <!-- end .footer -->


<!-- Scripts -->
<!-- jQuery -->
<script src="js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- google maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy-PboZ3O_A25CcJ9eoiSrKokTnWyAmt8"></script>
<!-- Owl Carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- Wow.js -->
<script src="js/wow.min.js"></script>
<!-- Typehead.js -->
<script src="js/typehead.js"></script>
<!-- Tagsinput.js -->
<script src="js/tagsinput.js"></script>
<!-- Bootstrap Select -->
<script src="js/bootstrap-select.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- CountTo -->
<script src="js/jquery.countTo.js"></script>
<!-- Isotope -->
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<!-- Magnific-Popup -->
<script src="js/jquery.magnific-popup.js"></script>
<!-- Scripts.js -->
<script src="js/scripts.js"></script>

</body>

<!-- Mirrored from jobpress.icookcode.net/dev/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 23:15:57 GMT -->
</html>