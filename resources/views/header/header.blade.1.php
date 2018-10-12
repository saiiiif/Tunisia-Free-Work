


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
                            <li class="active"><a href="index">accueil</a></li>
                            <li><a href="about">Qui sommes nous?</a></li>
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
                                    <li><a href="help">Aidez moi</a></li>
                                    <li><a href="contact-us-full-width">Contactez Nous</a></li>
                                    <li><a href="pricing-plans.html">Notre termes</a></li>
                                </ul>
                            </li>

                            
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    
                        </ul>
                      
                    </nav> <!-- end .main-nav -->
                    <a href="#" class="responsive-menu-open"><i class="ion-navicon"></i></a>
                </div> <!-- end .navigation -->
                <!--<div class="button-group-merged flex no-column">
                    <a href="post-job-form" class="button">poste travail</a>
                    <a href="#register" class="button" data-toggle="modal" data-target=".bs-modal-sm">
                        s'inscrire</a>

                     
                </div>--> <!-- end .button-group-merged -->
            </div> <!-- end .right -->
        </div> <!-- end .header-inner -->
    </div> <!-- end .container -->
</header> <!-- end .header -->