

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
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/membre/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" > E-Mail Address</label>

                        
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" >Password</label>

                            <div>
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div >
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/membre/password/reset') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                    </div> <!-- end login-tab-content -->

                    <div class="tab-pane fade active in" id="register">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/membre/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                        <div class="col-md-4">
                        <input type="radio" id="type" name="type" value="F"> Freelancer
                        <input type="radio" id="type" name="type"   value="D"> Donner d'offre

                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                    </div> <!-- end signup-tab-content -->
                </div> <!-- end .mytabcontent -->
            </div> <!-- end .modal-body -->
        </div> <!-- end .modal-content -->
    </div> <!-- end .modal-dialog -->
</div> <!-- end .modal -->

<!-- Hero Section -->
<div class="section hero-section transparent" style="background-image: url('images/background01.jpg');">
    <div class="inner">
        <div class="container">
            <div class="job-search-form">
                <h2>Plus de<span>100,000<sup>+</sup></span>
                    emplois vous attendent</h2>
                <form class="form-inline flex">
                    <div class="form-group">
                        <div class="form-group-inner">
                            <input type="text" class="form-control" id="input-field-1" placeholder="job title / Keywords / company name">
                            <i class="ion-ios-briefcase-outline"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="input-field-2" placeholder="city / province / zip code">
                        <i class="ion-ios-location-outline"></i>
                    </div>
                    <button type="submit" class="button"><i class="ion-ios-search-strong"></i></button>
                </form>
                <div class="keywords flex">
                    <h4 class="self-center">
                        Mots-clés populaires:</h4>
                    <a href="#0" class="button item-center">web design</a>
                    <a href="#0" class="button item-center">comptable</a>
                    <a href="#0" class="button item-center">java</a>
                </div> <!-- end .keywords -->
            </div> <!-- end .job-search-form -->
        </div> <!-- end .container -->
        <div class="features-bar">
            <div class="container">
                <div class="features-bar-inner flex space-between">
                    <div class="features-box self-center">
                        <h3>
                            LEADER DE L'INDUSTRIE</h3>
                        <a href="about.html"> contactez Nous   <i class="ion-ios-arrow-thin-right"></i></a>
                    </div> <!-- end .feature-box -->
                    <div class="features-box-icon flex no-wrap">
                        <img src="images/feature-icon01.png" alt="cup-icon" class="img-responsive self-center">
                        <div class="content self-center">
                            <h3>
                                Salaire moyen élevé</h3>
                            <a href="#0">
                                Apprendre encore plus<i class="ion-ios-arrow-thin-right"></i></a>
                        </div> <!-- end .content -->
                    </div> <!-- end .feature-box-icon -->
                    <div class="features-box-icon flex no-wrap">
                        <img src="images/feature-icon02.png" alt="cup-icon" class="img-responsive self-center">
                        <div class="content self-center">
                            <h3>2,500,000+ Utilisateur</h3>
                            <a href="#0">
                                Notre communauté<i class="ion-ios-arrow-thin-right"></i></a>
                        </div> <!-- end .content -->
                    </div> <!-- end .feature-box-icon -->
                    <div class="user-profile-icon self-center">
                        <img src="images/profile-icon01.png" alt="profile-icon" class="img-responsive self-center">
                    </div> <!-- end .profile-icon -->
                </div> <!-- end .features-bar-inner -->
            </div> <!-- end .container -->
        </div> <!-- end .features-bar -->
    </div> <!-- end .inner -->
</div> <!-- end .section -->

