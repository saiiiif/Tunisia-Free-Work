<!DOCTYPE html>

<html lang="en">
@include('layouts.master')
	
<!-- Mirrored from jobpress.icookcode.net/dev/candidate-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 23:20:20 GMT -->
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>JobPress HTML template</title>
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 12px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 10px  ;
    text-align: left;
    padding: 17px;
}

tr:nth-child(even) {
    background-color: ;
}
.myButton {
	-moz-box-shadow:inset 0px 1px 0px 0px #54a3f7;
	-webkit-box-shadow:inset 0px 1px 0px 0px #54a3f7;
	box-shadow:inset 0px 1px 0px 0px #54a3f7;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #007dc1), color-stop(1, #0061a7));
	background:-moz-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:-webkit-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:-o-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:-ms-linear-gradient(top, #007dc1 5%, #0061a7 100%);
	background:linear-gradient(to bottom, #007dc1 5%, #0061a7 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#007dc1', endColorstr='#0061a7',GradientType=0);
	background-color:#007dc1;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
	border:1px solid #124d77;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:13px;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #154682;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #0061a7), color-stop(1, #007dc1));
	background:-moz-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-webkit-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-o-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:-ms-linear-gradient(top, #0061a7 5%, #007dc1 100%);
	background:linear-gradient(to bottom, #0061a7 5%, #007dc1 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#0061a7', endColorstr='#007dc1',GradientType=0);
	background-color:#0061a7;
}
.myButton:active {
	position:relative;
	top:1px;
}

</style>

		<!-- CSS -->
		
		<!-- Bootstrap -->
		<link href="{{ asset("css/bootstrap.min.css")}}" rel="stylesheet">
		<!-- Ionicons -->
		<link href="{{ asset("fonts/ionicons/css/ionicons.min.css")}}" rel="stylesheet">
		<!-- Owl Carousel -->
		<link href="{{asset ("css/owl.carousel.css")}}" rel="stylesheet">
		<link href="{{asset ("css/owl.theme.default.css") }}" rel="stylesheet">
		<!-- Animate.css -->
		<link href="{{asset("css/animate.min.css")}}" rel="stylesheet">
		<!--Magnific Popup -->
		<link href="{{ asset("css/magnific-popup.css")}}" rel="stylesheet">
		<!--Tagsinput CSS -->
		<link href="{{asset(" css/tagsinput.css")}}" rel="stylesheet">		
		<!-- Style.css -->
		<link href="{{asset("css/style.css")}}" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js">
	</head>
	<body>

		<!-- Header -->
		<header class="header">
			<div class="container clearfix">
				<div class="header-inner flex space-between items-center">
					<div class="left">
						<h1> Tunisian Free Work </h1>	
					</div> <!-- end .left -->				
					<div class="right flex space-between no-column items-center">
						<div class="navigation">
							<nav class="main-nav">
								<ul class="list-unstyled">
									<li class="active"><a href="index.html">Home</a></li>
									<li><a href="about.html">About</a></li>
									<li class="menu-item-has-children">
										<a href="candidates-listing.html">Freelancer</a>
										<ul>
											<li><a href="candidates-listing.html">Browse Candidates</a></li>
											<li><a href="companies-listing.html">Browse Companies</a></li>
											<li><a href="jobs-listing.html">Jobs Listing</a></li>
											<li><a href="job-details.html">Job Details</a></li>
											<li><a href="categories.html">Job Categories</a></li>
											<li><a href="post-resume-form.html">Post a Resume</a></li>
											<li><a href="candidate-dashboard.html">Candidate Dashboard</a></li>
										</ul>									
									</li>
									<li class="menu-item-has-children">
										<a href="companies-listing.html">donneur d'offre</a>
										<ul>
											<li><a href="companies-listing.html">Browse Companies</a></li>
											<li><a href="post-job-form.html">Post a job</a></li>
											<li><a href="employer-dashboard.html">Employer Dashboard</a></li>
										</ul>
									</li>								
									<li class="menu-item-has-children">
										<a href="blog-standard.html">Blog</a>
										<ul>
											<li><a href="blog-standard.html">Blog Standard</a></li>
											<li><a href="blog-grid-full-width.html">Blog Grid Full Width</a></li>
											<li><a href="blog-masonry-full-width.html">Blog Masonry Full Width</a></li>
											<li><a href="blog-list.html">Blog List</a></li>
											<li><a href="blog-single-fullwidth-image.html">Blog Single Image</a></li>
											<li><a href="blog-single-fullwidth-video.html">Blog Single Video</a></li>
											<li><a href="blog-single-with-sidebar.html">Blog Single Sidebar</a></li>
										</ul>
									</li>
									<li class="menu-item-has-children">
										<a href="#0">Pages</a>
										<ul>
											<li><a href="help.html">Help Tabs</a></li>
											<li><a href="contact-us-full-width.html">Contact Us</a></li>
											<li><a href="pricing-plans.html">Pricing plans</a></li>
										</ul>
									</li>
								</ul>
							</nav> <!-- end .main-nav -->
							<a href="#" class="responsive-menu-open"><i class="ion-navicon"></i></a>
						</div> <!-- end .navigation -->
						<div class="account-info-top flex items-center no-column">
							<a href="#0" class="notification-icon"><i class="ion-android-notifications"></i></a>
							<a href="#0" class="profile-button flex space-between items-center no-column no-wrap"><span>Bienvenue!</span>  @if (Auth::guard('membre')->user()){{ Auth::guard('membre')->user()->name }} @endif
 <img src="/uploads/avatars/{{ Auth::guard('membre')->user()->avatar }} " alt="avatar" class="img-responsive"></a>
						</div> <!-- end .account-info-top -->
					</div> <!-- end .right -->
				</div> <!-- end .header-inner -->
			</div> <!-- end .container -->
		</header> <!-- end .header -->

		<!-- Responsive Menu -->
		<div class="responsive-menu">
			<a href="#" class="responsive-menu-close"><i class="ion-android-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->

		<!-- Breadcrumb Bar -->
		<div class="section breadcrumb-bar solid-blue-bg">
			<div class="inner">
				<div class="container">
					<div class="breadcrumb-menu flex items-center no-column">
						
						<img src="/uploads/avatars/{{ Auth::guard('membre')->user()->avatar }} "  class="img-responsive">
						<div class="breadcrumb-info-dashboard">
							<h2 style="color:white;">{{ Auth::guard('membre')->user()->name }} </h2>
							<form enctype="multipart/form-data" action="/profilefreelancer" method="POST" class="button">
							<label> changer le photo de profil </label> 
							<input type="file" name="avatar">
							<input  type="hidden" name="_token" value="{{csrf_token()}}">
							<input type="submit" value="valider" class="myButton">
                           
                       
						   </form>
						</div> <!-- end .candidate-info -->
					</div> <!-- end .breadcrumb-menu -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<!-- Candidate Dashboard -->
		<div class="section candidate-dashboard-content solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<div class="candidate-dashboard-wrapper flex space-between no-wrap">

						<div class="left-sidebar-menu">							
							<ul class="nav nav-pills nav-stacked">
								<li class="heading">Manage account</li>
							    <li><a data-toggle="pill" href="#resume">
Mon CV</a></li>
							    <li class="active"><a data-toggle="pill" href="#bookmarked-jobs">accueil</a></li>
								<li class="notification-link flex space-between items-center no-column no-wrap"><a data-toggle="pill" href="#Message">Messages</a> <span class="notification-count">4+</span></li>
							    <li class="notification-link flex space-between items-center no-column no-wrap"><a data-toggle="pill" href="#notifications">Notifications</a> <span class="notification-count">2</span></li>
							    <li class="nav-divider"></li>
							   	<li class="heading">Gérer le travail</li>
								<li><a data-toggle="pill" href="#manage-applications">Gérer des applications</a></li>
							    
							    <li class="nav-divider"></li>
							    <li><a data-toggle="pill" href="#change-password">Changer le mot de passe</a></li>
							    
								<li> 
								
								<a href="{{ url('/logouts') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
												 déconnecter
                                    </a>
                                    
                                    <form id="logout-form" action="{{ url('/logouts') }}" method="get" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>

								</li>
							</ul>
							
						</div> <!-- end .left-sidebar-menu -->
						
						<div class="right-side-content">
							<div class="tab-content candidate-dashboard">

							    <div id="bookmarked-jobs" class="tab-pane fade in active">
							        <h3 class="tab-pane-title">accueil</h3>
							       
							       
									<div class="divider"></div>
									<form enctype="multipart/form-data" action="/postuler" method="POST" >
							 
									{{ csrf_field() }}
							
							
                                            <table>
											<div >
											<tr >
											
                                            <th>  photo    </th>
											<th>  nom      </th>
											<th>   titre   </th>
											<th>   description d'emploi </th>
											<th>    date    </th>
											<th>    votre cv    </th>
											<th>    action   </th>
											</tr>
											</div>
											@if($posts)
											@foreach($posts as $post)
											<tr>
											
											
										<td>  <img src="/uploads/avatars/{{$post->membre->avatar}} "  width="50" high="50">            </td>
                                        <td>    {{$post->membre->name}}          </td>
                                        <td>      {{$post->titre}}            </td>
										<td>            
									
                                                {{$post->postjob}}  
                                     
										    </td>
										<td>    {{$post->created_at->diffForhumans()}}            </td>
									
											<td> <input type="file" name="cv"> </td>
										
										<td> <input type="submit" value="postuler" class="myButton"> </td> 
										
											
										    	</tr>
												<input type="hidden" name="postid" value="{{$post->id_post}}"> 
											@endforeach
											@endif
											
										
											</table>
											
										
	                                  </form>
							        		
						        	
						        	<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
										<a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Pres</a>
										<ul class="list-unstyled flex no-column items-center">
											<li><a href="#0">1</a></li>
											<li><a href="#0">2</a></li>
											<li><a href="#0">3</a></li>
											<li><a href="#0">4</a></li>
											<li><a href="#0">5</a></li>									
										</ul>
										<a href="#0" class="button">suivant<i class="ion-ios-arrow-right"></i></a>
									</div> <!-- end .jobpress-custom-pager -->							        
							    </div> <!-- end #bookmarked-jobs-tab -->
								

							    <div id="job-alerts" class="tab-pane fade in">
							        <h3 class="tab-pane-title">Job alerts</h3>
							        <div class="job-alerts-list-wrapper">
							        	<ul class="job-alert-table-headings flex items-center no-column list-unstyled">
							        		<li class="company-name-cell"><h6>Company Name</h6></li>
							        		<li class="job-position-cell"><h6>Position</h6></li>
							        		<li class="contract-type-cell"><h6>Contract Type</h6></li>
							        		<li class="job-frequency-cell"><h6>Frequency</h6></li>
							        	</ul> <!-- end .job-alert-table-headings -->
							        	<div class="job-alerts-wrapper">											
							        		<div class="job-alert flex no-wrap no-column items-center list-unstyled">
												<div class="company-name-cell job-alert-cell flex no-column  no-wrap">			
													<div class="cell-mobile-label">
														<h6>Company name</h6>
													</div> <!-- end .cell-label -->
													<div class="cell-text no-column">
														<h4>Banana Inc.</h4>
														<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
													</div> <!-- end .cell-text -->
												</div> <!-- end .company-name-cell -->
								        		<div class="job-position-cell job-alert-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Position</h6>
													</div> <!-- end .cell-label -->
								        			<p>web designer</p>
								        		</div> <!-- end .job-position-cell -->
								        		<div class="contract-type-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Contract type</h6>
													</div> <!-- end .cell-label -->
								        			<button type="button" class="button full-time">Full time</button>
								        		</div> <!-- end .contract-position-cell -->
								        		<div class="job-frequency-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Frequency</h6>
													</div> <!-- end .cell-label -->
								        			<p>Daily</p>
								        		</div> <!-- end .job-frequency-cell -->
								        		<div class="job-edit-cell job-alert-cell flex items-center no-wrap no-column  no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .job-edit-cell -->
							        		</div> <!-- end .job-alert -->
							        		<div class="divider"></div>
							        		<div class="job-alert flex no-wrap no-column items-center list-unstyled">
												<div class="company-name-cell job-alert-cell flex no-column  no-wrap">			
													<div class="cell-mobile-label">
														<h6>Company name</h6>
													</div> <!-- end .cell-label -->
													<div class="cell-text no-column">
														<h4>Folder cooperation</h4>
														<p><i class="ion-ios-location-outline"></i>Cupertino, CA, USA</p>
													</div> <!-- end .cell-text -->
												</div> <!-- end .company-name-cell -->
								        		<div class="job-position-cell job-alert-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Position</h6>
													</div> <!-- end .cell-label -->
								        			<p>UI/UX designer</p>
								        		</div> <!-- end .job-position-cell -->
								        		<div class="contract-type-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Contract type</h6>
													</div> <!-- end .cell-label -->
								        			<button type="button" class="button full-time">Full time</button>
								        		</div> <!-- end .contract-position-cell -->
								        		<div class="job-frequency-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Frequency</h6>
													</div> <!-- end .cell-label -->
								        			<p>Daily</p>
								        		</div> <!-- end .job-frequency-cell -->
								        		<div class="job-edit-cell job-alert-cell flex items-center no-wrap no-column  no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .job-edit-cell -->
							        		</div> <!-- end .job-alert -->
							        		<div class="divider"></div>
							        		<div class="job-alert flex no-wrap no-column items-center list-unstyled">
												<div class="company-name-cell job-alert-cell flex no-column  no-wrap">			
													<div class="cell-mobile-label">
														<h6>Company name</h6>
													</div> <!-- end .cell-label -->
													<div class="cell-text no-column">
														<h4>Bookcover publisher</h4>
														<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
													</div> <!-- end .cell-text -->
												</div> <!-- end .company-name-cell -->
								        		<div class="job-position-cell job-alert-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Position</h6>
													</div> <!-- end .cell-label -->
								        			<p>Front end developer</p>
								        		</div> <!-- end .job-position-cell -->
								        		<div class="contract-type-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Contract type</h6>
													</div> <!-- end .cell-label -->
								        			<button type="button" class="button full-time">Full time</button>
								        		</div> <!-- end .contract-position-cell -->
								        		<div class="job-frequency-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Frequency</h6>
													</div> <!-- end .cell-label -->
								        			<p>Daily</p>
								        		</div> <!-- end .job-frequency-cell -->
								        		<div class="job-edit-cell job-alert-cell flex items-center no-wrap no-column  no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .job-edit-cell -->
							        		</div> <!-- end .job-alert -->
							        		<div class="divider"></div>
							        		<div class="job-alert flex no-wrap no-column items-center list-unstyled">
												<div class="company-name-cell job-alert-cell flex no-column  no-wrap">			
													<div class="cell-mobile-label">
														<h6>Company name</h6>
													</div> <!-- end .cell-label -->
													<div class="cell-text no-column">
														<h4>Archive inc.</h4>
														<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
													</div> <!-- end .cell-text -->
												</div> <!-- end .company-name-cell -->
								        		<div class="job-position-cell job-alert-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Position</h6>
													</div> <!-- end .cell-label -->
								        			<p>Backend developer</p>
								        		</div> <!-- end .job-position-cell -->
								        		<div class="contract-type-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Contract type</h6>
													</div> <!-- end .cell-label -->
								        			<button type="button" class="button full-time">Full time</button>
								        		</div> <!-- end .contract-position-cell -->
								        		<div class="job-frequency-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Frequency</h6>
													</div> <!-- end .cell-label -->
								        			<p>Daily</p>
								        		</div> <!-- end .job-frequency-cell -->
								        		<div class="job-edit-cell job-alert-cell flex items-center no-wrap no-column  no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .job-edit-cell -->
							        		</div> <!-- end .job-alert -->
							        		<div class="divider"></div>
							        		<div class="job-alert flex no-wrap no-column items-center list-unstyled">
												<div class="company-name-cell job-alert-cell flex no-column  no-wrap">			
													<div class="cell-mobile-label">
														<h6>Company name</h6>
													</div> <!-- end .cell-label -->
													<div class="cell-text no-column">
														<h4>Quick Studio</h4>
														<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
													</div> <!-- end .cell-text -->
												</div> <!-- end .company-name-cell -->
								        		<div class="job-position-cell job-alert-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Position</h6>
													</div> <!-- end .cell-label -->
								        			<p>Graphic Designer</p>
								        		</div> <!-- end .job-position-cell -->
								        		<div class="contract-type-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Contract type</h6>
													</div> <!-- end .cell-label -->
								        			<button type="button" class="button full-time">Full time</button>
								        		</div> <!-- end .contract-position-cell -->
								        		<div class="job-frequency-cell job-alert-cell flex no-column  no-wrap">
													<div class="cell-mobile-label">
														<h6>Frequency</h6>
													</div> <!-- end .cell-label -->
								        			<p>Daily</p>
								        		</div> <!-- end .job-frequency-cell -->
								        		<div class="job-edit-cell job-alert-cell flex items-center no-wrap no-column  no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>
								        		</div> <!-- end .job-edit-cell -->
							        		</div> <!-- end .job-alert -->
							        		<div class="divider"></div>
							        	</div> <!-- end .job-alerts-wrapper -->
						        	</div> <!-- end .job-alerts-list-wrapper -->
						        	<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
										<a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>
										<ul class="list-unstyled flex no-column items-center">
											<li><a href="#0">1</a></li>
											<li><a href="#0">2</a></li>
											<li><a href="#0">3</a></li>
											<li><a href="#0">4</a></li>
											<li><a href="#0">5</a></li>									
										</ul>
										<a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a>
									</div> <!-- end .jobpress-custom-pager -->							        
							    </div> <!-- end #job-alerts-tab -->

							    <div id="manage-applications" class="tab-pane fade in">
							        <h3 class="tab-pane-title">Manage applications</h3>
							        <div class="job-applications-list-wrapper">
							        	<div class="job-application flex items-center no-column no-wrap">
										<table>
										<tr>
                                        <th>  titre de travaille    </th>
										<th>  etat     </th>  
										
                                         </tr>
										 @if($postulations)
										@foreach($postulations as $postulation)
									@if(	Auth::guard('membre')->user()->id==$postulation->membre->id)
										 <tr>
										
										
										
                                        <td>    html developper       </td>
                                       
									
									   <td> {{$postulation->etat}}</td>
									
										
                                         
										 </tr>
										 @endif
                                         @endforeach
											@endif

							        	</table>



							        	</div> <!-- end .job-application -->
							        </div> <!-- end .applications-list-wrapper -->
						        	<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
										<a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Pres</a>
										<ul class="list-unstyled flex no-column items-center">
											<li><a href="#0">1</a></li>
											<li><a href="#0">2</a></li>
											<li><a href="#0">3</a></li>
											<li><a href="#0">4</a></li>
											<li><a href="#0">5</a></li>									
										</ul>
										<a href="#0" class="button">suiv<i class="ion-ios-arrow-right"></i></a>
									</div> <!-- end .jobpress-custom-pager -->							        
							    </div> <!-- end #manage-applications-tab -->

							    <div id="notifications" class="tab-pane fade in">
							        <h3 class="tab-pane-title">Your notifications</h3>
							        <div class="notifications-list-wrapper">

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="images/company-logo07.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p>Your bookmarked job “Web designer needed” from<span class="company-name">Banana Inc.</span>has expired.</p>
												<p class="ultra-light">3 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->
                                   




									

							        	<div class="divider"></div>

							        	<div class="notification highlighted flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="images/company-logo07.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p>Banana Inc. posted a new job.<a href="#0">Check it out now!</a></p>
												<p class="ultra-light">4 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="images/company-logo13.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p>Your bookmarked job “Web designer needed” from<span class="company-name">Bull Creative Agency.</span>will be expired tomorrow.<a href="#0">Submit resume now!</a></p>
												<p class="ultra-light">5 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="images/company-logo14.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p>Your bookmarked job “We’re looking for a designer” from<span class="company-name">Cat Studio</span>has expired.</p>
												<p class="ultra-light">6 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification highlighted flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="images/company-logo07.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p>Your bookmarked job “Web designer needed” from<span class="company-name">Banana Inc.</span>will be expired tomorrow.<a href="#0">Submit resume now!</a></p>
												<p class="ultra-light">1 day ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="images/company-logo12.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p><span class="company-name">Prymb Creative Studio</span>posted a new job.<a href="#0">Check it out now!</a></p>
												<p class="ultra-light">2 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="images/company-logo08.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p><span class="company-name">Elephant Studio</span>posted a new job.<a href="#0">Check it out now!</a></p>
												<p class="ultra-light">2 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="images/company-logo11.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p><span class="company-name">Evotweet</span>posted a new job.<a href="#0">Check it out now!</a></p>
												<p class="ultra-light">2 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="images/company-logo14.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
											<p>Your bookmarked job “We're looking for a designer'” from<span class="company-name">Cat studio</span>will be expired tomorrow.<a href="#0">Submit resume now!</a></p>
												<p class="ultra-light">2 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        	<div class="notification flex items-center no-column no-wrap">
											<div class="notification-company-logo">
												<img src="images/company-logo15.jpg" alt="company-logo" class="img-responsive">
											</div> <!-- end .notification-company-logo -->
											<div class="notification-text">
												<p><span class="company-name">Audiotorium</span>posted a new job.<a href="#0">Check it out now!</a></p>
												<p class="ultra-light">2 hours ago</p>
											</div> <!-- end .notification-text -->
							        	</div> <!-- end .notification -->

							        	<div class="divider"></div>

							        </div> <!-- end .notifications-list-wrapper -->
						        	<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
										<a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>
										<ul class="list-unstyled flex no-column items-center">
											<li><a href="#0">1</a></li>
											<li><a href="#0">2</a></li>
											<li><a href="#0">3</a></li>
											<li><a href="#0">4</a></li>
											<li><a href="#0">5</a></li>									
										</ul>
										<a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a>
									</div> <!-- end .jobpress-custom-pager -->							        
							    </div> <!-- end #notifications-tab -->

							    <div id="resume" class="tab-pane fade in">
							    	<div class="profile-badge"><h6>Mon resume</h6></div>
							        <div class="profile-wrapper">

										<div class="profile-info profile-section flex no-column no-wrap">
											<div class="profile-picture">
												<img src="/uploads/avatars/{{ Auth::guard('membre')->user()->avatar }} " width="100" height="100" alt="candidate-picture" class="img-responsive">
											</div> <!-- end .user-picture -->
											<div class="profile-meta">
											<h4 class="dark"> @if (Auth::guard('membre')->user()){{ Auth::guard('membre')->user()->name }} @endif</h4>
												
												<ul class="list-unstyled social-icons flex no-column">
													<li><a href="#0"><i class="ion-social-twitter"></i></a></li>
													<li><a href="#0"><i class="ion-social-facebook"></i></a></li>
													<li><a href="#0"><i class="ion-social-instagram"></i></a></li>
												</ul> <!-- end .social-icons -->
											</div> <!-- end .profile-meta -->
										</div> <!-- end .profile-info -->

										<div class="divider"></div>
										<form action="/infofreelancer" method="POST" >
                                         {{csrf_field()}}
										<div class="profile-about profile-section">
											<h3 class="dark profile-title">À propos de moi<span><i class="ion-edit"></i></span></h3>
											<input type="text" name="info" >
											
										</div> <!-- end .profile-about -->
										
										<div class="divider"></div>

										<div class="profile-experience-wrapper profile-section">
											<h3 class="dark profile-title"> expérience de travaille<span><i class="ion-edit"></i></span></h3>
											<div class="profile-experience flex space-between no-wrap no-column">
												<div class="profile-experience-left">
											<input type="text" name="exp"> 
											
											
											</div> <!-- end .profile-experience -->
										</div> <!-- end .profile-experience-wrapper -->

										<div class="divider"></div>

										<div class="profile-education-wrapper profile-section">
											<h3 class="dark profile-title">Éducation<span><i class="ion-edit"></i></span></h4>											
											<div class="profile-education">												
											<input type="text" name="education">
											
										</div> <!-- end .profile-education-wrapper -->

										<div class="divider"></div>

										

										<div class="profile-skills-wrapper profile-section">
											<h3 class="dark profile-title">Compétence<span><i class="ion-edit"></i></span></h3>
											<div class="progress-wrapper flex space-between items-center no-wrap">
												<h6 class="progress-skill">HTML</h6>											
												<div class="progress">													
													<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
													</div> <!-- end .progress-bar -->
												</div> <!-- end .progress -->
												<h6 class="percentage"><span class="countTo" data-from="0" data-to="90">90</span>%</h6>
											</div> <!-- end .progress-wrapper -->
											<div class="spacer-xs"></div>
											<div class="progress-wrapper flex space-between items-center no-wrap">
												<h6 class="progress-skill">WordPress</h6>											
												<div class="progress">													
													<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
													</div> <!-- end .progress-bar -->
												</div> <!-- end .progress -->
												<h6 class="percentage"><span class="countTo" data-from="0" data-to="80">80</span>%</h6>
											</div> <!-- end .progress-wrapper -->
											<div class="spacer-xs"></div>
											<div class="progress-wrapper flex space-between items-center no-wrap">
												<h6 class="progress-skill">PS</h6>											
												<div class="progress">													
													<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
													</div> <!-- end .progress-bar -->
												</div> <!-- end .progress -->
												<h6 class="percentage"><span class="countTo" data-from="0" data-to="60">60</span>%</h6>
											</div> <!-- end .progress-wrapper -->
											<div class="spacer-xs"></div>
											<div class="progress-wrapper flex space-between items-center no-wrap">
												<h6 class="progress-skill">AI</h6>											
												<div class="progress">													
													<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
													</div> <!-- end .progress-bar -->
												</div> <!-- end .progress -->
												<h6 class="percentage"><span class="countTo" data-from="0" data-to="90">90</span>%</h6>
											</div> <!-- end .progress-wrapper -->
										</div> <!-- end .profile-skills-wrapper -->
										<input type="submit" value="enregister" class="myButton" >
                                     </form>
							        </div> <!-- end .profile-wrapper -->						        
							    </div> <!-- end #resume-tab -->

				<!-- message -->
								
							
								<!--mesage -->
								

							  		</div> <!-- end .candidate-dashboard -->
						</div> <!-- end .right-side-content -->
						
						
						  <div id="change-password" class="tab-pane fade in">							    	
							        <div class="password-form-wrapper">	
							        	<h3 class="dark">Modifier Votre Mot De Passe</h3>									
			                            <form class="password-form" method="Post" action="/modifierpass">
											<div class="form-group">
											    <label for="InputEmail1">votre Email <sup>*</sup></label>
											    <input type="email" class="form-control" name="Email1" placeholder="">
											</div>

											<div class="form-group">
											    <label for="InputPassword1">Nouveau Mot de Passe<sup>*</sup></label>
											    <input type="password" class="form-control" name="pass" placeholder="">
											</div>

											<div class="form-group">
											    <label for="InputPassword1">Confirmer le nouveau Mot de Passe<sup>*</sup></label>
											    <input type="password" class="form-control" name="pass1" placeholder="">
											</div>	
                                                     <button type="submit" class="button">Sauvegarder les modifications</button>											
										</form> <!-- end .password-form -->
										<div class="password-button-wrapper">
												
										</div> <!-- end .password-button-wrapper -->
							        </div> <!-- end .password-form-wrapper -->						        
							    </div>
						<!-- message -->
						
						    <div id="message" class="tab-pane fade in">
							    	<div class="profile-badge"><h6>messages</h6></div>
							        <div class="profile-wrapper">

										<div class="profile-info profile-section flex no-column no-wrap">
											<div class="profile-picture">
												<img src="images/candidate-big01.jpg" alt="candidate-picture" class="img-responsive">
											</div> <!-- end .user-picture -->
											<div class="profile-meta">
												<h4 class="dark">user name </h4>
												
												<ul class="list-unstyled social-icons flex no-column">
													<li><a href="#0"><i class="ion-social-twitter"></i></a></li>
													<li><a href="#0"><i class="ion-social-facebook"></i></a></li>
													<li><a href="#0"><i class="ion-social-instagram"></i></a></li>
												</ul> <!-- end .social-icons -->
											</div> <!-- end .profile-meta -->
										</div> <!-- end .profile-info -->

										<div class="divider"></div>
										</div>
										</div>

							</div> <!-- end .candidate-dashboard -->
							
							

							
							
							
						</div> <!-- end .right-side-content -->
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						<!--message-->
						
	                    <!-- end #change-password-tab -->

					</div> <!-- end .candidate-dashboard-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<!-- Footer -->
		@include('footer.footer');
	 <!-- end .footer -->
        <script>
var $el, $ps, $up, totalHeight;

$(".sidebar-box .button").click(function() {
      
  totalHeight = 0

  $el = $(this);
  $p  = $el.parent();
  $up = $p.parent();
  $ps = $up.find("p:not('.read-more')");
  
  // measure how tall inside should be by adding together heights of all inside paragraphs (except read-more paragraph)
  $ps.each(function() {
    totalHeight += $(this).outerHeight();
  });
        
  $up
    .css({
      // Set height to prevent instant jumpdown when max height is removed
      "height": $up.height(),
      "max-height": 9999
    })
    .animate({
      "height": totalHeight
    });
  
  // fade out read-more
  $p.fadeOut();
  
  // prevent jump-down
  return false;
    
});

		</script>

		<!-- Scripts -->
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<!-- jQuery -->		
		<script src="{{asset("js/jquery-3.1.1.min.js")}}"></script>
		<!-- Bootstrap -->
		<script src="{{asset("js/bootstrap.min.js")}}"></script>
		<!-- google maps -->
		<script src="{{ asset("https://maps.googleapis.com/maps/api/js?key=AIzaSyAy-PboZ3O_A25CcJ9eoiSrKokTnWyAmt8")}}"></script>
		<!-- Owl Carousel -->
		<script src="{{asset("js/owl.carousel.min.js")}}"></script>
		<!-- Wow.js -->
		<script src="{{asset("js/wow.min.js")}}"></script>
		<!-- Typehead.js -->
		<script src="{{asset("js/typehead.js")}}"></script>
		<!-- Tagsinput.js -->
		<script src="{{asset("js/tagsinput.js")}}"></script>
		<!-- Bootstrap Select -->
		<script src="{{asset("js/bootstrap-select.js")}}"></script>		
		<!-- Waypoints -->
		<script src="{{asset("js/jquery.waypoints.min.js")}}"></script>
		<!-- CountTo -->
		<script src="{{asset("js/jquery.countTo.js")}}"></script>
		<!-- Isotope -->
		<script src="{{asset("js/isotope.pkgd.min.js")}}"></script>
		<script src="{{asset ("js/imagesloaded.pkgd.min.js")}}"></script>
		<!-- Magnific-Popup -->
		<script src="{{asset("js/jquery.magnific-popup.js")}}"></script>
		<!-- Scripts.js -->
		<script src="{{asset("js/scripts.js")}}"></script>
		<script>
		swal("vous éte connectée!", "You clicked the button!", "success");
		</script>
		@include('sweet::alert')

	</body>

<!-- Mirrored from jobpress.icookcode.net/dev/candidate-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 23:20:54 GMT -->
</html>