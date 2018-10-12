


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
                                <a href="#0">Pages</a>
                                <ul>
                                    <li><a href="help">Aidez moi</a></li>
                                    <li><a href="contact-us-full-width">Contactez Nous</a></li>
                                    <li><a href="pricing-plans.html">Notre termes</a></li>
                                </ul>
                            </li>

                            
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">s'identifier</a></li>
                            <li><a href="{{ route('register') }}">registre</a></li>
                        @else
                        <li><a href="{{ route('login') }}">s'identifier</a></li>
                            <li><a href="{{ route('register') }}">registre</a></li>
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