<!-- Featured Jobs Section -->
<div class="section featured-jobs-section">
    <div class="inner">
        <div class="container">
            <div class="section-top-content flex items-center">
                <h1>
                    Liste des Emplois </h1>
                <a href="#0">Voir Plus<i class="ion-ios-arrow-thin-right"></i></a>
            </div> <!-- end .section-top-content -->
            <div class="jobs-table">
                <div class="table-header">
                    <div class="table-cells flex">
                        <div class="job-title-cell"><h6>Job title / Company name</h6></div>
                        <div class="job-type-cell"><h6>Type</h6></div>
                        <div class="location-cell"><h6>Location</h6></div>
                        <div class="expired-date-cell"><h6>Expired Date</h6></div>
                        <div class="salary-cell"><h6>Salary</h6></div>
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-header -->

                <div class="table-row">
                    <div class="table-cells flex no-wrap">
                        <div class="cell job-title-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Company name</h6>
                            </div> <!-- end .cell-label -->
                            <img src="images/company-logo01.jpg" alt="company-logo" class="img-responsive">
                            <div class="content">
                                <h4><a href="job-details.html">Web Designer needed</a></h4>
                                <p class="small">Quick studio</p>
                            </div> <!-- end .content -->
                        </div> <!-- end .job-title-cell -->
                        <div class="cell job-type-cell flex no-column">
                            <div class="cell-mobile-label">
                                <h6>Type</h6>
                            </div> <!-- end .cell-label -->
                            <button type="button" class="button full-time">Full time</button>
                        </div> <!-- end .job-type-cell -->
                        <div class="cell location-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Location</h6>
                            </div> <!-- end .cell-label -->
                            <p>Cupertino<span>, CA, USA</span></p>
                        </div> <!-- end .location-cell -->
                        <div class="cell expired-date-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Expired Date</h6>
                            </div> <!-- end .cell-label -->
                            <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                        </div> <!-- end .expire-date-cell -->
                        <div class="cell salary-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Salary</h6>
                            </div> <!-- end .cell-label -->
                            <p><sup>$</sup>60<span>/hour</span></p>
                        </div> <!-- end .salray-cell -->
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-row -->

                <div class="table-row">
                    <div class="table-cells flex no-wrap">
                        <div class="cell job-title-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Company name</h6>
                            </div> <!-- end .cell-label -->
                            <img src="images/company-logo02.jpg" alt="company-logo" class="img-responsive">
                            <div class="content">
                                <h4><a href="job-details.html">We're hiring a fullstack developer</a></h4>
                                <p class="small">Archive inc.</p>
                            </div> <!-- end .content -->
                        </div> <!-- end .job-title-cell -->
                        <div class="cell job-type-cell flex no-column">
                            <div class="cell-mobile-label">
                                <h6>Type</h6>
                            </div> <!-- end .cell-label -->
                            <button type="button" class="button part-time">Part time</button>
                        </div>
                        <div class="cell location-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Location</h6>
                            </div> <!-- end .cell-label -->
                            <p>Cupertino<span>, CA, USA</span></p>
                        </div>
                        <div class="cell expired-date-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Expired date</h6>
                            </div> <!-- end .cell-label -->
                            <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                        </div>
                        <div class="cell salary-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Salary</h6>
                            </div> <!-- end .cell-label -->
                            <p><sup>$</sup>60<span>/hour</span></p>
                        </div>
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-row -->

                <div class="table-row">
                    <div class="table-cells flex no-wrap">
                        <div class="cell job-title-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Company name</h6>
                            </div> <!-- end .cell-label -->
                            <img src="images/company-logo03.jpg" alt="company-logo" class="img-responsive">
                            <div class="content">
                                <h4><a href="job-details.html">Looking for a project leader</a></h4>
                                <p class="small">Comply agency</p>
                            </div> <!-- end .content -->
                        </div> <!-- end .job-title-cell -->
                        <div class="cell job-type-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Type</h6>
                            </div> <!-- end .cell-label -->
                            <button type="button" class="button full-time">Full time</button>
                        </div>
                        <div class="cell location-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Location</h6>
                            </div> <!-- end .cell-label -->
                            <p>Cupertino<span>, CA, USA</span></p>
                        </div>
                        <div class="cell expired-date-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Expired Date</h6>
                            </div> <!-- end .cell-label -->
                            <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                        </div>
                        <div class="cell salary-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Salary</h6>
                            </div> <!-- end .cell-label -->
                            <p><sup>$</sup>60<span>/hour</span></p>
                        </div>
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-row -->

                <div class="table-row">
                    <div class="table-cells flex no-wrap">
                        <div class="cell job-title-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>votre nom</h6>
                            </div> <!-- end .cell-label -->
                            <img src="images/company-logo04.jpg" alt="company-logo" class="img-responsive">
                            <div class="content">
                                <h4><a href="job-details.html">Front-end developer needed</a></h4>
                                <p class="small">Folder cooperation</p>
                            </div> <!-- end .content -->
                        </div> <!-- end .job-title-cell -->
                        <div class="cell job-type-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Type</h6>
                            </div> <!-- end .cell-label -->
                            <button type="button" class="button freelancer">freelancer</button>
                        </div>
                        <div class="cell location-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Location</h6>
                            </div> <!-- end .cell-label -->
                            <p>Cupertino<span>, CA, USA</span></p>
                        </div>
                        <div class="cell expired-date-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Expired date</h6>
                            </div> <!-- end .cell-label -->
                            <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                        </div>
                        <div class="cell salary-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Salary</h6>
                            </div> <!-- end .cell-label -->
                            <p><sup>$</sup>60<span>/hour</span></p>
                        </div>
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-row -->

                <div class="table-row">
                    <div class="table-cells flex no-wrap">
                        <div class="cell job-title-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Company name</h6>
                            </div> <!-- end .cell-label -->
                            <img src="images/company-logo05.jpg" alt="company-logo" class="img-responsive">
                            <div class="content">
                                <h4><a href="job-details.html">Software Engineer</a></h4>
                                <p class="small">Bookcover publisher</p>
                            </div> <!-- end .content -->
                        </div> <!-- end .job-title-cell -->
                        <div class="cell job-type-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Type</h6>
                            </div> <!-- end .cell-label -->
                            <button type="button" class="button full-time">Full time</button>
                        </div>
                        <div class="cell location-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Location</h6>
                            </div> <!-- end .cell-label -->
                            <p>Cupertino<span>, CA, USA</span></p>
                        </div>
                        <div class="cell expired-date-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Expired date</h6>
                            </div> <!-- end .cell-label -->
                            <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                        </div>
                        <div class="cell salary-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Salary</h6>
                            </div> <!-- end .cell-label -->
                            <p><sup>$</sup>60<span>/hour</span></p>
                        </div>
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-row -->

                <div class="table-footer flex space-between items-center">
                    <h6>Showing<span>1-5</span>of 23 jobs</h6>
                    <div class="jobpress-custom-pager list-unstyled flex space-between no-column items-center">
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
                </div>
            </div> <!-- end .jobs-table -->
        </div> <!-- end .container -->
    </div> <!-- end .inner -->
