@extends('layouts.layout')

@section('content')

		<!-- Title Section -->
    	<div class="casaroyal-section">

			<div class="casaroyal-page-title property-banner has-image-bg paralax-background">

	            <div class="container">
	                <span>Tous les agents</span>
	            </div>

	            <div class="casaroyal-page-title-shadow"></div>
	            <div class="casaroyal-page-title-image-background" data-parallax="scroll" data-image-src="assets/images/newport-beach.jpg"></div>

            </div>
        </div>
        <!-- Title Section -->

		<!-- Content Section -->
		<div class="casaroyal-section">

			<div class="container">

				<div class="row">

                    <div class="col-md-4">

						<section class="advance-search">

							<h4 class="title search-heading">
								<i class="fa fa-home" aria-hidden="true"></i>Trouvez votre place
							</h4>

							<div class="as-form-wrap">

							    <form class="advance-search-form clearfix ajax_load" method="get">

							        <div class="af-estate-search-field large">
							            <input type="text" name="keyword" id="keyword-txt" value="" placeholder="Mot-clé">
							        </div>

						       		<div class="af-estate-search-field large">

							            <div class="cardojo-price-range-holder">

							                <label>Prix</label> <span class="min-price-text"><span>90000</span>fcfa</span> - <span class="max-price-text"><span>15000000</span>fcfa</span>

							            </div>

							            <input type="hidden" id="priceMin" value="90000">
							            <input type="hidden" id="priceMax" value="15000000">

						            	<div id="priceRange"></div>

						        	</div>


							        <div class="af-estate-search-field large">
							            <label for="location">Location</label>
							            <span class="selectwrap">
							                <select name="location" id="location" class="search-select">
							                    <option value="any" selected="selected">Selectionner Location</option>
							                    <option value="beverly-hills"> Ouagadougou</option>
							                    <option value="los-angeles"> Bobo Dioulasso</option>
							                    <option value="mission-viejo"> Banfora</option>
							                    <option value="newport-beach"> Manga</option>
							                    <option value="pasadena"> Pô</option>
							                    <option value="santa-monica"> Kaya</option>
							                </select>
							            </span>
							        </div>

							        <div class="af-estate-search-field large">
							            <label for="select-status">Statut</label>
							            <span class="selectwrap">
							                <select name="status" id="select-status" class="search-select">
							                    <option value="any" selected="selected">Selectionner Statut</option>
							                    <option value="for-rent">À Louer</option>
							                    <option value="for-sale">À Vendre</option>
							                </select>
							            </span>
							        </div>

							        <div class="af-estate-search-field large">
							            <label for="select-property-type">Type</label>
							            <span class="selectwrap">
							                <select name="type" id="select-property-type" class="search-select">
							                    <option value="any" selected="selected">Selectionner Type</option>
							                    <option value="commercial"> Commercial</option>
							                    <option value="office">-  Bureau</option>
							                    <option value="shop">-  Boutique</option>
							                    <option value="condo"> Copropriété</option>
							                    <option value="residential"> Residentiel</option>
							                    <option value="apartment">-  Apartement</option>
							                    <option value="house">-  Maison</option>
							                    <option value="residential-tower">- Tour Residentielle</option>
							                    <option value="summer-house">-  Maison des vaccances</option>
							                </select>
							            </span>
							        </div>

							        <div class="af-estate-search-field small first">
							            <label for="select-bedrooms">Lit</label>
							            <span class="selectwrap">
							                <select name="bedrooms" id="select-bedrooms" class="search-select">
							                    <option value="any" selected="selected">Tout</option>
							                    <option value="1">1</option>
							                    <option value="2">2</option>
							                    <option value="3">3</option>
							                    <option value="4">4</option>
							                    <option value="5">5</option>
							                    <option value="6">6</option>
							                    <option value="7">7</option>
							                    <option value="8">8</option>
							                    <option value="9">9</option>
							                    <option value="10">10</option>
							                    <option value="11">11</option>
							                    <option value="12">12</option>
							                </select>
							            </span>
							        </div>

							        <div class="af-estate-search-field small second">
							            <label for="select-bathrooms">Salle de Bain </label>
							            <span class="selectwrap">
							                <select name="bathrooms" id="select-bathrooms" class="search-select">
							                    <option value="any" selected="selected">Tout</option>
							                    <option value="1">1</option>
							                    <option value="2">2</option>
							                    <option value="3">3</option>
							                    <option value="4">4</option>
							                    <option value="5">5</option>
							                    <option value="6">6</option>
							                    <option value="7">7</option>
							                    <option value="8">8</option>
							                    <option value="9">9</option>
							                    <option value="10">10</option>
							                    <option value="11">11</option>
							                    <option value="12">12</option>
							                </select>
							            </span>
							        </div>

							        <div class="af-estate-search-field small first">
							            <label for="min-area">Zone min</label>
							            <input type="text" name="min-area" id="min-area" pattern="[0-9]+" value="" placeholder="Zone minimum" title="Please only provide digits!">
							        </div>

							        <div class="af-estate-search-field small second">
							            <label for="max-area">Zone max</label>
							            <input type="text" name="max-area" id="max-area" pattern="[0-9]+" value="" placeholder="Zone maximun" title="Please only provide digits!">
							        </div>

							        <div class="af-estate-search-field af-estate-search-btn-holder large">
							            <input type="submit" value="Recherche" class="af-estate-search-btn">
							        </div>

			                        <div class="clearfix"></div>

					                <div class="amenities-trigger">
					                    <a href="#">
					                        <i class="fa fa-plus-square"></i>
					                        Agréments
				                    	</a>
					                </div>

					                <div class="amenities-wrapper clearfix collapsed">

				                     	<div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-2-stories" name="features[]" value="2-Histoires">
					                        <label for="feature-2-stories">2 Histoires <small>(6)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-central-heating" name="features[]" value="Chauffage central">
					                        <label for="feature-central-heating">Chauffage central<small>(7)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-dual-sinks" name="features[]" value="Doubles pots">
					                        <label for="feature-dual-sinks">Doubles pots <small>(5)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-electric-range" name="features[]" value="Gamme électrique">
					                        <label for="feature-electric-range">Gamme électrique <small>(5)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-emergency-exit" name="features[]" value="Sortie d'urgence">
					                        <label for="feature-emergency-exit">Sortie d'urgence <small>(4)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-fire-alarm" name="features[]" value="Alarm Incendie">
					                        <label for="feature-fire-alarm">Alarm Incendie <small>(6)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-fire-place" name="features[]" value="Cheminée">
					                        <label for="feature-fire-place">Cheminée <small>(7)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-hurricane-shutters" name="features[]" value="Volets anti-ouragan">
					                        <label for="feature-hurricane-shutters">Volets anti-ouragan <small>(3)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-laundry-room" name="features[]" value="Buandérie">
					                        <label for="feature-laundry-room">Buandérie <small>(7)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-lawn" name="features[]" value="Pélouse">
					                        <label for="feature-lawn">Pélouse <small>(4)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-marble-floors" name="features[]" value="Sols en marbre">
					                        <label for="feature-marble-floors">Sols en marbre <small>(7)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-next-to-busway" name="features[]" value="À côté de la voie ferrée">
					                        <label for="feature-next-to-busway">À côté de la voie ferrée <small>(4)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-swimming-pool" name="features[]" value="Piscine">
					                        <label for="feature-swimming-pool">Piscine <small>(7)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-wifi" name="features[]" value="wifi">
					                        <label for="feature-wifi">Wifi <small>(6)</small></label>
					                    </div>
	                                </div>
							    </form>

							</div>
						</section>
                    </div>

                    <div class="col-md-8">

						<!-- Agents Grid -->
						<div class="row">

							<!-- Agents -->
							<div class="col-md-6 col-sm-6 masonry-item post-37 agent type-agent status-publish has-post-thumbnail hentry">
								<div class="item-agent-container">
									<div class="casaroyal-search-card">
										<div class="casaroyal-search-card-body blog-card-body">
											<div class="casaroyal-search-card-image">
												<a href="single-agent.html" title="Ouédraogo Ariane">
													<img src="assets/images/agents/agent-3.jpg">
													<div class="project-hover-overlay">
														<span></span>
														<span></span>
														<span></span>
													</div>
												</a>
											</div>
											<div class="entry-title">
												<span class="casaroyal-agent-position">Agent d'achat</span>
											</div>
											<h2>
												<a href="single-agent.html"> Ariane</a>
											</h2>
											<div class="entry-title agent-contacts">
												<h5>
													<i class="fa fa-phone" aria-hidden="true"></i>
													<a href="tel:+226 25 41 64 66">+226 25 41 64 66</a>
												</h5>
												<h5>
													<i class="fa fa-envelope" aria-hidden="true"></i>
													<a href="mailto : ariane.ouedraogo@africconsultinggroup.com"><span class="__cf_email__" data-cfemail="cfaea8aaa1bb8faab7aea2bfa3aae1aca0a2">Mail de Ariane</span></a>
												</h5>
											</div>
											<ul class="casaroyal-agent-social-links agent-social-link clearfix">
												<li class="facebook">
													<a target="_blank" href="#">
														<i class="fa fa-facebook fa-lg"></i>
													</a>
												</li>
												<li class="twitter">
													<a target="_blank" href="#">
														<i class="fa fa-twitter fa-lg"></i>
													</a>
												</li>
												<li class="linkedin">
													<a target="_blank" href="#">
														<i class="fa fa-linkedin fa-lg"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Agent -->

							<!-- Agents -->
							<div class="col-md-6 col-sm-6 masonry-item post-37 agent type-agent status-publish has-post-thumbnail hentry">
								<div class="item-agent-container">
									<div class="casaroyal-search-card">
										<div class="casaroyal-search-card-body blog-card-body">
											<div class="casaroyal-search-card-image">
												<a href="single-agent.html" title="Bougma Anna">
													<img src="assets/images/agents/agent-4.jpg">
													<div class="project-hover-overlay">
														<span></span>
														<span></span>
														<span></span>
													</div>
												</a>
											</div>
											<div class="entry-title">
												<span class="casaroyal-agent-position">Agent de vente</span>
											</div>
											<h2>
												<a href="single-agent.html">Bougma Anna</a>
											</h2>
											<div class="entry-title agent-contacts">
												<h5>
													<i class="fa fa-phone" aria-hidden="true"></i>
													<a href="tel:+226 25 41 64 66">+226 25 41 64 66</a>
												</h5>
												<h5>
													<i class="fa fa-envelope" aria-hidden="true"></i>
													<a href="mailto:anna.bougma@africconsultinggroup.com"><span class="__cf_email__" data-cfemail="503137353e24103528313d203c357e333f3d">Mail de Anna</span></a>
												</h5>
											</div>
											<ul class="casaroyal-agent-social-links agent-social-link clearfix">
												<li class="facebook">
													<a target="_blank" href="#">
														<i class="fa fa-facebook fa-lg"></i>
													</a>
												</li>
												<li class="twitter">
													<a target="_blank" href="#">
														<i class="fa fa-twitter fa-lg"></i>
													</a>
												</li>
												<li class="linkedin">
													<a target="_blank" href="#">
														<i class="fa fa-linkedin fa-lg"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Agent -->

							<!-- Agents -->
							<div class="col-md-6 col-sm-6 masonry-item post-37 agent type-agent status-publish has-post-thumbnail hentry">
								<div class="item-agent-container">
									<div class="casaroyal-search-card">
										<div class="casaroyal-search-card-body blog-card-body">
											<div class="casaroyal-search-card-image">
												<a href="single-agent.html" title="Nabaloum Louis">
													<img src="assets/images/agents/agent-1.jpg">
													<div class="project-hover-overlay">
														<span></span>
														<span></span>
														<span></span>
													</div>
												</a>
											</div>
											<div class="entry-title">
												<span class="casaroyal-agent-position">Dev web</span>
											</div>
											<h2>
												<a href="single-agent.html"> Louis</a>
											</h2>
											<div class="entry-title agent-contacts">
												<h5>
													<i class="fa fa-phone" aria-hidden="true"></i>
													<a href="tel:+226 52 13 30 10">+226 52 13 30 10</a>
												</h5>
												<h5>
													<i class="fa fa-envelope" aria-hidden="true"></i>
													<a href="mailto:louis.nabaloum@africconsultinggroup.com"><span class="__cf_email__" data-cfemail="77161012190337120f161a071b125914181a">Mail de Louis</span></a>
												</h5>
											</div>
											<ul class="casaroyal-agent-social-links agent-social-link clearfix">
												<li class="facebook">
													<a target="_blank" href="#">
														<i class="fa fa-facebook fa-lg"></i>
													</a>
												</li>
												<li class="twitter">
													<a target="_blank" href="#">
														<i class="fa fa-twitter fa-lg"></i>
													</a>
												</li>
												<li class="linkedin">
													<a target="_blank" href="#">
														<i class="fa fa-linkedin fa-lg"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Agent -->

							<!-- Agents -->
							<div class="col-md-6 col-sm-6 masonry-item post-37 agent type-agent status-publish has-post-thumbnail hentry">
								<div class="item-agent-container">
									<div class="casaroyal-search-card">
										<div class="casaroyal-search-card-body blog-card-body">
											<div class="casaroyal-search-card-image">
												<a href="single-agent.html" title="Alain Alain">
													<img src="assets/images/agents/agent-2.jpg">
													<div class="project-hover-overlay">
														<span></span>
														<span></span>
														<span></span>
													</div>
												</a>
											</div>
											<div class="entry-title">
												<span class="casaroyal-agent-position">Dev web</span>
											</div>
											<h2>
												<a href="single-agent.html">Alain Alain</a>
											</h2>
											<div class="entry-title agent-contacts">
												<h5>
													<i class="fa fa-phone" aria-hidden="true"></i>
													<a href="tel:+22666410768">+22666410768</a>
												</h5>
												<h5>
													<i class="fa fa-envelope" aria-hidden="true"></i>
													<a href="mailto:alain.guigma@africconsultinggroup.com"><span class="__cf_email__" data-cfemail="e9888e8c879da98c91888499858cc78a8684">Mail de Alain</span></a>
												</h5>
											</div>
											<ul class="casaroyal-agent-social-links agent-social-link clearfix">
												<li class="facebook">
													<a target="_blank" href="#">
														<i class="fa fa-facebook fa-lg"></i>
													</a>
												</li>
												<li class="twitter">
													<a target="_blank" href="#">
														<i class="fa fa-twitter fa-lg"></i>
													</a>
												</li>
												<li class="linkedin">
													<a target="_blank" href="#">
														<i class="fa fa-linkedin fa-lg"></i>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Agent -->

						</div>
						<!-- Agents Grid -->

						<!-- pagination -->
						<div id="casaroyal_ajax_load_more" class="pagination">
                               <a href="#" class="casaroyal-btn"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span>Charger plus</span></a>
                        </div>
                        <!-- pagination -->

                    </div>

                </div>

		   	</div>

		</div>
		<!-- Content Section -->
@endsection
