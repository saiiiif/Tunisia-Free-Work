<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from jobpress.icookcode.net/dev/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 23:08:59 GMT -->
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>TunisianFreeWork Template</title>

			<style>
		#mapss {
				width: 100%;
				height: 400px;
				background-color: grey;
			}
	  </style>
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
		<header class="header">
			<div class="container clearfix">
				<div class="header-inner flex space-between items-center">
					<div class="left">
					<h1> Tunisian Free Work </h1>
					<!--	<div class="logo"><a href="index.html"><img src="images/logo.png" alt="JobPress" class="img-responsive"></a></div> -->
					</div> <!-- end .left -->				
					<div class="right flex space-between no-column items-center">
						<div class="navigation">
							<nav class="main-nav">
								<ul class="list-unstyled">
									<li class="active"><a href="index.html">accueil</a></li>
									<li><a href="about.html">Qui sommes nous?</a></li>
									<li class="menu-item-has-children">
										<a href="candidates-listing.html">Utilisateur</a>
										<ul>
											<li><a href="candidates-listing.html">recherche Freelancer</a></li>
											<li><a href="companies-listing.html">recherche Donneur d'offre</a></li>
											<li><a href="jobs-listing.html">liste travail</a></li>
											<li><a href="job-details.html">travail info</a></li>
											<li><a href="categories.html">travail par categories</a></li>
											<li><a href="post-resume-form.html">Poster une Resumé</a></li>
											<li><a href="candidate-dashboard.html"> espace Freelancer</a></li>
										</ul>									
									</li>
														
								
									<li class="menu-item-has-children">
										<a href="#0">Pages</a>
										<ul>
											<li><a href="help.html">Aidez moi</a></li>
											<li><a href="contact-us-full-width.html">Contactez Nous</a></li>
											<li><a href="pricing-plans.html">Notre termes</a></li>
										</ul>
									</li>
								</ul>
							</nav> <!-- end .main-nav -->
							<a href="#" class="responsive-menu-open"><i class="ion-navicon"></i></a>
						</div> <!-- end .navigation -->
						<div class="button-group-merged flex no-column">
							<a href="post-job-form.html" class="button">poste travail</a>
							<a href="#register" class="button" data-toggle="modal" data-target=".bs-modal-sm">