</div> <!-- end .section -->

<!-- Category Section -->
<div class="section category-section solid-blue-bg">
    <div class="inner">
        <div class="container">
            <h1 class="light">recherche par Catégories</h1>
            <div class="category-grid">
                <div class="category-row flex no-wrap space-between items-center">
                    <div class="item">
                        <img src="images/category-icon01.png" alt="category-icon" class="img-responsive">
                        <h4>Financement</h4>
                        <p class="light">4286 travail</p>
                    </div> <!-- end .item -->
                    <div class="item">
                        <img src="images/category-icon02.png" alt="category-icon" class="img-responsive">
                        <h4>
                            Construction</h4>
                        <p class="light">452 travail</p>
                    </div> <!-- end .item -->
                    <div class="item">
                        <img src="images/category-icon03.png" alt="category-icon" class="img-responsive">
                        <h4>Logistique</h4>
                        <p class="light">1867 travail</p>
                    </div> <!-- end .item -->
                    <div class="item">
                        <img src="images/category-icon04.png" alt="category-icon" class="img-responsive">
                        <h4>
                            Conception / d'art</h4>
                        <p class="light">3094 travail</p>
                    </div> <!-- end .item -->
                    <div class="item">
                        <img src="images/category-icon05.png" alt="category-icon" class="img-responsive">
                        <h4>
                            Ventes / Marketing</h4>
                        <p class="light">2955 travail</p>
                    </div> <!-- end .item -->
                </div> <!-- end .category-row -->

                <div class="category-row flex no-wrap space-between items-center">
                    <div class="item">
                        <img src="images/category-icon06.png" alt="category-icon" class="img-responsive">
                        <h4>Science</h4>
                        <p class="light">470 travail</p>
                    </div> <!-- end .item -->
                    <div class="item">
                        <img src="images/category-icon07.png" alt="category-icon" class="img-responsive">
                        <h4>Technologies</h4>
                        <p class="light">4536 travail</p>
                    </div> <!-- end .item -->
                    <div class="item">
                        <img src="images/category-icon08.png" alt="category-icon" class="img-responsive">
                        <h4>
                            Soins de santé</h4>
                        <p class="light">2619 travail</p>
                    </div> <!-- end .item -->
                    <div class="item">
                        <img src="images/category-icon09.png" alt="category-icon" class="img-responsive">
                        <h4>
                            Éducation / Formation</h4>
                        <p class="light">1132 travail</p>
                    </div> <!-- end .item -->
                    <div class="item">
                        <img src="images/category-icon10.png" alt="category-icon" class="img-responsive">
                        <h4>Les services alimentaires</h4>
                        <p class="light">757 travail</p>
                    </div> <!-- end .item -->
                </div> <!-- end .category-row -->
            </div>	<!-- end .category-grid -->
        </div> <!-- end .container -->
    </div> <!-- end .inner -->
    <div class="background-text">
        <h1>
            Catégories</h1>
    </div> <!-- end .background-text -->
