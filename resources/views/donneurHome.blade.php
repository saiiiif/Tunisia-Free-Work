<!DOCTYPE html>
<html lang="en">
@include('layouts.master')
<!-- Mirrored from jobpress.icookcode.net/dev/employer-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 23:20:54 GMT -->
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>JobPress HTML template</title>
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
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 20px  ;
    text-align: left;
    padding: 12px;
}

tr:nth-child(even) {
    background-color: ;
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
		<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({forced_root_block : "",selector:'textarea'});</script>
	</head>
	<body>

		<!-- Header -->
		<header class="header">
			<div class="container clearfix">
				<div class="header-inner flex space-between items-center">
					<div class="left">
						<h1 > Tunisian Free Work </h1>
					</div> <!-- end .left -->				
					<div class="right flex space-between no-column items-center">
						<div class="navigation">
							<nav class="main-nav">
								<ul class="list-unstyled">
									<li class="active"><a href="index.html">Home</a></li>
									<li><a href="about.html">About</a></li>
									<li class="menu-item-has-children">
										<a href="candidates-listing.html">Freelancers</a>
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
							<a href="#0" class="profile-button flex space-between items-center no-column no-wrap"><span>bienvenue!</span>@if (Auth::guard('membre')->user()){{ Auth::guard('membre')->user()->name }} @endif<img src="/uploads/avatars/{{ Auth::guard('membre')->user()->avatar }} " alt="avatar" class="img-responsive"></a>
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
							<h2>{{ Auth::guard('membre')->user()->name }} </h2>
							<form enctype="multipart/form-data" action="/profile" method="POST" class="button">
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
	
		<!-- Employer Dashboard -->
		<div class="section employer-dashboard-content solid-light-grey-bg">
			<div class="inner">
				<div class="container">
					<div class="employer-dashboard-wrapper flex space-between no-wrap">

						<div class="left-sidebar-menu">							
							<ul class="nav nav-pills nav-stacked">
								<li class="heading">Gérer votre compte</li>
							    <li><a data-toggle="pill" href="#profile"> Profil</a></li>
								
							    <li class="active"><a data-toggle="pill" href="#jobs">Publier des offres</a></li>
							    <li class="notification-link flex space-between items-center no-column no-wrap"><a data-toggle="pill" href="#notifications-employer">Notifications</a> <span class="notification-count">2</span></li>
							    <li><a data-toggle="pill" href="#packages"></a></li>
								 <li><a data-toggle="pill" href="#Messages">Messages</a></li>
							    <li class="nav-divider"></li>
							   	<li class="heading">Gérer le travail</li>
								<li><a data-toggle="pill" href="#manage-jobs">gérer les Emplois</a></li>
							    <li><a data-toggle="pill" href="#manage-applications-employer">gérer Applications</a></li>
							    <li class="nav-divider"></li>
							    <li><a data-toggle="pill" href="#change-password-employer">Modifier Mot De Pass</a></li>
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
							<div class="tab-content employer-dashboard">

							    <div id="jobs" class="tab-pane fade in active">
							        <h3 class="tab-pane-title">publier offre</h3>
							      <form action="/newsfeed" method="POST">
								  {{ csrf_field() }}
								  
								
								  <img src="/uploads/avatars/{{ Auth::guard('membre')->user()->avatar }} " width="50" height="50"  class="img-responsive">
								  <label> Titre de Poste </label>
                                   <input type="text" name="titre" >
								   <label> Discription </label>
								   <textarea name="postjob">Ecrire Ici...</textarea>
								   <input type="submit" value="Poster" class="myButton">
                                 </form>
							    </div> <!-- end #favorite-candidates-tab -->



							    <div id="manage-applications-employer" class="tab-pane fade in">
							        <h3 class="tab-pane-title">gere les  applications</h3>
							        <div class="candidate-applications-list-wrapper">
									<form action="/accepter" method="Post">
									<table>
											<div >
											<tr >
											
                                            <th>  photo    </th>
											<th>  nom      </th>
											<th>   cv  </th>
											<th> titre de travaille </th>
											<th>    date   </th>
											<th>    action   </th>
											</tr>
											</div>
											@if($posts)
											@if($postulations)
											@foreach($postulations as $postulation)
											
											<tr>
											
											
										<td>  <img src="/uploads/avatars/{{$postulation->membre->avatar}} "  width="50" high="50"> </td>
                                        <td>     {{$postulation->membre->name}}          </td>
                                        <td>   <a href="/uploads/cv/{{$postulation->cv}}.jpg" telecharger>  
										<img border="0" src="/uploads/cv/{{$postulation->cv}}.jpg" alt="cv" width="50" height="50">     </a>      </td>
										@foreach($posts as $post)
										
										 @if ($postulation->post_id==$post->id_post)
										 <td>
										{{$post->titre}} 
										</td>
										@endif
										
                                        @endforeach
										
										<td>    {{$postulation->created_at->diffForhumans()}}            </td>
									
											
										<td> <input type="submit" value="accepter" class="myButton" > 
										<input type="submit" value="refuser" class="myButton" formaction="/refuser"> </td> 
										
											
											</tr>
											@endforeach
											@endif
											@endif
											
										
											</table>
											</form>
							         <!-- end .fav-candidates-table-headings -->

							        	<div class="candidate-applications-wrapper">
                                       
										
										
									     	 	
										
							        		

							        	</div> <!-- end .candidate-applications-wrapper -->
						        	</div> <!-- end .candidate-applications-list-wrapper -->

						        	<div class="jobpress-custom-pager list-unstyled flex space-center no-column items-center">
										<a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Pres</a>
										<ul class="list-unstyled flex no-column items-center">
											<li><a href="#0">1</a></li>
											<li><a href="#0">2</a></li>
											<li><a href="#0">3</a></li>
											<li><a href="#0">4</a></li>
											<li><a href="#0">5</a></li>									
										</ul>
										<a href="#0" class="button">Suiv<i class="ion-ios-arrow-right"></i></a>
									</div> <!-- end .jobpress-custom-pager -->

							    </div> <!-- end #manage-applications-employer -->

							    <div id="manage-jobs" class="tab-pane fade in">
							        <h3 class="tab-pane-title">Manage Jobs</h3>
							        <div class="posted-jobs-list-wrapper">

							        	<ul class="posted-jobs-table-headings flex items-center no-column list-unstyled">
							        		<li class="posted-job-title-cell"><h6>Name</h6></li>
							        		<li class="posted-job-type-cell"><h6>Job Type</h6></li>
							        		<li class="posted-job-candidates-cell"><h6>Candidates</h6></li>
							        		<li class="posted-job-featured-cell"><h6>Featured</h6></li>
							        	</ul> <!-- end .posted-jobs-table-headings -->

							        	<div class="posted-jobs-wrapper">

							        		<div class="posted-job flex no-wrap no-column items-center list-unstyled">
												<div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner">
														<div class="cell-text">
															<h4>Web Designer needed</h4>
															<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job Type</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm freelancer">Freelancer</button>
								        			</div> <!-- end .posted-job-cell-inner -->
								        		</div> <!-- end .posted-job-type-cell -->

								        		<div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Candidates</h6>
													</div> <!-- end .cell-label -->													
													<ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
						        						<li><img src="images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
						        						<li><img src="images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
						        						<li class="candidates-total-count"><img src="images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
						        					</ul> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->

								        		<div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Featured</h6>
													</div> <!-- end .cell-label -->													
													<div class="posted-job-cell-inner flex no-wrap no-column">
														<i class="ion-ios-star grey"></i>
						        					</div> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->						        		

								        		<div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>								        		
												</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .posted-job -->
							        		
							        		<div class="divider"></div>

							        		<div class="posted-job flex no-wrap no-column items-center list-unstyled">
												<div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner">
														<div class="cell-text">
															<h4>We're hring a fullstack developer</h4>
															<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job Type</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm full-time">Freelancer</button>
								        			</div> <!-- end .posted-job-cell-inner -->
								        		</div> <!-- end .posted-job-type-cell -->

								        		<div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Candidates</h6>
													</div> <!-- end .cell-label -->													
													<ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
						        						<li><img src="images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
						        						<li><img src="images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
						        						<li class="candidates-total-count"><img src="images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
						        					</ul> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->

								        		<div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Featured</h6>
													</div> <!-- end .cell-label -->													
													<div class="posted-job-cell-inner flex no-wrap no-column">
														<i class="ion-ios-star safron"></i>
						        					</div> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->						        		

								        		<div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>								        		
												</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .posted-job -->
							        		
							        		<div class="divider"></div>

							        		<div class="posted-job flex no-wrap no-column items-center list-unstyled">
												<div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner">
														<div class="cell-text">
															<h4>Front-end developer needed</h4>
															<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job Type</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm part-time">Freelancer</button>
								        			</div> <!-- end .posted-job-cell-inner -->
								        		</div> <!-- end .posted-job-type-cell -->

								        		<div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Candidates</h6>
													</div> <!-- end .cell-label -->													
													<ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
						        						<li><img src="images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
						        						<li><img src="images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
						        						<li class="candidates-total-count"><img src="images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
						        					</ul> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->

								        		<div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Featured</h6>
													</div> <!-- end .cell-label -->													
													<div class="posted-job-cell-inner flex no-wrap no-column">
														<i class="ion-ios-star grey"></i>
						        					</div> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->						        		

								        		<div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>								        		
												</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .posted-job -->
							        		
							        		<div class="divider"></div>

							        		<div class="posted-job flex no-wrap no-column items-center list-unstyled">
												<div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner">
														<div class="cell-text">
															<h4>Looking for internship web designer</h4>
															<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job Type</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm internship">Freelancer</button>
								        			</div> <!-- end .posted-job-cell-inner -->
								        		</div> <!-- end .posted-job-type-cell -->

								        		<div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Candidates</h6>
													</div> <!-- end .cell-label -->													
													<ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
						        						<li><img src="images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
						        						<li><img src="images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
						        						<li class="candidates-total-count"><img src="images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
						        					</ul> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->

								        		<div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Featured</h6>
													</div> <!-- end .cell-label -->													
													<div class="posted-job-cell-inner flex no-wrap no-column">
														<i class="ion-ios-star grey"></i>
						        					</div> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->						        		

								        		<div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>								        		
												</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .posted-job -->
							        		
							        		<div class="divider"></div>

							        		<div class="posted-job flex no-wrap no-column items-center list-unstyled">
												<div class="posted-job-title-cell posted-job-cell flex items-center no-column no-wrap">		
													<div class="cell-mobile-label">
														<h6>Name</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner">
														<div class="cell-text">
															<h4>We're looking for an project leader</h4>
															<p><i class="ion-ios-location-outline"></i>Manhattan, NYC</p>
														</div> <!-- end .cell-text -->
													</div> <!-- end .candidate-cell-inner -->
												</div> <!-- end .candidate-name-cell -->

								        		<div class="posted-job-type-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Job Type</h6>
													</div> <!-- end .cell-label -->
													<div class="posted-job-cell-inner flex no-column no-wrap">
									        			<button type="button" class="button button-sm full-time">Freelancer</button>
								        			</div> <!-- end .posted-job-cell-inner -->
								        		</div> <!-- end .posted-job-type-cell -->

								        		<div class="posted-job-candidates-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Candidates</h6>
													</div> <!-- end .cell-label -->													
													<ul class="list-unstyled posted-job-cell-inner candidates-avatar flex items-center no-wrap no-column">
						        						<li><img src="images/avatar02.jpg" alt="avatar" class="img-responsive"></li>
						        						<li><img src="images/avatar03.jpg" alt="avatar" class="img-responsive"></li>
						        						<li class="candidates-total-count"><img src="images/avatar04.jpg" alt="avatar" class="img-responsive"><span>54+</span></li>
						        					</ul> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->

								        		<div class="posted-job-featured-cell posted-job-cell flex no-column no-wrap">
													<div class="cell-mobile-label">
														<h6>Featured</h6>
													</div> <!-- end .cell-label -->													
													<div class="posted-job-cell-inner flex no-wrap no-column">
														<i class="ion-ios-star safron"></i>
						        					</div> <!-- end .posted-job-cell-inner -->								        			
								        		</div> <!-- end .posted-job-candidates-cell -->						        		

								        		<div class="posted-job-edit-cell posted-job-cell flex items-center no-wrap no-column no-wrap">
								        			<i class="ion-ios-compose-outline edit-icon"></i>
								        			<i class="ion-ios-trash-outline trash-icon"></i>
								        			<i class="ion-ios-more-outline options-icon"></i>								        		
												</div> <!-- end .posted-job-edit-cell -->
							        		</div> <!-- end .posted-job -->
							        		
							        		<div class="divider"></div>

							        	</div> <!-- end .posted-jobs-wrapper -->
						        	</div> <!-- end .posted-jobs-list-wrapper -->

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
							    </div> <!-- end #manage-applications-tab -->

							    <div id="notifications-employer" class="tab-pane fade in">
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

							    <div id="profile" class="tab-pane fade in">
							    	<div class="profile-badge"><h6>Profile</h6></div>
							        <div class="profile-wrapper">

										<div class="profile-info profile-section flex no-column no-wrap">
											<div class="profile-picture">
												
											<img src="/uploads/avatars/{{ Auth::guard('membre')->user()->avatar }} " width="50" height="50"  alt="candidate-picture" class="img-responsive">
											</div> <!-- end .user-picture -->
											<div class="profile-meta">
												<h4 class="dark">{{ Auth::guard('membre')->user()->name }} </h4>
												
												<ul class="list-unstyled social-icons flex no-column">
													<li><a href="#0"><i class="ion-social-twitter"></i></a></li>
													<li><a href="#0"><i class="ion-social-facebook"></i></a></li>
													<li><a href="#0"><i class="ion-social-instagram"></i></a></li>
												</ul> <!-- end .social-icons -->
											</div> <!-- end .profile-meta -->
										</div> <!-- end .profile-info -->

										<div class="divider"></div>
                                        
										<div class="profile-about profile-section">
										<form action="/infodonneur" method="POST">
										{{ csrf_field() }}
											<h3 class="dark profile-title"><span><i class="ion-edit"> À propos de moi</i></span></h3>
											<input type="textarea" name="info" value="ex Mohamed Saleh , 23 ans , jouer de liverpool "   >
											
										</div> <!-- end .profile-about -->

										<div class="divider"></div>
                                        
										<div class="profile-experience-wrapper profile-section">
											<h3 class="dark profile-title"><span><i class="ion-edit"> address</i></span></h3>
											<input type="textarea" name="address" value="ex Tunis , Aouina 126" >
											<div class="profile-experience flex space-between no-wrap no-column">
												<div class="profile-experience-left">
													
												</div> <!-- end .profile-experience-left -->
											</div> <!-- end .profile-experience -->
											<div class="centre">	<input type="submit" value="enregister" class="button"> </div>
										
											</form>
											<div class="spacer-md"></div>
											<div class="profile-experience flex space-between no-wrap no-column">
												<div class="profile-experience-left">
													
												</div> <!-- end .profile-experience-left -->
											</div> <!-- end .profile-experience -->
										</div> <!-- end .profile-experience-wrapper -->

							        </div> <!-- end .profile-wrapper -->						        
							    </div> <!-- end #profile-tab -->

							    <div id="change-password-employer" class="tab-pane fade in">							    	
							        <div class="password-form-wrapper">	
									<div class="form-group">
											    <label for="InputEmail1">Ancien mot de Passe<sup>*</sup></label>
											    <input type="email" class="form-control" id="InputEmail1" placeholder="">
											</div>

											<div class="form-group">
											    <label for="InputPassword1">Nouveau Mot de Passe<sup>*</sup></label>
											    <input type="password" class="form-control" id="InputPassword1" placeholder="">
											</div>

											<div class="form-group">
											    <label for="InputPassword1">Confirmer le nouveau Mot de Passe<sup>*</sup></label>
											    <input type="password" class="form-control" id="InputPassword1" placeholder="">
											</div>	
                                                     <button type="submit" class="button">Sauvegarder les modifications</button>											
										</form> <!-- end .password-form -->
										</div> <!-- end .password-button-wrapper -->
							        </div> <!-- end .password-form-wrapper -->						        
							    </div> <!-- end #change-password-tab -->
		<!-- message -->
		<div>
		<div>				
		<div id="jobs" class="tab-pane fade in">
							    	<div class="profile-badge"><h6>Publication</h6></div>
							        <div class="profile-wrapper">

										<div class="profile-info profile-section flex no-column no-wrap">
											<div class="profile-picture">
																							</div> <!-- end .profile-meta -->
										</div> <!-- end .profile-info -->

										<div class="divider"></div>

							</div> <!-- end .candidate-dashboard -->
						</div> <!-- end .right-side-content -->
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						<!--message-->
							</div> <!-- end .employer-dashboard -->
						</div> <!-- end .right-side-content -->

					</div> <!-- end .employer-dashboard-wrapper -->
				</div> <!-- end .container -->
			</div> <!-- end .inner -->
		</div> <!-- end .section -->

		<!-- Footer -->
		@include('footer.footer');
		 <!-- end .footer -->


			<!-- Scripts -->
		<!-- jQuery -->		
		<script src="{{asset("js/sweetalert.min.js")}}"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
          <script> 
		 swal("Bienvenue!");
</script>


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
		@include('sweet::alert')
	</body>

<!-- Mirrored from jobpress.icookcode.net/dev/employer-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Mar 2018 23:21:36 GMT -->
</html>