s'inscrire</a>
						</div> <!-- end .button-group-merged -->
					</div> <!-- end .right -->
				</div> <!-- end .header-inner -->
			</div> <!-- end .container -->
		</header> <!-- end .header -->

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

		<!-- Map Section -->
		<div id="mapss"></div>
    <script>
      function initMap() {
        var uluru = {lat: 36.806495, lng: 10.181532};
        var map = new google.maps.Map(document.getElementById('mapss'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    
		<!-- end .section -->

		<!-- Contact-Us Section -->
		<div class="section contact-us-section">
			<div class="inner">
				<div class="container">
					<div class="contact-us-section-inner flex space-between no-wrap">
						<div class="left">
							<h1>Contactez Nous</h1>
							<p class="ultra-light">Besoin de nous contacter ? Nous sommes à votre écoute, par email, téléphone</p>
							<div class="follow-us flex no-column items-center">
								<h6>Follow us via:</h6>
								<ul class="list-unstyled social-icons flex no-column">
									<li><a href="#0"><i class="ion-social-twitter"></i></a></li>
									<li><a href="#0"><i class="ion-social-facebook"></i></a></li>
								</ul> <!-- end .social-icons -->
							</div> <!-- end .follow-us -->
						</div> <!-- end .left -->
						
						<div class="right">

							<form action="http://jobpress.icookcode.net/dev/scripts/contact.php" method="post" id="contact-form" class="contact-form">
								<div class="form-group-wrapper flex space-between items-center">
									<div class="form-group">
										<p class="label">Votre Nom*</p>
										<input type="text" id="contact-name" name="contact-name" placeholder="Enter Votre nom" required="">
									</div> <!-- end .form-group -->
									<div class="form-group">
										<p class="label">Votre Email*</p>
										<input type="email" id="contact-email" name="contact-email" placeholder="Enter Votre email" required="">
									</div> <!-- end .form-group -->
								</div> <!-- end .form-group-wrapper -->

									<div class="form-group textarea">
										<p class="label">Votre Message*</p>
										<textarea name="contact-message" id="contact-message" required="" rows="6" placeholder="ecrire ici votre message"></textarea>
									</div> <!-- end .form-group -->
									<button type="submit" class="button" data-text="Submit">Envoyer</button>
																
								<div id="contact-loading" class="alert alert-info form-alert">
									<span class="message">Loading...</span>
								</div>
								<div id="contact-success" class="alert alert-success form-alert">
									<span class="message">Success!</span>
								</div>
								<div id="contact-error" class="alert alert-danger form-alert">
									<span class="message">Error!</span>
								</div>
							</form> <!-- end .contact-form -->
							
						</div> <!-- end .right -->
					</div>	<!-- end .contact-us-section-inner -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<!-- Footer -->
		<div class="section footer transparent" style="background-image: url('images/background03.jpg');">
			<div class="container">
				<div class="top flex space-between items-center">
					<h1>TunisianFreeWork <h1>
					<ul class="list-unstyled footer-menu flex">
						<li><a href="#0">accueil</a></li>
						<li><a href="#0"></a></li>
						<li><a href="#0">recherche travail</a></li>
						<li><a href="#0">recherche Freelacers</a></li>
						<li><a href="#0">Contactez Nous</a></li>
					</ul> <!-- end .footer-menu -->				
				</div> <!-- end .top -->
				<div class="footer-widgets flex no-column space-between">					
					<div class="widget">
						<h6>About</h6>
						<ul class="list-unstyled">
							
							<li><a href="#0">
Nos partenaires</a></li>
							
							<li><a href="#0">FAQ</a></li>
					
							<li><a href="#0">equipe</a></li>
							<li><a href="#0">Contactez Nous ?</a></li>
						</ul>
					</div> <!-- end .widget -->
					<div class="widget">
						<h6>pour Freelacers</h6>
						<ul class="list-unstyled">
							<li><a href="#0">recherche travail</a></li>
							<li><a href="#0">recherche par catégories</a></li>
							<li><a href="#0">Poster une Resumé</a></li>
							
					
						</ul>
					</div> <!-- end .widget -->
					<div class="widget">
						<h6>Pour Utilisateur</h6>
						<ul class="list-unstyled">
							<li><a href="#0">recherche Freelacers</a></li>
					
							<li><a href="#0">ajouter un travail</a></li>
							
						</ul>
					</div> <!-- end .widget -->
					<div class="widget">
						<h6>
Suivez nous</h6>
						<ul class="list-unstyled social-icons flex no-column">
							<li><a href="#0"><i class="ion-social-twitter"></i></a></li>
							<li><a href="#0"><i class="ion-social-facebook"></i></a></li>
							<li><a href="#0"><i class="ion-social-youtube"></i></a></li>
							<li><a href="#0"><i class="ion-social-instagram"></i></a></li>
							<li><a href="#0"><i class="ion-social-linkedin"></i></a></li>
						</ul>				
						<h6>
Abonnez-vous</h6>
						<p>
Si vous voulez contacter l'administrateur</p>
	                    <form class="form-inline subscribe-form flex no-column no-wrap items-center">
	                        <div class="form-group">
	                        	<input type="text" class="form-control" placeholder="Your email">
	                        </div> <!-- end .form-group -->
	                        <button type="submit" class="button"><i class="ion-ios-arrow-thin-right"></i></button>
	                  	</form>
					</div> <!-- end .widget -->
				</div> <!-- end .footer-widgets -->
				<div class="bottom flex space-between items-center">
					<p class="copyright-text small">&copy; 2018 <a href="#0">TunisianFreeWork</a>. All Rights Reserved. Designed by <a href="#0">TunisianFreeWork.inc</a>.</p>
					<ul class="list-unstyled copyright-menu flex no-column">
						<li><a href="#0">Privacy policy</a></li>
						<li><a href="#0">Terms of service</a></li>
						<li><a href="#0">Conditions</a></li>
					</ul> <!-- end .copyright-menu -->
				</div> <!-- end .bottom -->
			</div> <!-- end .container -->
		</div> <!-- end .footer -->


		<!-- Scripts -->
		<!-- jQuery -->		
		<script src="js/jquery-3.1.1.min.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- google maps -->
		<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGHxPzKEwPyrh6y-3G5kqrOFrxeLjFIpY&callback=initMap" async defer>
	
    </script>
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