</div> <!-- end .section -->

<!-- Latest Jobs Section -->
<div class="section Latest-jobs-section">
    <div class="inner">
        <div class="container">
            <div class="section-top-content flex items-center">
                <h1>
                    Derniers emplois</h1>
                <a href="#0">Voir tous les emplois<i class="ion-ios-arrow-thin-right"></i></a>
            </div> <!-- end .section-top-content -->
            <div class="jobs-table">
                <div class="table-header">
                    <div class="table-cells flex">
                        <div class="job-title-cell"><h6>titre de travail </h6></div>
                        <div class="job-type-cell"><h6>Type</h6></div>
                        <div class="location-cell"><h6>Location</h6></div>
                        <div class="expired-date-cell"><h6>Date d'expiration</h6></div>
                        <div class="salary-cell"><h6>Salaire</h6></div>
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-header -->
                <div class="table-row">
                    <div class="table-cells flex no-wrap">
                        <div class="cell job-title-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Company name</h6>
                            </div> <!-- end .cell-label -->
                            <img src="images/company-logo06.jpg" alt="company-logo" class="img-responsive">
                            <div class="content">
                                <h4><a href="job-details.html">Web Designer needed</a></h4>
                                <p class="small">Whale creative</p>
                            </div> <!-- end .content -->
                        </div> <!-- end .job-title-cell -->
                        <div class="cell job-type-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Type</h6>
                            </div> <!-- end .cell-label -->
                            <button type="button" class="button full-time">Full time</button>
                        </div>
                        <div class="cell location-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Location</h6>
                            </div> <!-- end .cell-label -->
                            <p>Cupertino<span>, CA, USA</span></p>
                        </div>
                        <div class="cell expired-date-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Expired date</h6>
                            </div> <!-- end .cell-label -->
                            <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                        </div>
                        <div class="cell salary-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>budget</h6>
                            </div> <!-- end .cell-label -->
                            <p><sup>DT</sup>500<span></span></p>
                        </div>
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-row -->
                <div class="table-row">
                    <div class="table-cells flex no-wrap">
                        <div class="cell job-title-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Company name</h6>
                            </div> <!-- end .cell-label -->
                            <img src="images/company-logo07.jpg" alt="company-logo" class="img-responsive">
                            <div class="content">
                                <h4><a href="job-details.html">We're hiring a fullstack developer</a></h4>
                                <p class="small">Banana inc.</p>
                            </div> <!-- end .content -->
                        </div> <!-- end .job-title-cell -->
                        <div class="cell job-type-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Type</h6>
                            </div> <!-- end .cell-label -->
                            <button type="button" class="button part-time">Part time</button>
                        </div>
                        <div class="cell location-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Location</h6>
                            </div> <!-- end .cell-label -->
                            <p>Cupertino<span>, CA, USA</span></p>
                        </div>
                        <div class="cell expired-date-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Expired date</h6>
                            </div> <!-- end .cell-label -->
                            <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                        </div>
                        <div class="cell salary-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Salary</h6>
                            </div> <!-- end .cell-label -->
                            <p><sup>$</sup>60<span>/hour</span></p>
                        </div>
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-row -->
                <div class="table-row">
                    <div class="table-cells flex no-wrap">
                        <div class="cell job-title-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Company name</h6>
                            </div> <!-- end .cell-label -->
                            <img src="images/company-logo08.jpg" alt="company-logo" class="img-responsive">
                            <div class="content">
                                <h4><a href="job-details.html">Looking for a project leader</a></h4>
                                <p class="small">Elephant studio</p>
                            </div> <!-- end .content -->
                        </div> <!-- end .job-title-cell -->
                        <div class="cell job-type-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Type</h6>
                            </div> <!-- end .cell-label -->
                            <button type="button" class="button full-time">Full time</button>
                        </div>
                        <div class="cell location-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Location</h6>
                            </div> <!-- end .cell-label -->
                            <p>Cupertino<span>, CA, USA</span></p>
                        </div>
                        <div class="cell expired-date-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Expired date</h6>
                            </div> <!-- end .cell-label -->
                            <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                        </div>
                        <div class="cell salary-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Salary</h6>
                            </div> <!-- end .cell-label -->
                            <p><sup>$</sup>60<span>/hour</span></p>
                        </div>
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-row -->
                <div class="table-row">
                    <div class="table-cells flex no-wrap">
                        <div class="cell job-title-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Company name</h6>
                            </div> <!-- end .cell-label -->
                            <img src="images/company-logo09.jpg" alt="company-logo" class="img-responsive">
                            <div class="content">
                                <h4><a href="job-details.html">Front-end developer needed</a></h4>
                                <p class="small">Med-Equal</p>
                            </div> <!-- end .content -->
                        </div> <!-- end .job-title-cell -->
                        <div class="cell job-type-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Type</h6>
                            </div> <!-- end .cell-label -->
                            <button type="button" class="button freelancer">freelancer</button>
                        </div>
                        <div class="cell location-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Location</h6>
                            </div> <!-- end .cell-label -->
                            <p>Cupertino<span>, CA, USA</span></p>
                        </div>
                        <div class="cell expired-date-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Expired date</h6>
                            </div> <!-- end .cell-label -->
                            <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                        </div>
                        <div class="cell salary-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Salary</h6>
                            </div> <!-- end .cell-label -->
                            <p><sup>$</sup>60<span>/hour</span></p>
                        </div>
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-row -->
                <div class="table-row">
                    <div class="table-cells flex no-wrap">
                        <div class="cell job-title-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Company name</h6>
                            </div> <!-- end .cell-label -->
                            <img src="images/company-logo10.jpg" alt="company-logo" class="img-responsive">
                            <div class="content">
                                <h4><a href="job-details.html">Software Engineer</a></h4>
                                <p class="small">organicoo</p>
                            </div> <!-- end .content -->
                        </div> <!-- end .job-title-cell -->
                        <div class="cell job-type-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Type</h6>
                            </div> <!-- end .cell-label -->
                            <button type="button" class="button full-time">Full time</button>
                        </div>
                        <div class="cell location-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Location</h6>
                            </div> <!-- end .cell-label -->
                            <p><span>tunisie, Tunis</span></p>
                        </div>
                        <div class="cell expired-date-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Expired date</h6>
                            </div> <!-- end .cell-label -->
                            <p>Nov 14th<sup>th</sup><span>, 2017</span></p>
                        </div>
                        <div class="cell salary-cell flex no-column no-wrap">
                            <div class="cell-mobile-label">
                                <h6>Salaire</h6>
                            </div> <!-- end .cell-label -->
                            <p><sup>DT</sup>600<span></span></p>
                        </div>
                    </div> <!-- end .table-cells -->
                </div> <!-- end .table-row -->
                <div class="table-footer flex space-between items-center">
                    <h6>Showing<span>1-5</span>of 23 jobs</h6>
                    <div class="jobpress-custom-pager list-unstyled flex space-between no-column items-center">
                        <a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prec</a>
                        <ul class="list-unstyled flex no-column items-center">
                            <li><a href="#0">1</a></li>
                            <li><a href="#0">2</a></li>
                            <li><a href="#0">3</a></li>
                            <li><a href="#0">4</a></li>
                            <li><a href="#0">5</a></li>
                        </ul>
                        <a href="#0" class="button">suiv<i class="ion-ios-arrow-right"></i></a>
                    </div> <!-- end .jobpress-custom-pager -->
                </div>
            </div> <!-- end .jobs-table -->
        </div> <!-- end .container -->
    </div> <!-- end .inner -->
