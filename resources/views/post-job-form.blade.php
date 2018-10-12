<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobpress.icookcode.net/dev/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 23:08:59 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JobPress HTML template</title>

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


<!-- Post Job Section -->
<div class="section job-post-form-section solid-light-grey-bg">
    <div class="inner">
        <div class="container">
            <!-- multistep form -->
            <form action="#" method="post" id="job-post-form" class="job-post-form multisteps-form">
                <fieldset>
                    <h2 class="form-title text-center dark">Post a Job</h2>
                    <h3 class="step-title text-center dark">Step 1: Choose your pricing plan</h2>

                        <ul class="steps-progress-bar flex space-between items-center no-column no-wrap list-unstyled">
                            <li><span>1</span></li>
                            <li><span>2</span></li>
                            <li><span>3</span></li>
                            <li><span>4</span></li>
                        </ul> <!-- end .steps-progress-bar -->

                        <div class="form-inner">
                            <div class="pricing-plan-field-wrapper">

                                <div class="pricing-plan-field flex no-column no-wrap checkbox">
                                    <h6 class="pricing-plan-tag">Free</h6>
                                    <div class="right-side">
                                        <input id="pricing-plan-checkbox1" type="checkbox">
                                        <label for="pricing-plan-checkbox1">Pricing plan 1</label>
                                        <p>agree to terms </p>
                                    </div> <!-- end .right-side -->
                                </div> <!-- end .pricing-plan-field -->

                                <div class="divider"></div>


                                <div class="divider"></div>


                                <div class="divider"></div>

                            </div> <!-- end .pricing-plan-field-wrapper -->
                            <div class="button-wrapper text-center">
                                <button type="button" class="button next">Go to step 2</button>
                            </div> <!-- end .button-wrapper -->

                        </div> <!-- end .form-inner -->
                </fieldset>

                <fieldset>
                    <h2 class="form-title text-center dark">Post a Job</h2>
                    <h3 class="step-title text-center dark">Step 2: Create an account</h2>

                        <ul class="steps-progress-bar flex space-between items-center no-column no-wrap list-unstyled">
                            <li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
                            <li class="sub-active"><span>2</span></li>
                            <li><span>3</span></li>
                            <li><span>4</span></li>
                        </ul> <!-- end .steps-progress-bar -->

                        <div class="form-inner">

                            <h6>Already have an account? <a href="#0">Click here to login</a></h6>
                            <div class="divider"></div>

                            <div class="form-fields-wrapper">

                                <div class="form-group-wrapper flex space-between items-center">
                                    <div class="form-group">
                                        <p class="label">First Name</p>
                                        <input type="text" id="employer-contact-name" name="employer-contact-name" placeholder="" required="">
                                    </div> <!-- end .form-group -->
                                    <div class="form-group">
                                        <p class="label">Last Name</p>
                                        <input type="email" id="employer-contact-email" name="employer-contact-email" placeholder="" required="">
                                    </div> <!-- end .form-group -->
                                </div> <!-- end .form-group-wrapper -->

                                <div class="form-group-wrapper flex space-between items-center">
                                    <div class="form-group">
                                        <p class="label">Username<sup>*</sup></p>
                                        <input type="text" id="employer-username" name="employer-username" placeholder="" required="">
                                    </div> <!-- end .form-group -->
                                    <div class="form-group">
                                        <p class="label">Email<sup>*</sup></p>
                                        <input type="email" id="employer-email" name="employer-email" placeholder="" required="">
                                    </div> <!-- end .form-group -->
                                </div> <!-- end .form-group-wrapper -->

                            </div> <!-- end .form-field-wrapper -->

                            <div class="divider"></div>

                            <div class="button-wrapper text-center">
                                <button type="button" class="button previous">Back</button>
                                <button type="button" class="button next">Go to step 3</button>
                            </div> <!-- end .button-wrapper -->

                        </div> <!-- end .form-inner -->
                </fieldset>

                <fieldset>
                    <h2 class="form-title text-center dark">Post a Job</h2>
                    <h3 class="step-title text-center dark">Step 3: Job Detail</h2>

                        <ul class="steps-progress-bar flex space-between items-center no-column no-wrap list-unstyled">
                            <li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
                            <li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
                            <li class="sub-active"><span>3</span></li>
                            <li><span>4</span></li>
                        </ul> <!-- end .steps-progress-bar -->

                        <div class="form-inner">

                            <div class="form-fields-wrapper">


                                <div class="divider"></div>

                                <div class="form-fields-wrapper">
                                    <h4 class="form-fields-title dark">Job Details</h4>
                                    <div class="form-group-wrapper">
                                        <div class="form-group">
                                            <p class="label">Job title</p>
                                            <input type="text" id="job-title" name="job-title" placeholder="" required="">
                                        </div> <!-- end .form-group -->
                                    </div> <!-- end .form-group-wrapper -->

                                    <div class="form-group-wrapper flex space-between items-center">
                                        <div class="form-group">
                                            <p class="label">Job type</p>
                                            <select class="form-control" id="job-type-filter">
                                                <option value="" selected="" disabled=""></option>
                                                <option>Featured Developer</option>
                                                <option>Hourly Rate</option>
                                                <option>Location</option>
                                                <option>Skills</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <p class="label">Job Category</p>
                                            <select class="form-control" id="job-category-filter">
                                                <option value="" selected="" disabled=""></option>
                                                <option>Featured Developer</option>
                                                <option>Hourly Rate</option>
                                                <option>Location</option>
                                                <option>Skills</option>
                                            </select>
                                        </div>
                                    </div> <!-- end .form-group-wrapper -->

                                    <div class="form-group-wrapper">
                                        <div class="form-group">
                                            <p class="label">Job description</p>
                                            <textarea name="job-desc" id="job-desc" required="" rows="6" placeholder=""></textarea>
                                        </div> <!-- end .form-group -->
                                    </div> <!-- end .form-group-wrapper -->

                                    <div class="form-group-wrapper flex space-between items-center">
                                        <div class="form-group">
                                            <p class="label">Job location</p>
                                            <input type="text" id="job-location" name="job-location" placeholder="" required="">
                                        </div> <!-- end .form-group -->
                                        <div class="form-group">
                                            <p class="label">Salary/Wage</p>
                                            <input type="text" id="job-salary" name="job-salary" placeholder="" required="">
                                        </div> <!-- end .form-group -->
                                    </div> <!-- end .form-group-wrapper -->

                                </div> <!-- end .form-fields-wrapper -->

                                <div class="divider"></div>

                                <div class="button-wrapper text-center">
                                    <button type="button" class="button previous">Back</button>
                                    <button type="button" class="button next">Go to step 4</button>
                                </div> <!-- end .button-wrapper -->

                            </div> <!-- end .form-inner -->
                </fieldset>

                <fieldset>
                    <h2 class="form-title text-center dark">Post a Job</h2>
                    <h3 class="step-title text-center dark">Step 3: Review job</h2>

                        <ul class="steps-progress-bar flex space-between items-center no-column no-wrap list-unstyled">
                            <li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
                            <li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
                            <li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
                            <li class="sub-active"><span>4</span></li>
                        </ul> <!-- end .steps-progress-bar -->

                        <div class="form-inner">
                            <div class="job-post-wrapper">
                                <div class="job-post-top flex no-column no-wrap">
                                    <div class="job-post-top-left">
                                        <img src="images/company-logo-big01.jpg" alt="company-logo" class="img-responsive">
                                    </div> <!-- end .left-side-inner -->
                                    <div class="job-post-top-right">
                                        <h4 class="dark">Front-end developer needed</h4>
                                        <h5>Banana inc.</h5>
                                        <div class="job-post-meta flex items-center no-column no-wrap">
                                            <div class="bookmarked-job-meta flex items-center no-wrap no-column">
                                                <h6 class="bookmarked-job-category">Technologies</h6>
                                                <h6 class="candidate-location">Park Ave,<span>NYC, USA</span></h6>
                                                <h6 class="hourly-rate">$60<span>/Hour</span></h6>
                                            </div>
                                            <h6 class="full-time">Full Time</h6>
                                        </div> <!-- end .job-post-meta -->
                                    </div> <!-- end .right-side-inner -->
                                </div> <!-- end .job-post-top -->

                                <div class="divider"></div>

                                <div class="job-post-bottom">
                                    <h4 class="dark">Job Description</h4>
                                    <p>Etiam quis interdum felis, at pellentesque metus. Morbi eget congue lectus. Donec eleifend ultricies urna et euismod. Sed consectetur tellus eget odio aliquet, vel vestibulum tellus sollicitudin. Morbi maximus metus eu eros tincidunt, vitae mollis ante imperdiet. Nulla imperdiet at mauris ut posuere.<br><br>Nullam tempor, ipsum eget egestas viverra, velit augue fringilla arcu, et sollicitudin enim eros nec est. Suspendisse volutpat velit non porttitor placerat. Mauris porttitor aliquam bibendum. Nam at ultrices justo. Mauris eget urna magna.</p><br>

                                    <h4 class="dark">Challenges &amp; Benifits</h4>
                                    <p>Etiam quis interdum felis, at pellentesque metus. Morbi eget congue lectus. Donec eleifend ultricies urna et euismod. Sed consectetur tellus eget odio aliquet, vel vestibulum tellus sollicitudin. Morbi maximus metus eu eros tincidunt, vitae mollis ante imperdiet. Nulla imperdiet at mauris ut posuere.</p><br>

                                    <ul class="job-post-nested-list list-unstyled">
                                        <li class="flex no-column no-wrap"><span><i class="ion-ios-checkmark"></i></span>Donec accumsan auctor iaculis. Nullam non tortor massa. Proin ligula leo, hendrerit quis tincidunt a, sodales eget ligula. Aenean et est tristique, dictum lorem vel, porttitor urna.</li>
                                        <li class="flex no-column no-wrap"><span><i class="ion-ios-checkmark"></i></span>Suspendisse gravida elementum lacus, a malesuada tortor sollicitudin ut. Donec pharetra metus lectus, ut eleifend eros sollicitudin et. Ut at lobortis dolor, eget commodo tortor. Curabitur bibendum consequat neque a tincidunt. In in euismod quam. Proin in egestas eros. Cum sociis natoque penatibus et magnis dis parturient montes.</li>
                                        <li class="flex no-column no-wrap"><span><i class="ion-ios-checkmark"></i></span>Etiam cursus metus arcu, ut pellentesque eros dictum vitae. Vivamus purus ex, dapibus ut eleifend in, hendrerit non nibh. Donec ornare molestie vehicula. Duis feugiat iaculis convallis.</li>
                                    </ul> <!-- end .job-post-nested-list -->

                                    <br>

                                    <h4 class="dark">Requirements</h4>
                                    <p>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. Etiam a laoreet justo, laoreet blandit arcu. Vestibulum lacinia, lacus vitae dignissim tempor, mi tellus imperdiet dolor, quis consectetur tortor magna id enim.<br><br>Vestibulum ac vestibulum dui. Vivamus finibus vel mauris ut vehicula. Nullam a magna porttitor, dictum risus nec, faucibus sapien. Curabitur porttitor in est at viverra. Sed dictum felis lorem.</p>

                                    <br>

                                    <div class="divider"></div>

                                    <div class="job-post-share flex space-between items-center no-wrap">
                                        <div class="job-post-share-left flex items-center no-wrap">
                                            <h6>Share this job:</h6>
                                            <ul class="social-share flex no-wrap no-column list-unstyled">
                                                <li><a href="#0" class="button button-sm facebook-btn"><span><i class="ion-social-facebook"></i></span>Facebook</a></li>
                                                <li><a href="#0" class="button button-sm twitter-btn"><span><i class="ion-social-twitter"></i></span>Twitter</a></li>
                                                <li><a href="#0" class="button button-sm g-plus-btn"><span><i class="ion-social-googleplus"></i></span>Google plus</a></li>
                                            </ul> <!-- end .social-share -->
                                        </div> <!-- end .job-post-share-left -->
                                        <div class="job-post-share-right flex items-center no-column no-wrap">
                                            <h6>Bookmark this job</h6>
                                            <i class="ion-ios-heart wishlist-icon"></i>
                                        </div> <!-- end .job-post-share-right -->

                                    </div> <!-- end .job-post-share -->
                                </div> <!-- end .job-post-bottom -->
                            </div> <!-- end .job-post-wrapper -->

                            <div class="divider"></div>

                            <div class="button-wrapper text-center">
                                <button type="button" class="button previous">Back</button>
                                <button type="button" class="button next">Submit</button>
                            </div> <!-- end .button-wrapper -->

                        </div> <!-- end .form-inner -->
                </fieldset>

                <fieldset>
                    <h2 class="form-title text-center dark">Post a Job</h2>
                    <h3 class="step-title text-center dark">You've successfully posted a job</h2>

                        <ul class="steps-progress-bar flex space-between items-center no-column no-wrap list-unstyled">
                            <li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
                            <li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
                            <li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
                            <li class="active"><span><i class="ion-ios-checkmark-empty"></i></span></li>
                        </ul> <!-- end .steps-progress-bar -->

                        <div class="form-inner">
                            <h2 class="text-center job-post-success">Congratulations!</h2>
                            <p class="text-center">You’ve successfully posted a new job. Let’s see who you’re gonna hire. Whenever you want to edit your job, please go to your <a href="#0">Dashboard</a>> <a href="#0">Manage Jobs</a>. Thank you for using our job board!</p>
                            <div class="button-wrapper text-center">
                                <button type="button" class="button">View job now</button>
                            </div> <!-- end .button-wrapper -->
                        </div> <!-- end .form-inner -->
                </fieldset>

            </form> <!-- end .job-post-form -->

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