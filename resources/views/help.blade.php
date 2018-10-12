
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

<!-- Help Tabs Section -->
<div class="section help-tabs-section">
    <div class="inner">
        <div class="container">
            <div class="help-tabs-wrapper flex no-wrap">

                <div class="left-sidebar-menu">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="heading">Navigate</li>

                        <li><a href="about.html">
                                Comment ça marche</a></li>
                        <li><a href="about.html"> Notre equipe</a></li>
                    </ul>

                    <ul class="nav nav-pills nav-stacked">
                        <li class="heading">Aidez Moi</li>
                        <li class="active"><a data-toggle="pill" href="#faq">FAQ</a></li>
                        <li><a href="contact-us-full-width.html">Contactez Nous</a></li>
                        <li><a data-toggle="pill" href="#policies">Politiques</a></li>
                        <li><a data-toggle="pill" href="#terms-of-service">
                                Conditions d'utilisation</a></li>
                        <li><a data-toggle="pill" href="#privacy-policy">Politique de confidentialité</a></li>
                    </ul>
                </div> <!-- end .left-side -->

                <div class="right-side-content">
                    <div class="tab-content help-tabs">

                        <div id="faq" class="tab-pane fade in active">
                            <h1 class="tab-pane-title">
                                Questions fréquemment posées</h1>
                            <div class="faqs-list-wrapper">

                                <div class="panel-group-wrapper">
                                    <h4 class="panel-group-title">
                                        Les bases</h4>

                                    <div class="panel-group faqs-group" id="accordion" role="tablist" aria-multiselectable="true">

                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a class="collapsed flex space-between no-column no-wrap" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">

                                                        Qu'est-ce que Tunisian Free Work<span class="icon"><i class="ion-ios-plus-empty"></i></span>
                                                    </a>
                                                </h4>
                                            </div> <!-- end .panel-heading -->
                                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>Admiration we surrounded possession frequently he. Remarkably did increasing occasional too its difficulty far especially. Known tiled but sorry joy balls. Bed sudden manner indeed fat now feebly. Face do with in need of wife paid that be.</p>
                                                </div> <!-- end .panel-body -->
                                            </div> <!-- end .panel-collapse -->
                                        </div> <!-- end .panel -->

                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed flex space-between no-column no-wrap" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                        What're the benifits if I use it<span class="icon"><i class="ion-ios-plus-empty"></i></span>
                                                    </a>
                                                </h4>
                                            </div> <!-- end .panel-heading -->
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="true" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>Nullam semper erat arcu, ac tincidunt sem venenatis vel. Curabitur at dolor ac ligula fermentum euismod ac ullamcorper nulla. Integer blandit ultricies aliquam. Pellentesque quis dui varius, dapibus velit id, iaculis ipsum. Morbi ac eros feugiat, lacinia elit ut, elementum turpis. Curabitur justo sapien, tempus sit amet rutrum eu, commodo eu lacus. Morbi in ligula nibh. Maecenas ut mi at odio hendrerit eleifend tempor vitae augue.</p>
                                                </div> <!-- end .panel-body -->
                                            </div> <!-- end .panel-collapse -->
                                        </div> <!-- end .panel -->

                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed flex space-between no-column no-wrap" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

                                                        Comment puis-je commencer?<span class="icon"><i class="ion-ios-plus-empty"></i></span>
                                                    </a>
                                                </h4>
                                            </div> <!-- end .panel-heading -->
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>créer un compte et vous êtes prêt à commencer</p>
                                                </div> <!-- end .panel-body -->
                                            </div> <!-- end .panel-collapse -->
                                        </div> <!-- end .panel -->
                                    </div> <!-- end #accordion-tabs -->
                                </div> <!-- end .panel-group-wrapper -->

                                <div class="panel-group-wrapper">
                                    <h4 class="panel-group-title">pour donneur d'offre</h4>

                                    <div class="panel-group faqs-group for-employers" id="accordion2" role="tablist" aria-multiselectable="true">

                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingfour">
                                                <h4 class="panel-title">
                                                    <a class="collapsed flex space-between no-column no-wrap" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">

                                                        accepter nos conditions?<span class="icon"><i class="ion-ios-plus-empty"></i></span>
                                                    </a>
                                                </h4>
                                            </div> <!-- end .panel-heading -->
                                            <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour" aria-expanded="false" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>
                                                        votre Poste doit être clair </p>
                                                </div> <!-- end .panel-body -->
                                            </div> <!-- end .panel-collapse -->
                                        </div> <!-- end .panel -->

                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingfive">
                                                <h4 class="panel-title">
                                                    <a class="collapsed flex space-between no-column no-wrap" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapsefive" aria-expanded="true" aria-controls="collapsefive">

                                                        Combien de travail je peux poster?<span class="icon"><i class="ion-ios-plus-empty"></i></span>
                                                    </a>
                                                </h4>
                                            </div> <!-- end .panel-heading -->
                                            <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive" aria-expanded="true" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>
                                                        comme vous voulez tant que vous suivez nos termes</p>
                                                </div> <!-- end .panel-body -->
                                            </div> <!-- end .panel-collapse -->
                                        </div> <!-- end .panel -->

                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingsix">
                                                <h4 class="panel-title">
                                                    <a class="collapsed flex space-between no-column no-wrap" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">

                                                        Y a-t-il un espace que je peux utiliser pour gérer les travaux / applications?<span class="icon"><i class="ion-ios-plus-empty"></i></span>
                                                    </a>
                                                </h4>
                                            </div> <!-- end .panel-heading -->
                                            <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix" aria-expanded="false" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>
                                                        Oui bien sûr
                                                        vous pouvez gérer votre application et vous pouvez personnaliser votre propre profil.</p>
                                                </div> <!-- end .panel-body -->
                                            </div> <!-- end .panel-collapse -->
                                        </div> <!-- end .panel -->
                                    </div> <!-- end #accordion-tabs -->
                                </div> <!-- end .panel-group-wrapper -->

                                <div class="panel-group-wrapper">
                                    <h4 class="panel-group-title">Pour les Freelancers</h4>

                                    <div class="panel-group faqs-group" id="accordion3" role="tablist" aria-multiselectable="true">



                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingeight">
                                                <h4 class="panel-title">
                                                    <a class="collapsed flex space-between no-column no-wrap" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseeight" aria-expanded="true" aria-controls="collapseeight">

                                                        Combien de travail je peux postuler?<span class="icon"><i class="ion-ios-plus-empty"></i></span>
                                                    </a>
                                                </h4>
                                            </div> <!-- end .panel-heading -->
                                            <div id="collapseeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight" aria-expanded="true" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>
                                                        comme tu veux ,
                                                        pas de limite</p>
                                                </div> <!-- end .panel-body -->
                                            </div> <!-- end .panel-collapse -->
                                        </div> <!-- end .panel -->

                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingnine">
                                                <h4 class="panel-title">
                                                    <a class="collapsed flex space-between no-column no-wrap" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                                                        Y a-t-il un espace que je peux utiliser pour gérer les travaux / applications?<span class="icon"><i class="ion-ios-plus-empty"></i></span>
                                                    </a>
                                                </h4>
                                            </div> <!-- end .panel-heading -->
                                            <div id="collapsenine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingnine" aria-expanded="false" style="height: 0px;">
                                                <div class="panel-body">
                                                    <p>Oui bien sûr
                                                        vous pouvez gérer votre application et vous pouvez personnaliser votre propre profil.</p>
                                                </div> <!-- end .panel-body -->
                                            </div> <!-- end .panel-collapse -->
                                        </div> <!-- end .panel -->
                                    </div> <!-- end #accordion-tabs -->
                                </div> <!-- end .panel-group-wrapper -->
                            </div> <!-- end .faqs-list-wrapper -->
                        </div> <!-- end #faq-tab-content -->

                        <div id="contact-us" class="tab-pane fade in">
                        </div> <!-- end #contact-us-tab-content -->

                        <div id="terms-of-service" class="tab-pane fade in">
                            <h1 class="tab-pane-title">Content Heading</h1>
                            <p>Content goes here</p>
                        </div> <!-- end #terms-of-service-tab-content -->

                        <div id="policies" class="tab-pane fade in">
                            <h1 class="tab-pane-title">Content Heading</h1>
                            <p>Content goes here</p>
                        </div> <!-- end #policies-tab-content -->

                        <div id="privacy-policy" class="tab-pane fade in">
                            <h1 class="tab-pane-title">Privacy policy</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, corrupti, fugit. Temporibus nostrum nam deleniti vitae accusantium iste sunt facilis, quisquam eveniet reiciendis corporis, veniam nulla. Provident, tempora perspiciatis quod!</p>
                        </div> <!-- end .privacy-policy-content -->

                    </div> <!-- end .tab-content -->
                </div> <!--end .right-side -->
            </div> <!-- end .help-tabs-wrapper -->
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