</div> <!-- end .section -->

<div class="section cta-section parallax text-center" style="background-image: url('images/background02.jpg');">
    <div class="inner">
        <div class="container">
            <h2>Looking for a job</h2>
            <p class="large light">
                Rejoignez des milliers d'Freelancers et gagnez ce que vous méritez</p>
            <div class="cta-button">
                <a href="post-resume-form.html" class="button">Commencez maintenant</a>
            </div> <!-- end .cta-button -->
        </div> <!-- end .container -->
    </div> <!-- end .inner -->
</div> <!-- end .section -->

<!-- Latest News Section -->
<div class="section Latest-news-section">
    <div class="inner">
        <div class="container">
            <div class="section-top-content flex items-center">
                <h1>Latest News</h1>
                <a href="blog-list.html">View all news<i class="ion-ios-arrow-thin-right"></i></a>
            </div> <!-- end .section-top-content -->
            <div class="news-grid">
                <div class="news-grid-row flex space-between">
                    <div class="news-item">
                        <img src="images/news-grid01.jpg" alt="news-thumbnail" class="img-responsive">
                        <div class="news-content">
                            <div class="news-meta flex no-column">
                                <h6><a href="#0" class="news-author">Nancy watson</a></h6>
                                <h6 class="publish-date">20.02.2017</h6>
                                <h6><a href="#0" class="comment-count">5 comments</a></h6>
                            </div> <!-- end .news-meta -->
                            <h3 class="news-title">Tips to write an impressive resume online for beginner</h3>
                            <p class="news-excerpt">Morbi ac eros feugiat, lacinia elit ut, elementum turpis. Curabitur justo sapien tempus.</p>
                            <a href="blog-single-fullwidth-image.html" class="button">Read More</a>
                        </div> <!-- end .news-content -->
                    </div> <!-- end .news-item -->
                    <div class="news-item">
                        <img src="images/news-grid02.jpg" alt="news-thumbnail" class="img-responsive">
                        <div class="news-content">
                            <div class="news-meta flex no-column">
                                <h6><a href="#0" class="news-author">Nancy watson</a></h6>
                                <h6 class="publish-date">20.02.2017</h6>
                                <h6><a href="#0" class="comment-count">5 comments</a></h6>
                            </div> <!-- end .news-meta -->
                            <h3 class="news-title">Let's explore 5 cool new features in JobPress theme</h3>
                            <p class="news-excerpt">Morbi ac eros feugiat, lacinia elit ut, elementum turpis. Curabitur justo sapien tempus.</p>
                            <a href="blog-single-fullwidth-image.html" class="button">Read More</a>
                        </div> <!-- end .news-content -->
                    </div> <!-- end .news-item -->
                    <div class="news-item">
                        <img src="images/news-grid03.jpg" alt="news-thumbnail" class="img-responsive">
                        <div class="news-content">
                            <div class="news-meta flex no-column">
                                <h6><a href="#0" class="news-author">Nancy watson</a></h6>
                                <h6 class="publish-date">20.02.2017</h6>
                                <h6><a href="#0" class="comment-count">5 comments</a></h6>
                            </div> <!-- end .news-meta -->
                            <h3 class="news-title">How to convince recuiters and get your dream job</h3>
                            <p class="news-excerpt">Morbi ac eros feugiat, lacinia elit ut, elementum turpis. Curabitur justo sapien tempus.</p>
                            <a href="blog-single-fullwidth-image.html" class="button">Read More</a>
                        </div> <!-- end .news-content -->
                    </div> <!-- end .news-item -->
                </div>  <!-- end .news-grid-row -->
            </div> <!-- end .news-grid -->
        </div> <!-- end .container -->
    </div> <!-- end .inner -->
