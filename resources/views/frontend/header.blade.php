<div id="header" class="sticky-header">
    <div class="header-main hidden-sm hidden-xs">
        <div class="container">
            <div class="clearfix">
                <div class="header-top-info">
                    <div class="clearfix">
                        <!--Header fax number-->
                        <div class="pull-right">
                            <div class="header-main-phone heading-font header-working-time">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <div class="phone">
                                    <span class="phone-number heading-font">Lun - Ven: 07h30 - 16h30</span>
                                </div>
                            </div>
                        </div>
                        <!--Header office phone-->
                        <div class="pull-right">
                            <div class="header-main-phone heading-font">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <div class="phone">
                                    <span class="phone-number heading-font"><a href="tel:(123)456-7890">00226 25 41 64 66</a></span>
                                </div>
                            </div>
                        </div>
                        <!--Header address-->
                        <div class="pull-right">
                            <div class="header-address">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <div class="address">
                                    <span class="heading-font first-line">1441 Location , Ouagadougou</span>
                                </div>
                            </div>
                        </div>
                    </div> <!--clearfix-->
                </div>
                <div class="pull-right">
                    <ul class="main-menu top-menu">
                        <li id="menu-search-button" class="menu-item menu-social-links">
                            <a href="#" class="external"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </li>
                        <li class="menu-item menu-social-links">
                            <a href="#" class="external"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="menu-item menu-social-links">
                            <a href="#" class="external"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="menu-item menu-social-links">
                            <a href="#" class="external"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li class="menu-item menu-social-links">
                            <a href="#" class="external"><i class="fa fa-pinterest-p"></i></a>
                        </li>
                        <li class="menu-login-register-button menu-item">
                            <a class="login-button" href="#"><i class="fa fa-sign-in" aria-hidden="true"></i> Connexion/Inscription</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div id="header-nav-holder">
        <div class="header-nav header-nav-default header-nav-fixed">
            <div class="container">
                <!--Logo-->
                <div class="logo-main">
                    <a class="logo-wrapper" href="{{url('/')}}">
                        <img src="assets/images/logo.png" alt="Logo">
                    </a>
                </div>
                <!--Header sidebar menu-->
                <div class="casaroyal-menu-wrapper">
                    <a href="#" class="casaroyal-trigger icon-mobile-menu mobile-menu">
                        <span class="icon-wrap casaroyal-middle-line"></span>
                        <span class="icon-wrap casaroyal-top-line"></span>
                        <span class="icon-wrap casaroyal-bottom-line"></span>
                    </a>
                </div>
                <!--Header main menu-->
                <div class="main-menu">
                    <ul class="main-menu">
                        <li class="menu-item menu-item-has-children">
                            <a href="{{url('/')}}"><span>Accueil</span></a>
                            <ul class="sub-menu">
                                <li class="menu-item current-menu-item">
                                    <a href="{{url('/')}}"><span>Accueil</span><span class="casaroyal-menu-hot">Hot</span></a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{url('a_propos_de_nous')}}"><span>À propos de nous</span></a>
                                </li>
                                <li class="menu-item">
                                    <a href="#"><span>Nos partenaires</span></a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{url('nous_contactez')}}"><span>Nous contactez</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="#"><span>Propriétés</span></a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="{{url('propriétés-grille-vue-avec-carte')}}"><span>Vue en grille avec carte</span></a>
                                </li>
                                <li class="menu-item">
                                    <a href="#"><span>Affichage en liste</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="{{url('tous_les_agents')}}"><span>Agents</span></a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="{{url('tous_les_agents')}}"><span>Tous les Agents</span></a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{url('agent')}}"><span>Page Agent</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item menu-item-has-children td-has-megamenu">
                            <a href="#"><span>Pages</span></a>
                            <ul class="sub-menu td-mega-menu">
                                <li class="menu-item menu-item-has-children">
                                    <a href="#"><span>Utilité</span></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item">
                                            <a href="{{url('a_propos_de_nous')}}"><span>À Propos de nous</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="#"><span>Propriétés</span></a>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="#"><span>Demi-carte à droite</span><span class="casaroyal-menu-hot">Hot</span></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#"><span>Demi-carte à gauche</span><span class="casaroyal-menu-new">New</span></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#"><span>Vue grille</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="blog.html"><span>Blog</span></a>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="#"><span>Maçonnerie</span></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{url('blog')}}"><span>Blog</span></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        </li>
                        <li class="menu-item">
                            <a href="{{url('nous_contactez')}}"><span>Contact</span></a>
                        </li>
                    </ul>
                </div>
                <!--Header end main menu-->

                <!--Header submit listing button-->
                <div class="pull-right">
                    <div id="menu-submit-property-button">
                        <a href="{{url('soumettre_annonce')}}">Soumettre une annonce</a>
                    </div>
                </div>
                <!--Header my facvorites button-->
                <div class="pull-right ">
                    <div id="menu-favorites-button" class="menu-item menu-social-links">
                        <a href="my-favorites.html"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    </div>
                </div>
                <!--Header compare button-->
                <div class="pull-right ">
                    <div class="menu-compare-button menu-item">
                        <a class="compare-action-button" href="{{url('comparer')}}">
                            <span>Comparer</span>
                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                            <span class="list-badge"><span class="casaroyal-current-cars-in-compare">3</span></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
