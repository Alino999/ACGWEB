		<!-- Sidebar menu -->
		<div id="casaroyal-side-menu" class="casaroyal-side-menu">

			<div class="casaroyal-side-top">
				<div class="logo-for-panel">
			        <a class="blog-logo-image light-logo external" href="{{url('/')}}" title="casaRoyal - Premium Real Estate Template" rel="home">
			        	<img src="assets/images/logo-light.png" alt="Logo">
			        </a>
			    </div>
			</div>

			<div class="casaroyal-side-inner">
				<ul class="casaroyal-side-inner-menu">
					<li class="menu-item menu-item-has-children">
						<a href="{{url('/')}}">Accueil</a>
						<ul class="sub-menu">
							<li class="menu-item current_page_item">
								<a href="{{url('/')}}">Accueil</a>
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
						<a href="properties.html">Propriétés</a>
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
						<a href="{{url('tous_les_agents')}}" class="external">Agents</a>
						<ul class="sub-menu">
							<li class="menu-item">
								<a href="{{url('tous_les_agents')}}" class="external">Tous Agents</a>
							</li>
							<li class="menu-item">
								<a href="{{url('agent')}}" class="external">Page Agent </a>
							</li>
						</ul>
					</li>
					<li class="menu-item menu-item-has-children">
						<a href="#" class="external">Pages</a>
						<ul class="sub-menu">
							<li class="menu-item menu-item-has-children">
								<a href="#" class="external">Utilité</a>
								<ul class="sub-menu">
									<li class="menu-item">
										<a href="{{url('a_propos_de_nous')}}" class="external">À Propos de nous</a>
									</li>
								</ul>
							</li>
							<li class="menu-item menu-item-has-children"><a href="#" class="external">Propriétés</a>
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
							<li class="menu-item menu-item-has-children">
								<a href="blog.html" class="external">Blog</a>
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
						<a href="{{url('nous_contactez')}}" class="external">Contact</a>
					</li>
				</ul>
			</div>

			<div class="shop-sidebar-buttons">
				<div class="menu-compare-button">
					<a class="compare-action-button external" href="{{url('comparer')}}">
						<span>Comparer</span>
						<i class="fa fa-check-circle-o" aria-hidden="true"></i>
						<span class="list-badge"><span class="casaroyal-current-cars-in-compare">3</span></span>
					</a>
				</div>
			</div>

			<form class="search-form" method="get" id="searchform-sidebar" action="#">
				<div class="input-with-icon">
					<i class="fa fa-search" aria-hidden="true"></i>
					<input type="text" id="small-search-box" name="s" placeholder="Écrivez ici">
				</div>
			</form>

		</div>
		<!-- Sidebar menu -->

		<a href="#casaroyal-side-close" class="casaroyal-trigger casaroyal-side-close"></a>
		<a href="#" class="cd-top">Sommet</a>

		<!-- Login Register Popup -->
		<div id="overlay">
			<div id="modal">
				<div id="modal-inner">
					<div class="row row-eq-height">
						<div class="col-md-6">
							<div class="casaroyal-login-content">
								<a href="#" class="close">
									<i class="fa fa-close"></i>
								</a>
								<div id="login">
									<h4>Connexion</h4>
									<div id="casaroyal_account_login_errors"></div>
									<form id="casaroyal_login_form" class="casaroyal_form" action="#" method="post">
										<fieldset class="input">
											<label for="casaroyal_user_login">
												<i class="fa fa-user-circle" aria-hidden="true"></i>
											</label>
											<input name="casaroyal_user_login" class="required" type="text" placeholder="Pseudo">
										</fieldset>
										<fieldset class="input">
											<label>
												<i class="fa fa-key" aria-hidden="true"></i>
											</label>
											<input name="casaroyal_user_pass" class="required" type="password" placeholder="Mot de passe">
										</fieldset>
										<fieldset>
											<button class="btn" id="casaroyal_login_submit" type="submit" value="Login">
												<i id="login-progress" class="fa fa-spinner fa-spin fa-fw"></i>Connecter
											</button>
											<div class="remember-checkbox">
												<label>
													<input name="rememberme" type="checkbox" value="">
													<span class="cr"><i class="fa fa-check" aria-hidden="true"></i></span> Se souvenir de moi
												</label>
											</div>
										</fieldset>
										<p class="casaroyal-lost-password-wrapper casaroyal-padding-bottom-0">
											<small class="align-left"><a class="casaroyal-registration" href="#">Inscrire maintenant</a></small>
											<small class="align-right"><a class="casaroyal-lost-password" href="#" title="Forgot password?">Mot de passe oublié?</a></small>
										</p>
									</form>
									<div class="wp-social-login-widget">
										<div class="wp-social-login-connect-with"></div>
										<div class="wp-social-login-provider-list">
											<a rel="nofollow" href="#" title="Connect with Facebook" class="wp-social-login-provider wp-social-login-provider-facebook" data-provider="Facebook"> Facebook </a>
											<a rel="nofollow" href="#" title="Connect with Google" class="wp-social-login-provider wp-social-login-provider-google" data-provider="Google"> Google </a>
											<a rel="nofollow" href="#" title="Connect with Twitter" class="wp-social-login-provider wp-social-login-provider-twitter" data-provider="Twitter"> Twitter </a>
										</div>
										<div class="wp-social-login-widget-clearing"></div>
									</div>
								</div>
								<div id="register">
									<h4>Créer un compte</h4>
									<p>
                                        Cela prend moins d'une minute. Si vous avez déjà un compte <a class="casaroyal-login" href="#">Connexion</a>.</p>

									<div id="casaroyal_account_register_errors"></div>

									<form id="casaroyal_registration_form" class="casaroyal_form" method="POST">

										<fieldset class="input">

											<label for="casaroyal_user_login"><i class="fa fa-user-circle" aria-hidden="true"></i></label>
											<input name="casaroyal_user_login" id="casaroyal_user_login" class="required" type="text" placeholder="Pseudo">

										</fieldset>

										<fieldset class="input">

											<label for="casaroyal_user_email"><i class="fa fa-at" aria-hidden="true"></i></label>
											<input name="casaroyal_user_email" id="casaroyal_user_email" class="required" type="email" placeholder="Email">

										</fieldset>

										<fieldset class="input">

											<label for="password"><i class="fa fa-key" aria-hidden="true"></i></label>
											<input name="casaroyal_user_pass" id="password" class="required" type="password" placeholder="Mot de passe">

										</fieldset>

										<fieldset class="input">

											<label for="password_again"><i class="fa fa-key" aria-hidden="true"></i></label>
											<input name="casaroyal_user_pass_confirm" id="password_again" class="required" type="password" placeholder="Confirmer mot de passe">

										</fieldset>

										<fieldset>

											<div class="custom-checkbox pull-left casaroyal-privacy-policy-accept">
						                      	<label>
						                        	<input type="checkbox" class="property_submit_agree" name="property_submit_agree">
						                        	J'ai lu et je suis d'accord avec <a href="#">
                                                        Politique de confidentialité</a>
						                      	</label>
						                    </div>

											<button id="casaroyal_register_submit" class="btn" type="submit" value="Register">
												<i id="register-progress" class="fa fa-spinner fa-spin fa-fw"></i>Inscrire
											</button>

										</fieldset>

									</form>
								</div>
								<div id="lost-password">
									<h4>Mot de passe oublié?</h4>
									<p>Entrez votre adresse e-mail et nous vous enverrons un nouveau mot de passe..</p>
									<div id="casaroyal_account_reset_errors"></div>
									<form id="lostpasswordform" action="#" method="post">
										<fieldset class="input">
											<label for="user_login">
												<i class="fa fa-at" aria-hidden="true"></i>
											</label>
											<input type="text" name="user_login" id="user_login" placeholder="Email">
										</fieldset>
										<a href="#" id="casaroyal_reset_submit" class="btn"> <i id="reset-progress" class="fa fa-spinner fa-spin fa-fw"></i>Get New Password </a>
									</form>
									<p class="casaroyal-padding-bottom-0">Si vous vous souvenez du mot de passe, retournez à <a class="casaroyal-back-login" href="#">Connexion</a>.</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 casaroyal-login-image"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- Login Register Popup -->

		<!-- Add to Compare Response -->
		<div class="single-add-to-compare">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-9">
						<div class="single-add-to-compare-left">
							<span class="casaroyal-title h5">Vous avez déjà ajouté 3 annonces</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-3">
						<a href="compare.html" class="compare-fixed-link pull-right heading-font">Comparer</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Add to Compare Response -->

		<!-- Big Screen Search -->
		<div id="big-search-holder" class="modal-container search-modal">
			<div class="modal-content">
				<div class="pos-vertical-center clearfix">
					<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
						<form class="search-form" method="get" id="searchform" action="#">
							<div class="input-with-icon">
								<i class="fa fa-search" aria-hidden="true"></i>
								<input type="text" id="big-search-box" name="s" placeholder="Écrivez ici">
							</div>
						</form>
					</div>
				</div>
				<div class="close-big-search-holder"></div>
			</div>
		</div>
		<!-- Big Screen Search -->

		<!-- Preloader -->
		<div id="pageloader">
			<div class="progress">
				<div class="indeterminate"></div>
			</div>
		</div>
		<!-- Preloader -->

		<a id="go-to-top" href="#" class="cd-top cd-fade-out go-to-top">Sommet</a>