</div> <!-- end .section -->

<!-- Clients Section -->
<div class="section clients-section solid-grey-bg">
    <div class="inner">
        <div class="container">
            <h1 class="section-title">Clients & Partners</h1>
            <div class="logo-grid">
                <div class="logo-grid-row flex space-between">
                    <div class="logo-item flex">
                        <img src="images/client-logo01.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                    <div class="logo-item flex">
                        <img src="images/client-logo02.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                    <div class="logo-item flex">
                        <img src="images/client-logo03.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                    <div class="logo-item flex">
                        <img src="images/client-logo04.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                    <div class="logo-item flex">
                        <img src="images/client-logo05.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                    <div class="logo-item flex">
                        <img src="images/client-logo06.png" alt="client-company-logo" class="img-responsive self-center">
                    </div> <!-- end .logo-item -->
                </div> <!-- end .logo-grid-row -->
            </div> <!-- end .logo-grid -->
        </div> <!-- end .container -->
    </div> <!-- end .inner -->
</div> <!-- end .section -->

<!-- CTA App Section -->
<div class="section cta-app-section solid-blue-bg">
    <div class="inner">
        <div class="container">
            <div class="cta-app-section-inner flex space-between items-center">
                <div class="left">
                    <h2 class="light">
                        Vous ne voulez pas manquer une chose?</h2>
                    <p class="large">visité <span>AppStore</span>&<span>Google Play</span>to download<span>Tunisian Free work </span></p>
                </div> <!-- end .left -->
                <div class="button-group flex no-column">
                    <a href="#0" class="button white">Google Play</a>
                    <a href="#0" class="button white">Apple Store</a>
                </div> <!-- end .button-group -->
            </div> <!-- end .cta-app-section-inner -->
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