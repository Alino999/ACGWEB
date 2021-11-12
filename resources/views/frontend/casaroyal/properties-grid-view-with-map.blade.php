@extends('layouts.layout')

@section('content')

		<!-- Map Section -->
		<div class="casaroyal-property-map">

			<div id="listings-map" class="grid-view-map"></div>

			<div id="properties-grid-view">

				<div class="property-grid-item property-item-data"
					data-lat="33.6247573"
					data-long="-117.6675707"
					data-title="26502 ACG_immobilier, Ouagadougou, CA 92691, BF"
					data-thumb="assets/images/properties/property-1.jpg"
					data-pin="assets/images/svg/house.svg"
					data-price="160000 fcfa"
					data-type="Maison"
					data-desc="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh…"
					data-link="single-property.html"></div>

				<div class="property-grid-item property-item-data"
					data-lat="33.6262516"
					data-long="-117.8465223"
					data-title="2710 ACG_immobilier, Bobo Dioulasso, CA 92660, BF"
					data-thumb="assets/images/properties/property-2.jpg"
					data-pin="assets/images/svg/house.svg"
					data-price="90000 fcfa"
					data-type="Maison"
					data-desc="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh…"
					data-link="single-property.html"></div>

				<div class="property-grid-item property-item-data"
					data-lat="34.0624409"
					data-long="-118.39353510000001"
					data-title="272 S ACG_immobilier, Manga, CA 90212"
					data-thumb="assets/images/properties/property-3.jpg"
					data-pin="assets/images/svg/house.svg"
					data-price="225000 fcfa"
					data-type="maison "
					data-desc="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh…"
					data-link="single-property.html"></div>

				<div class="property-grid-item property-item-data"
					data-lat="34.3141196"
					data-long="-119.02884230000001"
					data-title="ACG_immobilier – 1020 18th St, Kaya"
					data-thumb="assets/images/properties/property-4.jpg"
					data-pin="assets/images/svg/shop.svg"
					data-price="250000 fcfa"
					data-type="Boutique "
					data-desc="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh…"
					data-link="single-property.html"></div>

				<div class="property-grid-item property-item-data"
					data-lat="34.046928"
					data-long="-118.182725"
					data-title="Immeuble ayant 29 appartements"
					data-thumb="assets/images/properties/property-5.jpg"
					data-pin="assets/images/svg/building.svg"
					data-price="15000000 fcfa"
					data-type="Tour Residentielle"
					data-desc="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh…"
					data-link="single-property.html"></div>

				<div class="property-grid-item property-item-data"
					data-lat="34.046928"
					data-long="-118.182725"
					data-title="14 Apartements de Type A"
					data-thumb="assets/images/properties/property-6.jpg"
					data-pin="assets/images/svg/building.svg"
					data-price="3100000 fcfa"
					data-type="Tour Residentielle"
					data-desc="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh…"
					data-link="single-property.html"></div>

				<div class="property-grid-item property-item-data"
					data-lat="34.046928"
					data-long="-118.182725"
					data-title="15 Apartements de Type B"
					data-thumb="assets/images/properties/property-1.jpg"
					data-pin="assets/images/svg/building.svg"
					data-price="1700"
					data-type="Tour Residentielle "
					data-desc="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh…"
					data-link="single-property.html"></div>

				<div class="property-grid-item property-item-data"
					data-lat="34.162137"
					data-long="-118.13202000000001"
					data-title="construction moderne des maisons de vaccances"
					data-thumb="assets/images/properties/property-2.jpg"
					data-pin="assets/images/svg/summer.svg"
					data-price="130000 fcfa"
					data-type="Maison de Vaccances "
					data-desc="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh…"
					data-link="single-property.html"></div>

			</div>

		</div>
		<!-- Map Section -->

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
							            <input type="text" name="keyword" id="keyword-txt" value="" placeholder="Keyword">
							        </div>

						       		<div class="af-estate-search-field large">

							            <div class="cardojo-price-range-holder">

							                <label>Prix</label> <span class="min-price-text"><span>90000</span>fcfa</span> - <span class="max-price-text"><span>15000000</span>fcfa</span>

							            </div>

							            <input type="hidden" id="priceMin" value="900">
							            <input type="hidden" id="priceMax" value="15000000">

						            	<div id="priceRange"></div>

						        	</div>


							        <div class="af-estate-search-field large">
							            <label for="location">Location</label>
							            <span class="selectwrap">
							                <select name="location" id="location" class="search-select">
							                    <option value="any" selected="selected">Selectionner Location</option>
							                    <option value="beverly-hills"> Manga</option>
							                    <option value="los-angeles"> Banfora</option>
							                    <option value="mission-viejo"> Ouagadougou</option>
							                    <option value="newport-beach"> Bobo Dioulasso</option>
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
							                    <option value="residential"> Residentielle</option>
							                    <option value="apartment">-  Apartement</option>
							                    <option value="house">-  Maison</option>
							                    <option value="residential-tower">-  Residentielle</option>
							                    <option value="summer-house">-  Maison de Vaccances</option>
							                </select>
							            </span>
							        </div>

							        <div class="af-estate-search-field small first">
							            <label for="select-bedrooms">Lits Minimum</label>
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
							            <label for="select-bathrooms">Salles de Bains Minimum</label>
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
							            <label for="min-area">Zone Minimal</label>
							            <input type="text" name="min-area" id="min-area" pattern="[0-9]+" value="" placeholder="Zone" title="Veuillez ne fournir que des chiffres !">
							        </div>

							        <div class="af-estate-search-field small second">
							            <label for="max-area">Zone Maximal</label>
							            <input type="text" name="max-area" id="max-area" pattern="[0-9]+" value="" placeholder="Zone" title="Veuillez ne fournir que des chiffres !">
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
					                        <input type="checkbox" id="feature-2-stories" name="features[]" value="2-stories">
					                        <label for="feature-2-stories">2 Histoires <small>(6)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-central-heating" name="features[]" value="central-heating">
					                        <label for="feature-central-heating">Chauffage Central <small>(7)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-dual-sinks" name="features[]" value="dual-sinks">
					                        <label for="feature-dual-sinks">Doubles Pots <small>(5)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-electric-range" name="features[]" value="electric-range">
					                        <label for="feature-electric-range">Gamme Electrique <small>(5)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-emergency-exit" name="features[]" value="emergency-exit">
					                        <label for="feature-emergency-exit">Sortie d'urgence <small>(4)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-fire-alarm" name="features[]" value="fire-alarm">
					                        <label for="feature-fire-alarm">Alarm Incendie <small>(6)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-fire-place" name="features[]" value="fire-place">
					                        <label for="feature-fire-place">Chéminée <small>(7)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-hurricane-shutters" name="features[]" value="hurricane-shutters">
					                        <label for="feature-hurricane-shutters">Volets anti-ouragan <small>(3)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-laundry-room" name="features[]" value="laundry-room">
					                        <label for="feature-laundry-room">Buanderie<small>(7)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-lawn" name="features[]" value="lawn">
					                        <label for="feature-lawn">Pélouse <small>(4)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-marble-floors" name="features[]" value="marble-floors">
					                        <label for="feature-marble-floors">Sol en Marbre <small>(7)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-next-to-busway" name="features[]" value="next-to-busway">
					                        <label for="feature-next-to-busway">À côté de la voie ferrée <small>(4)</small></label>
					                    </div>
					                    <div class="af-estate-search-field">
					                        <input type="checkbox" id="feature-swimming-pool" name="features[]" value="swimming-pool">
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

						<!-- Properties Controls -->
                    	<div class="listings-controls-header">

                            <div class="total-properties-found"><span>8</span> annonces trouvées</div>

	                        <div class="view-type clearfix">
						        <a class="grid active" href="properties-grid-view.html">
						        	<i class="fa fa-th" aria-hidden="true"></i>
							    </a>
							    <a class="list " href="properties-list-view.html">
							        <i class="fa fa-th-list" aria-hidden="true"></i>
							    </a>
							</div>

							<div class="sort-controls">
							    <strong>Trier par:</strong>
							    <select class="cs-select cs-skin-slide" name="sort-properties" id="sort-properties">
							        <option value="default">Ordre par défaut</option>
							        <option value="price-asc">Prix ​​croissant</option>
							        <option value="price-desc">Prix ​​élevé à bas</option>
							        <option value="date-asc">Date de l'ancien au nouveau</option>
							        <option value="date-desc">Date du nouveau à l'ancien</option>
							    </select>
							</div>

						</div>
						<!-- Properties Controls -->

						<!-- Properties Grid -->
                        <div class="row ">

							<!-- Property -->
							<div class="col-md-12 property-list-item property-item-data clearfix"
								data-lat="33.6262516"
								data-long="-117.8465223"
								data-title="2710 ACG_immobilier, Ouagadougou, CA 92660, BF"
								data-thumb="assets/images/properties/property-2.jpg"
								data-pin="assets/images/svg/house-1.svg"
								data-price="90000 fcfa"
								data-type="Maison"
								data-desc="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh…"
								data-link="single-property.html"
								data-id="49"


								>

							    <div class="property-list-content">


							        <a href="single-property.html" class="property-list-image" style="background-image: url(assets/images/properties/property-2.jpg);">

							            <span class="property-featured">
							                <i class="fa fa-bolt" aria-hidden="true"></i>
							            </span>

							            <span class="property-action-unit add-to-favorites">
						                    <span class="add-to-favorites-list" data-toggle="tooltip" data-placement="top" data-original-title="Add to favorites">
						                        <i class="fa fa-heart-o" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                    <span class="remove-to-favorites-list" data-toggle="tooltip" data-placement="top" data-original-title="Remove from favorites">
						                        <i class="fa fa-heart" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                </span>

							            <span class="property-action-unit add-to-compare remove" data-id="48" data-action="remove">
							                <span class="add-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Add to compare">
							                    <i class="fa fa-exchange" aria-hidden="true"></i>
							                    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
							                </span>
							                <span class="remove-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Remove from compare">
							                    <i class="fa fa-exchange" aria-hidden="true"></i>
							                    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
							                </span>
							            </span>

							            <img src="assets/images/properties/placeholder-casaroyal-property-list-view-image.png">

							        </a>

							        <div class="property-list-item-holder">

							            <div class="property-grid-price">
							                <span class="price-prefix"></span>
							                <span class="property-price-holder"><span class="property-price-number">90000</span>fcfa</span>
							                <span class="price-prefix">Par mois</span>
							            </div>

							            <a href="single-property.html">
							            	<h4 class="property-list-title">2710 ACG_immobilier, Ouagadougou, CA 92660, BF</h4>
							            </a>

							            <div class="property-price">
							                <span class="status-label">
							                    <span class="property-type">Maison</span> / À Vendre - Ouagadougou, CA
							                </span>
							            </div>

						                <div class="casaroyal-property-agent-name">
						                	<i class="fa fa-user-circle" aria-hidden="true"></i>
						                	<a href="single-agent.html">Alain Alain</a>
						                </div>

							            <div class="casaroyal-property-listing-time">
							                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>il y'a 2 mois
							            </div>

							            <div class="property-meta">

							                <div class="property-meta-list">

							                    <div class="property-meta-item first-item">
							                    	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
														<g>
															<g>
																<path d="M501.533,450.097l-33.38-33.38c-6.521-6.521-17.087-6.521-23.609,0c-6.521,6.516-6.521,17.092,0,23.609l4.892,4.892
																	H129.349l4.892-4.892c6.521-6.516,6.521-17.092,0-23.609c-6.521-6.521-17.087-6.521-23.609,0l-33.38,33.38
																	c-3.275,3.269-4.903,7.73-4.903,11.816c0,4.174,1.714,8.633,4.903,11.816l33.38,33.38c6.522,6.522,17.086,6.522,23.609,0
																	c6.521-6.516,6.521-17.092,0-23.609l-4.892-4.892h320.087l-4.892,4.892c-6.521,6.516-6.521,17.092,0,23.609
																	c6.522,6.522,17.086,6.522,23.609,0l33.38-33.38c3.27-3.262,4.903-7.721,4.903-11.816
																	C506.436,457.629,504.724,453.28,501.533,450.097z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M77.241,349.935l-4.892,4.891V57l4.892,4.892c6.522,6.522,17.086,6.522,23.609,0c6.522-6.522,6.522-17.086,0-23.609
																	L67.458,4.892c-6.521-6.521-17.087-6.521-23.609,0L10.458,38.283c-6.522,6.522-6.522,17.086,0,23.609
																	c6.521,6.521,17.087,6.521,23.609,0L38.958,57v297.826l-4.892-4.892c-6.521-6.521-17.087-6.521-23.609,0
																	c-6.522,6.522-6.522,17.086,0,23.609l33.391,33.391c6.522,6.522,17.086,6.522,23.609,0l33.391-33.391
																	c6.522-6.521,6.522-17.086,0.001-23.608C94.328,343.414,83.762,343.414,77.241,349.935z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M422.958,133.565h83.478V16.696C506.436,7.473,498.957,0,489.74,0H261.566v133.565h83.478
																	c9.217,0,16.696,7.473,16.696,16.696c0,9.223-7.479,16.696-16.696,16.696h-83.478v50.087c0,9.223-7.479,16.696-16.696,16.696
																	s-16.696-7.473-16.696-16.696V0h-72.348c-9.217,0-16.696,7.473-16.696,16.696v345.043c0,9.223,7.479,16.696,16.696,16.696h72.348
																	v-83.478c0-9.223,7.479-16.696,16.696-16.696s16.696,7.473,16.696,16.696v83.478H489.74c9.217,0,16.696-7.473,16.696-16.696
																	V166.957h-83.478c-9.217,0-16.696-7.473-16.696-16.696S413.74,133.565,422.958,133.565z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">1300</span>
													<span class="property-meta-name">Sq Ft</span>
												</div>
												<div class="property-meta-item">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="910px" height="910px" viewBox="0 0 910 910" style="enable-background:new 0 0 910 910;" xml:space="preserve">
														<g>
															<g>
																<path d="M789.1,449.9H879V369c0-16.8-13.7-30.5-30.5-30.5H342.1c1.601,3.3,3.101,6.6,4.601,10c10.2,24.2,15.399,49.9,15.399,76.4
																	c0,8.399-0.5,16.8-1.6,25H789.1z"></path>
																<path d="M165.9,263.7c-3.4,0-6.7,0.1-10,0.3v185.8H267h58.1c1.301-8.2,1.9-16.5,1.9-25c0-31.8-9.2-61.399-25.1-86.3
																	C273.4,293.5,223.1,263.7,165.9,263.7z"></path>
																<path d="M30,731.5h60.9c16.6,0,30-13.4,30-30v-95.7h668.2v95.7c0,16.6,13.4,30,30,30H880c16.6,0,30-13.4,30-30V514.9
																	c0-16.601-13.4-30-30-30h-90.9H120.9V270.1v-61.6c0-16.6-13.4-30-30-30H30c-16.6,0-30,13.4-30,30v111.7v38.5V491v38.5v172
																	C0,718,13.4,731.5,30,731.5z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">2</span>
												</div>

												<div class="property-meta-item">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
														<g>
															<g>
																<path d="M484.66,461.309l-8.06-19.028c-17.218,15.087-38.093,26.095-61.107,31.495l14.787,19.245
																	c5.965,7.762,15.371,12.396,25.162,12.396c10.672,0,20.561-5.312,26.455-14.208C487.789,482.311,488.823,471.134,484.66,461.309z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M35.401,442.281l-8.06,19.028c-4.162,9.826-3.129,21.003,2.764,29.899c5.893,8.896,15.783,14.208,26.455,14.208
																	c9.79,0,19.195-4.634,25.163-12.397l14.786-19.244C73.494,468.376,52.618,457.368,35.401,442.281z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M183.109,60.263h-1.639c-4.049-30.259-30.015-53.679-61.364-53.679h-13.814c-34.148,0-61.931,27.782-61.931,61.931
																	v129.717h30.073V68.514c0-17.566,14.292-31.858,31.858-31.858h13.814c14.713,0,27.122,10.028,30.768,23.606h-2.429
																	c-23.922,0-43.384,19.462-43.384,43.384v25.366c0,8.042,6.319,14.59,14.26,14.997c0.259,0.013,0.514,0.039,0.776,0.039h91.359
																	c8.304,0,15.036-6.732,15.036-15.036v-25.365C226.493,79.725,207.031,60.263,183.109,60.263z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M16.881,316.254v19.082c0,61.821,50.294,112.116,112.115,112.116h254.009c61.82,0,112.115-50.294,112.115-112.116v-19.082
																	H16.881z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M490.37,242.697H21.63C9.703,242.698,0,252.402,0,264.329s9.703,21.63,21.63,21.63h468.74
																	c11.927,0,21.63-9.703,21.63-21.63S502.297,242.697,490.37,242.697z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">3</span>
												</div>

												<div class="property-meta-item property-meta-item-garage">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45.393px" height="45.393px" viewBox="0 0 45.393 45.393" style="enable-background:new 0 0 45.393 45.393;" xml:space="preserve">
														<g>
															<g>
																<path d="M43.518,12.709L25.178,0.728c-1.511-0.978-3.458-0.968-4.96,0.021L1.859,12.719c-1.14,0.751-1.455,2.284-0.705,3.424
																	c0.751,1.14,2.283,1.456,3.424,0.704L22.715,5.021L40.83,16.857c0.416,0.269,0.881,0.396,1.341,0.396
																	c0.812,0,1.604-0.397,2.077-1.127C44.99,14.98,44.662,13.452,43.518,12.709z"></path>
																<path d="M38.879,27.616c-0.151-0.865-0.903-1.505-1.78-1.505h-1.008l-0.383-3.987c-0.409-4.264-3.948-7.49-8.232-7.49H17.92
																	c-4.285,0-7.823,3.227-8.233,7.49l-0.382,3.987H8.296c-0.878,0-1.629,0.64-1.782,1.505l-1.5,8.504
																	c-0.186,1.054,0.112,2.139,0.8,2.957c0.662,0.788,1.637,1.258,2.657,1.293v1.412c0,1.999,1.602,3.61,3.603,3.61h1.138
																	c1.999,0,3.625-1.611,3.625-3.61v-1.389h11.732v1.386c0,2,1.613,3.613,3.612,3.613h1.139c1.999,0,3.614-1.613,3.614-3.613V40.37
																	c1.02-0.035,1.989-0.501,2.649-1.288c0.688-0.82,0.982-1.899,0.798-2.955L38.879,27.616z M11.642,37.113
																	c-1.687,0-3.055-1.367-3.055-3.056c0-1.689,1.368-3.057,3.055-3.057c1.688,0,3.057,1.367,3.057,3.057
																	C14.699,35.746,13.33,37.113,11.642,37.113z M12.404,26.111l0.353-3.678c0.257-2.674,2.476-4.688,5.163-4.688h0.551v1.156
																	c0,1.003,0.797,1.802,1.799,1.802h4.856c1.002,0,1.813-0.799,1.813-1.802v-1.155h0.537c2.687,0,4.906,2.014,5.162,4.688
																	l0.354,3.678L12.404,26.111L12.404,26.111z M33.75,37.113c-1.687,0-3.055-1.367-3.055-3.056c0-1.689,1.368-3.057,3.055-3.057
																	c1.688,0,3.057,1.367,3.057,3.057C36.807,35.746,35.438,37.113,33.75,37.113z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">3</span>
												</div>
							                </div>
							            </div>
							        </div>
							    </div>
							</div>
							<!-- Property -->

							<!-- Property -->
							<div class="col-md-12 property-list-item property-item-data clearfix"
								data-lat="34.06244093"
								data-long="-117.6675707"
								data-title="26502 ACG_immobilier, Bobo Dioulasso, CA 92691, USA"
								data-thumb="assets/images/properties/property-1.jpg"
								data-pin="assets/images/svg/house-1.svg"
								data-price="90000fcfa"
								data-type="Maison"
								data-desc="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh…"
								data-link="single-property.html"
								data-id="49"


								>

							    <div class="property-list-content">


							        <a href="single-property.html" class="property-list-image" style="background-image: url(assets/images/properties/property-1.jpg);">

							            <span class="property-featured">
							                <i class="fa fa-bolt" aria-hidden="true"></i>
							            </span>

							            <span class="property-action-unit add-to-favorites ">
						                    <span class="add-to-favorites-list" data-toggle="tooltip" data-placement="top" data-original-title="Add to favorites">
						                        <i class="fa fa-heart-o" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                    <span class="remove-to-favorites-list" data-toggle="tooltip" data-placement="top" data-original-title="Remove from favorites">
						                        <i class="fa fa-heart" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                </span>

							            <span class="property-action-unit add-to-compare remove" data-id="48" data-action="remove">
							                <span class="add-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Add to compare">
							                    <i class="fa fa-exchange" aria-hidden="true"></i>
							                    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
							                </span>
							                <span class="remove-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Remove from compare">
							                    <i class="fa fa-exchange" aria-hidden="true"></i>
							                    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
							                </span>
							            </span>

							            <img src="assets/images/properties/placeholder-casaroyal-property-list-view-image.png">

							        </a>

							        <div class="property-list-item-holder">

							            <div class="property-grid-price">
							                <span class="price-prefix"></span>
							                <span class="property-price-holder"><span class="property-price-number">16000000 </span>fcfa</span>
							                <span class="price-prefix"></span>
							            </div>

							            <a href="single-property.html">
							            	<h4 class="property-list-title">26502 ACG_immobilier, Bobo Dioulasso, CA 92691, Bf</h4>
							            </a>

							            <div class="property-price">
							                <span class="status-label">
							                    <span class="property-type">Maison</span> / À Vendre - Bobo Dioulasso, CA
							                </span>
							            </div>

						                <div class="casaroyal-property-agent-name">
						                	<i class="fa fa-user-circle" aria-hidden="true"></i>
						                	<a href="single-agent.html">Louis Bertson</a>
						                </div>

							            <div class="casaroyal-property-listing-time">
							                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>il y'a 2 mois
							            </div>

							            <div class="property-meta">

							                <div class="property-meta-list">

							                    <div class="property-meta-item first-item">
							                    	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
														<g>
															<g>
																<path d="M501.533,450.097l-33.38-33.38c-6.521-6.521-17.087-6.521-23.609,0c-6.521,6.516-6.521,17.092,0,23.609l4.892,4.892
																	H129.349l4.892-4.892c6.521-6.516,6.521-17.092,0-23.609c-6.521-6.521-17.087-6.521-23.609,0l-33.38,33.38
																	c-3.275,3.269-4.903,7.73-4.903,11.816c0,4.174,1.714,8.633,4.903,11.816l33.38,33.38c6.522,6.522,17.086,6.522,23.609,0
																	c6.521-6.516,6.521-17.092,0-23.609l-4.892-4.892h320.087l-4.892,4.892c-6.521,6.516-6.521,17.092,0,23.609
																	c6.522,6.522,17.086,6.522,23.609,0l33.38-33.38c3.27-3.262,4.903-7.721,4.903-11.816
																	C506.436,457.629,504.724,453.28,501.533,450.097z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M77.241,349.935l-4.892,4.891V57l4.892,4.892c6.522,6.522,17.086,6.522,23.609,0c6.522-6.522,6.522-17.086,0-23.609
																	L67.458,4.892c-6.521-6.521-17.087-6.521-23.609,0L10.458,38.283c-6.522,6.522-6.522,17.086,0,23.609
																	c6.521,6.521,17.087,6.521,23.609,0L38.958,57v297.826l-4.892-4.892c-6.521-6.521-17.087-6.521-23.609,0
																	c-6.522,6.522-6.522,17.086,0,23.609l33.391,33.391c6.522,6.522,17.086,6.522,23.609,0l33.391-33.391
																	c6.522-6.521,6.522-17.086,0.001-23.608C94.328,343.414,83.762,343.414,77.241,349.935z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M422.958,133.565h83.478V16.696C506.436,7.473,498.957,0,489.74,0H261.566v133.565h83.478
																	c9.217,0,16.696,7.473,16.696,16.696c0,9.223-7.479,16.696-16.696,16.696h-83.478v50.087c0,9.223-7.479,16.696-16.696,16.696
																	s-16.696-7.473-16.696-16.696V0h-72.348c-9.217,0-16.696,7.473-16.696,16.696v345.043c0,9.223,7.479,16.696,16.696,16.696h72.348
																	v-83.478c0-9.223,7.479-16.696,16.696-16.696s16.696,7.473,16.696,16.696v83.478H489.74c9.217,0,16.696-7.473,16.696-16.696
																	V166.957h-83.478c-9.217,0-16.696-7.473-16.696-16.696S413.74,133.565,422.958,133.565z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">1400</span>
													<span class="property-meta-name">Sq Ft</span>
												</div>
												<div class="property-meta-item">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="910px" height="910px" viewBox="0 0 910 910" style="enable-background:new 0 0 910 910;" xml:space="preserve">
														<g>
															<g>
																<path d="M789.1,449.9H879V369c0-16.8-13.7-30.5-30.5-30.5H342.1c1.601,3.3,3.101,6.6,4.601,10c10.2,24.2,15.399,49.9,15.399,76.4
																	c0,8.399-0.5,16.8-1.6,25H789.1z"></path>
																<path d="M165.9,263.7c-3.4,0-6.7,0.1-10,0.3v185.8H267h58.1c1.301-8.2,1.9-16.5,1.9-25c0-31.8-9.2-61.399-25.1-86.3
																	C273.4,293.5,223.1,263.7,165.9,263.7z"></path>
																<path d="M30,731.5h60.9c16.6,0,30-13.4,30-30v-95.7h668.2v95.7c0,16.6,13.4,30,30,30H880c16.6,0,30-13.4,30-30V514.9
																	c0-16.601-13.4-30-30-30h-90.9H120.9V270.1v-61.6c0-16.6-13.4-30-30-30H30c-16.6,0-30,13.4-30,30v111.7v38.5V491v38.5v172
																	C0,718,13.4,731.5,30,731.5z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">3</span>
												</div>

												<div class="property-meta-item">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
														<g>
															<g>
																<path d="M484.66,461.309l-8.06-19.028c-17.218,15.087-38.093,26.095-61.107,31.495l14.787,19.245
																	c5.965,7.762,15.371,12.396,25.162,12.396c10.672,0,20.561-5.312,26.455-14.208C487.789,482.311,488.823,471.134,484.66,461.309z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M35.401,442.281l-8.06,19.028c-4.162,9.826-3.129,21.003,2.764,29.899c5.893,8.896,15.783,14.208,26.455,14.208
																	c9.79,0,19.195-4.634,25.163-12.397l14.786-19.244C73.494,468.376,52.618,457.368,35.401,442.281z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M183.109,60.263h-1.639c-4.049-30.259-30.015-53.679-61.364-53.679h-13.814c-34.148,0-61.931,27.782-61.931,61.931
																	v129.717h30.073V68.514c0-17.566,14.292-31.858,31.858-31.858h13.814c14.713,0,27.122,10.028,30.768,23.606h-2.429
																	c-23.922,0-43.384,19.462-43.384,43.384v25.366c0,8.042,6.319,14.59,14.26,14.997c0.259,0.013,0.514,0.039,0.776,0.039h91.359
																	c8.304,0,15.036-6.732,15.036-15.036v-25.365C226.493,79.725,207.031,60.263,183.109,60.263z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M16.881,316.254v19.082c0,61.821,50.294,112.116,112.115,112.116h254.009c61.82,0,112.115-50.294,112.115-112.116v-19.082
																	H16.881z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M490.37,242.697H21.63C9.703,242.698,0,252.402,0,264.329s9.703,21.63,21.63,21.63h468.74
																	c11.927,0,21.63-9.703,21.63-21.63S502.297,242.697,490.37,242.697z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">4</span>
												</div>

												<div class="property-meta-item property-meta-item-garage">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45.393px" height="45.393px" viewBox="0 0 45.393 45.393" style="enable-background:new 0 0 45.393 45.393;" xml:space="preserve">
														<g>
															<g>
																<path d="M43.518,12.709L25.178,0.728c-1.511-0.978-3.458-0.968-4.96,0.021L1.859,12.719c-1.14,0.751-1.455,2.284-0.705,3.424
																	c0.751,1.14,2.283,1.456,3.424,0.704L22.715,5.021L40.83,16.857c0.416,0.269,0.881,0.396,1.341,0.396
																	c0.812,0,1.604-0.397,2.077-1.127C44.99,14.98,44.662,13.452,43.518,12.709z"></path>
																<path d="M38.879,27.616c-0.151-0.865-0.903-1.505-1.78-1.505h-1.008l-0.383-3.987c-0.409-4.264-3.948-7.49-8.232-7.49H17.92
																	c-4.285,0-7.823,3.227-8.233,7.49l-0.382,3.987H8.296c-0.878,0-1.629,0.64-1.782,1.505l-1.5,8.504
																	c-0.186,1.054,0.112,2.139,0.8,2.957c0.662,0.788,1.637,1.258,2.657,1.293v1.412c0,1.999,1.602,3.61,3.603,3.61h1.138
																	c1.999,0,3.625-1.611,3.625-3.61v-1.389h11.732v1.386c0,2,1.613,3.613,3.612,3.613h1.139c1.999,0,3.614-1.613,3.614-3.613V40.37
																	c1.02-0.035,1.989-0.501,2.649-1.288c0.688-0.82,0.982-1.899,0.798-2.955L38.879,27.616z M11.642,37.113
																	c-1.687,0-3.055-1.367-3.055-3.056c0-1.689,1.368-3.057,3.055-3.057c1.688,0,3.057,1.367,3.057,3.057
																	C14.699,35.746,13.33,37.113,11.642,37.113z M12.404,26.111l0.353-3.678c0.257-2.674,2.476-4.688,5.163-4.688h0.551v1.156
																	c0,1.003,0.797,1.802,1.799,1.802h4.856c1.002,0,1.813-0.799,1.813-1.802v-1.155h0.537c2.687,0,4.906,2.014,5.162,4.688
																	l0.354,3.678L12.404,26.111L12.404,26.111z M33.75,37.113c-1.687,0-3.055-1.367-3.055-3.056c0-1.689,1.368-3.057,3.055-3.057
																	c1.688,0,3.057,1.367,3.057,3.057C36.807,35.746,35.438,37.113,33.75,37.113z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">2</span>
												</div>
							                </div>
							            </div>
							        </div>
							    </div>
							</div>
							<!-- Property -->

							<!-- Property -->
							<div class="col-md-12 property-list-item property-item-data clearfix"
								data-lat="34.0624409"
								data-long="-118.39353510000001"
								data-title="272 S ACG_immobilier, Manga, CA 90212, BF"
								data-thumb="assets/images/properties/property-3.jpg"
								data-pin="assets/images/svg/house-1.svg"
								data-price="22500000 fcfa"
								data-type="Maison"
								data-desc="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh…"
								data-link="single-property.html"
								data-id="49"


								>

							    <div class="property-list-content">


							        <a href="single-property.html" class="property-list-image" style="background-image: url(assets/images/properties/property-3.jpg);">

							            <span class="property-featured">
							                <i class="fa fa-bolt" aria-hidden="true"></i>
							            </span>

							            <span class="property-action-unit add-to-favorites remove">
						                    <span class="add-to-favorites-list" data-toggle="tooltip" data-placement="top" data-original-title="Add to favorites">
						                        <i class="fa fa-heart-o" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                    <span class="remove-to-favorites-list" data-toggle="tooltip" data-placement="top" data-original-title="Remove from favorites">
						                        <i class="fa fa-heart" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                </span>

							            <span class="property-action-unit add-to-compare" data-id="48" data-action="remove">
							                <span class="add-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Add to compare">
							                    <i class="fa fa-exchange" aria-hidden="true"></i>
							                    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
							                </span>
							                <span class="remove-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Remove from compare">
							                    <i class="fa fa-exchange" aria-hidden="true"></i>
							                    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
							                </span>
							            </span>

							            <img src="assets/images/properties/placeholder-casaroyal-property-list-view-image.png">

							        </a>

							        <div class="property-list-item-holder">

							            <div class="property-grid-price">
							                <span class="price-prefix"></span>
							                <span class="property-price-holder"><span class="property-price-number">22500000 </span> fcfa</span>
							                <span class="price-prefix"></span>
							            </div>

							            <a href="single-property.html">
							            	<h4 class="property-list-title">272 S ACG_immobilier, Banfora, CA 90212, BF</h4>
							            </a>

							            <div class="property-price">
							                <span class="status-label">
							                    <span class="property-type">Maison</span> / À Vendre - Banfora, CA
							                </span>
							            </div>

						                <div class="casaroyal-property-agent-name">
						                	<i class="fa fa-user-circle" aria-hidden="true"></i>
						                	<a href="single-agent.html">Koné Cheick</a>
						                </div>

							            <div class="casaroyal-property-listing-time">
							                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>il y'a 2 mois
							            </div>

							            <div class="property-meta">

							                <div class="property-meta-list">

							                    <div class="property-meta-item first-item">
							                    	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
														<g>
															<g>
																<path d="M501.533,450.097l-33.38-33.38c-6.521-6.521-17.087-6.521-23.609,0c-6.521,6.516-6.521,17.092,0,23.609l4.892,4.892
																	H129.349l4.892-4.892c6.521-6.516,6.521-17.092,0-23.609c-6.521-6.521-17.087-6.521-23.609,0l-33.38,33.38
																	c-3.275,3.269-4.903,7.73-4.903,11.816c0,4.174,1.714,8.633,4.903,11.816l33.38,33.38c6.522,6.522,17.086,6.522,23.609,0
																	c6.521-6.516,6.521-17.092,0-23.609l-4.892-4.892h320.087l-4.892,4.892c-6.521,6.516-6.521,17.092,0,23.609
																	c6.522,6.522,17.086,6.522,23.609,0l33.38-33.38c3.27-3.262,4.903-7.721,4.903-11.816
																	C506.436,457.629,504.724,453.28,501.533,450.097z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M77.241,349.935l-4.892,4.891V57l4.892,4.892c6.522,6.522,17.086,6.522,23.609,0c6.522-6.522,6.522-17.086,0-23.609
																	L67.458,4.892c-6.521-6.521-17.087-6.521-23.609,0L10.458,38.283c-6.522,6.522-6.522,17.086,0,23.609
																	c6.521,6.521,17.087,6.521,23.609,0L38.958,57v297.826l-4.892-4.892c-6.521-6.521-17.087-6.521-23.609,0
																	c-6.522,6.522-6.522,17.086,0,23.609l33.391,33.391c6.522,6.522,17.086,6.522,23.609,0l33.391-33.391
																	c6.522-6.521,6.522-17.086,0.001-23.608C94.328,343.414,83.762,343.414,77.241,349.935z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M422.958,133.565h83.478V16.696C506.436,7.473,498.957,0,489.74,0H261.566v133.565h83.478
																	c9.217,0,16.696,7.473,16.696,16.696c0,9.223-7.479,16.696-16.696,16.696h-83.478v50.087c0,9.223-7.479,16.696-16.696,16.696
																	s-16.696-7.473-16.696-16.696V0h-72.348c-9.217,0-16.696,7.473-16.696,16.696v345.043c0,9.223,7.479,16.696,16.696,16.696h72.348
																	v-83.478c0-9.223,7.479-16.696,16.696-16.696s16.696,7.473,16.696,16.696v83.478H489.74c9.217,0,16.696-7.473,16.696-16.696
																	V166.957h-83.478c-9.217,0-16.696-7.473-16.696-16.696S413.74,133.565,422.958,133.565z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">2400</span>
													<span class="property-meta-name">Sq Ft</span>
												</div>
												<div class="property-meta-item">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="910px" height="910px" viewBox="0 0 910 910" style="enable-background:new 0 0 910 910;" xml:space="preserve">
														<g>
															<g>
																<path d="M789.1,449.9H879V369c0-16.8-13.7-30.5-30.5-30.5H342.1c1.601,3.3,3.101,6.6,4.601,10c10.2,24.2,15.399,49.9,15.399,76.4
																	c0,8.399-0.5,16.8-1.6,25H789.1z"></path>
																<path d="M165.9,263.7c-3.4,0-6.7,0.1-10,0.3v185.8H267h58.1c1.301-8.2,1.9-16.5,1.9-25c0-31.8-9.2-61.399-25.1-86.3
																	C273.4,293.5,223.1,263.7,165.9,263.7z"></path>
																<path d="M30,731.5h60.9c16.6,0,30-13.4,30-30v-95.7h668.2v95.7c0,16.6,13.4,30,30,30H880c16.6,0,30-13.4,30-30V514.9
																	c0-16.601-13.4-30-30-30h-90.9H120.9V270.1v-61.6c0-16.6-13.4-30-30-30H30c-16.6,0-30,13.4-30,30v111.7v38.5V491v38.5v172
																	C0,718,13.4,731.5,30,731.5z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">2</span>
												</div>

												<div class="property-meta-item">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
														<g>
															<g>
																<path d="M484.66,461.309l-8.06-19.028c-17.218,15.087-38.093,26.095-61.107,31.495l14.787,19.245
																	c5.965,7.762,15.371,12.396,25.162,12.396c10.672,0,20.561-5.312,26.455-14.208C487.789,482.311,488.823,471.134,484.66,461.309z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M35.401,442.281l-8.06,19.028c-4.162,9.826-3.129,21.003,2.764,29.899c5.893,8.896,15.783,14.208,26.455,14.208
																	c9.79,0,19.195-4.634,25.163-12.397l14.786-19.244C73.494,468.376,52.618,457.368,35.401,442.281z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M183.109,60.263h-1.639c-4.049-30.259-30.015-53.679-61.364-53.679h-13.814c-34.148,0-61.931,27.782-61.931,61.931
																	v129.717h30.073V68.514c0-17.566,14.292-31.858,31.858-31.858h13.814c14.713,0,27.122,10.028,30.768,23.606h-2.429
																	c-23.922,0-43.384,19.462-43.384,43.384v25.366c0,8.042,6.319,14.59,14.26,14.997c0.259,0.013,0.514,0.039,0.776,0.039h91.359
																	c8.304,0,15.036-6.732,15.036-15.036v-25.365C226.493,79.725,207.031,60.263,183.109,60.263z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M16.881,316.254v19.082c0,61.821,50.294,112.116,112.115,112.116h254.009c61.82,0,112.115-50.294,112.115-112.116v-19.082
																	H16.881z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M490.37,242.697H21.63C9.703,242.698,0,252.402,0,264.329s9.703,21.63,21.63,21.63h468.74
																	c11.927,0,21.63-9.703,21.63-21.63S502.297,242.697,490.37,242.697z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">2</span>
												</div>

												<div class="property-meta-item property-meta-item-garage">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45.393px" height="45.393px" viewBox="0 0 45.393 45.393" style="enable-background:new 0 0 45.393 45.393;" xml:space="preserve">
														<g>
															<g>
																<path d="M43.518,12.709L25.178,0.728c-1.511-0.978-3.458-0.968-4.96,0.021L1.859,12.719c-1.14,0.751-1.455,2.284-0.705,3.424
																	c0.751,1.14,2.283,1.456,3.424,0.704L22.715,5.021L40.83,16.857c0.416,0.269,0.881,0.396,1.341,0.396
																	c0.812,0,1.604-0.397,2.077-1.127C44.99,14.98,44.662,13.452,43.518,12.709z"></path>
																<path d="M38.879,27.616c-0.151-0.865-0.903-1.505-1.78-1.505h-1.008l-0.383-3.987c-0.409-4.264-3.948-7.49-8.232-7.49H17.92
																	c-4.285,0-7.823,3.227-8.233,7.49l-0.382,3.987H8.296c-0.878,0-1.629,0.64-1.782,1.505l-1.5,8.504
																	c-0.186,1.054,0.112,2.139,0.8,2.957c0.662,0.788,1.637,1.258,2.657,1.293v1.412c0,1.999,1.602,3.61,3.603,3.61h1.138
																	c1.999,0,3.625-1.611,3.625-3.61v-1.389h11.732v1.386c0,2,1.613,3.613,3.612,3.613h1.139c1.999,0,3.614-1.613,3.614-3.613V40.37
																	c1.02-0.035,1.989-0.501,2.649-1.288c0.688-0.82,0.982-1.899,0.798-2.955L38.879,27.616z M11.642,37.113
																	c-1.687,0-3.055-1.367-3.055-3.056c0-1.689,1.368-3.057,3.055-3.057c1.688,0,3.057,1.367,3.057,3.057
																	C14.699,35.746,13.33,37.113,11.642,37.113z M12.404,26.111l0.353-3.678c0.257-2.674,2.476-4.688,5.163-4.688h0.551v1.156
																	c0,1.003,0.797,1.802,1.799,1.802h4.856c1.002,0,1.813-0.799,1.813-1.802v-1.155h0.537c2.687,0,4.906,2.014,5.162,4.688
																	l0.354,3.678L12.404,26.111L12.404,26.111z M33.75,37.113c-1.687,0-3.055-1.367-3.055-3.056c0-1.689,1.368-3.057,3.055-3.057
																	c1.688,0,3.057,1.367,3.057,3.057C36.807,35.746,35.438,37.113,33.75,37.113z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">3</span>
												</div>
							                </div>
							            </div>
							        </div>
							    </div>
							</div>
							<!-- Property -->

							<!-- Property -->
							<div class="col-md-12 property-list-item property-item-data clearfix"
								data-lat="34.046928"
								data-long="-118.182725"
								data-title="15 Apartements de Type B"
								data-thumb="assets/images/properties/property-4.jpg"
								data-pin="assets/images/svg/building.svg"
								data-price="1700000 fcfa"
								data-type="Tour Residentielle"
								data-desc="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh…"
								data-link="single-property.html"
								data-id="49"


								>

							    <div class="property-list-content">


							        <a href="single-property.html" class="property-list-image" style="background-image: url(assets/images/properties/property-4.jpg);">

							            <span class="property-featured">
							                <i class="fa fa-bolt" aria-hidden="true"></i>
							            </span>

							            <span class="property-action-unit add-to-favorites remove">
						                    <span class="add-to-favorites-list" data-toggle="tooltip" data-placement="top" data-original-title="Add to favorites">
						                        <i class="fa fa-heart-o" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                    <span class="remove-to-favorites-list" data-toggle="tooltip" data-placement="top" data-original-title="Remove from favorites">
						                        <i class="fa fa-heart" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                </span>

							            <span class="property-action-unit add-to-compare" data-id="48" data-action="remove">
							                <span class="add-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Add to compare">
							                    <i class="fa fa-exchange" aria-hidden="true"></i>
							                    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
							                </span>
							                <span class="remove-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Remove from compare">
							                    <i class="fa fa-exchange" aria-hidden="true"></i>
							                    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
							                </span>
							            </span>

							            <img src="assets/images/properties/placeholder-casaroyal-property-list-view-image.png">

							        </a>

							        <div class="property-list-item-holder">

							            <div class="property-grid-price">
							                <span class="price-prefix">De</span>
							                <span class="property-price-holder"><span class="property-price-number">1700000 fcfa</span></span>
							                <span class="price-prefix">Par Mois</span>
							            </div>

							            <a href="single-property.html">
							            	<h4 class="property-list-title">15 Apartements de Type B</h4>
							            </a>

							            <div class="property-price">
							                <span class="status-label">
							                    <span class="property-type">Tour Residentielle</span> / À Louer - Pô, CA
							                </span>
							            </div>

						                <div class="casaroyal-property-agent-name">
						                	<i class="fa fa-user-circle" aria-hidden="true"></i>
						                	<a href="single-agent.html">Alain Alain</a>
						                </div>

							            <div class="casaroyal-property-listing-time">
							                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>il y'a 2 mois
							            </div>

							            <div class="property-meta">

							                <div class="property-meta-list">

							                    <div class="property-meta-item first-item">
							                    	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
														<g>
															<g>
																<path d="M501.533,450.097l-33.38-33.38c-6.521-6.521-17.087-6.521-23.609,0c-6.521,6.516-6.521,17.092,0,23.609l4.892,4.892
																	H129.349l4.892-4.892c6.521-6.516,6.521-17.092,0-23.609c-6.521-6.521-17.087-6.521-23.609,0l-33.38,33.38
																	c-3.275,3.269-4.903,7.73-4.903,11.816c0,4.174,1.714,8.633,4.903,11.816l33.38,33.38c6.522,6.522,17.086,6.522,23.609,0
																	c6.521-6.516,6.521-17.092,0-23.609l-4.892-4.892h320.087l-4.892,4.892c-6.521,6.516-6.521,17.092,0,23.609
																	c6.522,6.522,17.086,6.522,23.609,0l33.38-33.38c3.27-3.262,4.903-7.721,4.903-11.816
																	C506.436,457.629,504.724,453.28,501.533,450.097z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M77.241,349.935l-4.892,4.891V57l4.892,4.892c6.522,6.522,17.086,6.522,23.609,0c6.522-6.522,6.522-17.086,0-23.609
																	L67.458,4.892c-6.521-6.521-17.087-6.521-23.609,0L10.458,38.283c-6.522,6.522-6.522,17.086,0,23.609
																	c6.521,6.521,17.087,6.521,23.609,0L38.958,57v297.826l-4.892-4.892c-6.521-6.521-17.087-6.521-23.609,0
																	c-6.522,6.522-6.522,17.086,0,23.609l33.391,33.391c6.522,6.522,17.086,6.522,23.609,0l33.391-33.391
																	c6.522-6.521,6.522-17.086,0.001-23.608C94.328,343.414,83.762,343.414,77.241,349.935z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M422.958,133.565h83.478V16.696C506.436,7.473,498.957,0,489.74,0H261.566v133.565h83.478
																	c9.217,0,16.696,7.473,16.696,16.696c0,9.223-7.479,16.696-16.696,16.696h-83.478v50.087c0,9.223-7.479,16.696-16.696,16.696
																	s-16.696-7.473-16.696-16.696V0h-72.348c-9.217,0-16.696,7.473-16.696,16.696v345.043c0,9.223,7.479,16.696,16.696,16.696h72.348
																	v-83.478c0-9.223,7.479-16.696,16.696-16.696s16.696,7.473,16.696,16.696v83.478H489.74c9.217,0,16.696-7.473,16.696-16.696
																	V166.957h-83.478c-9.217,0-16.696-7.473-16.696-16.696S413.74,133.565,422.958,133.565z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">1600</span>
													<span class="property-meta-name">Sq Ft</span>
												</div>
												<div class="property-meta-item">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="910px" height="910px" viewBox="0 0 910 910" style="enable-background:new 0 0 910 910;" xml:space="preserve">
														<g>
															<g>
																<path d="M789.1,449.9H879V369c0-16.8-13.7-30.5-30.5-30.5H342.1c1.601,3.3,3.101,6.6,4.601,10c10.2,24.2,15.399,49.9,15.399,76.4
																	c0,8.399-0.5,16.8-1.6,25H789.1z"></path>
																<path d="M165.9,263.7c-3.4,0-6.7,0.1-10,0.3v185.8H267h58.1c1.301-8.2,1.9-16.5,1.9-25c0-31.8-9.2-61.399-25.1-86.3
																	C273.4,293.5,223.1,263.7,165.9,263.7z"></path>
																<path d="M30,731.5h60.9c16.6,0,30-13.4,30-30v-95.7h668.2v95.7c0,16.6,13.4,30,30,30H880c16.6,0,30-13.4,30-30V514.9
																	c0-16.601-13.4-30-30-30h-90.9H120.9V270.1v-61.6c0-16.6-13.4-30-30-30H30c-16.6,0-30,13.4-30,30v111.7v38.5V491v38.5v172
																	C0,718,13.4,731.5,30,731.5z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">2</span>
												</div>

												<div class="property-meta-item">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
														<g>
															<g>
																<path d="M484.66,461.309l-8.06-19.028c-17.218,15.087-38.093,26.095-61.107,31.495l14.787,19.245
																	c5.965,7.762,15.371,12.396,25.162,12.396c10.672,0,20.561-5.312,26.455-14.208C487.789,482.311,488.823,471.134,484.66,461.309z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M35.401,442.281l-8.06,19.028c-4.162,9.826-3.129,21.003,2.764,29.899c5.893,8.896,15.783,14.208,26.455,14.208
																	c9.79,0,19.195-4.634,25.163-12.397l14.786-19.244C73.494,468.376,52.618,457.368,35.401,442.281z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M183.109,60.263h-1.639c-4.049-30.259-30.015-53.679-61.364-53.679h-13.814c-34.148,0-61.931,27.782-61.931,61.931
																	v129.717h30.073V68.514c0-17.566,14.292-31.858,31.858-31.858h13.814c14.713,0,27.122,10.028,30.768,23.606h-2.429
																	c-23.922,0-43.384,19.462-43.384,43.384v25.366c0,8.042,6.319,14.59,14.26,14.997c0.259,0.013,0.514,0.039,0.776,0.039h91.359
																	c8.304,0,15.036-6.732,15.036-15.036v-25.365C226.493,79.725,207.031,60.263,183.109,60.263z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M16.881,316.254v19.082c0,61.821,50.294,112.116,112.115,112.116h254.009c61.82,0,112.115-50.294,112.115-112.116v-19.082
																	H16.881z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M490.37,242.697H21.63C9.703,242.698,0,252.402,0,264.329s9.703,21.63,21.63,21.63h468.74
																	c11.927,0,21.63-9.703,21.63-21.63S502.297,242.697,490.37,242.697z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">1</span>
												</div>

												<div class="property-meta-item property-meta-item-garage">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45.393px" height="45.393px" viewBox="0 0 45.393 45.393" style="enable-background:new 0 0 45.393 45.393;" xml:space="preserve">
														<g>
															<g>
																<path d="M43.518,12.709L25.178,0.728c-1.511-0.978-3.458-0.968-4.96,0.021L1.859,12.719c-1.14,0.751-1.455,2.284-0.705,3.424
																	c0.751,1.14,2.283,1.456,3.424,0.704L22.715,5.021L40.83,16.857c0.416,0.269,0.881,0.396,1.341,0.396
																	c0.812,0,1.604-0.397,2.077-1.127C44.99,14.98,44.662,13.452,43.518,12.709z"></path>
																<path d="M38.879,27.616c-0.151-0.865-0.903-1.505-1.78-1.505h-1.008l-0.383-3.987c-0.409-4.264-3.948-7.49-8.232-7.49H17.92
																	c-4.285,0-7.823,3.227-8.233,7.49l-0.382,3.987H8.296c-0.878,0-1.629,0.64-1.782,1.505l-1.5,8.504
																	c-0.186,1.054,0.112,2.139,0.8,2.957c0.662,0.788,1.637,1.258,2.657,1.293v1.412c0,1.999,1.602,3.61,3.603,3.61h1.138
																	c1.999,0,3.625-1.611,3.625-3.61v-1.389h11.732v1.386c0,2,1.613,3.613,3.612,3.613h1.139c1.999,0,3.614-1.613,3.614-3.613V40.37
																	c1.02-0.035,1.989-0.501,2.649-1.288c0.688-0.82,0.982-1.899,0.798-2.955L38.879,27.616z M11.642,37.113
																	c-1.687,0-3.055-1.367-3.055-3.056c0-1.689,1.368-3.057,3.055-3.057c1.688,0,3.057,1.367,3.057,3.057
																	C14.699,35.746,13.33,37.113,11.642,37.113z M12.404,26.111l0.353-3.678c0.257-2.674,2.476-4.688,5.163-4.688h0.551v1.156
																	c0,1.003,0.797,1.802,1.799,1.802h4.856c1.002,0,1.813-0.799,1.813-1.802v-1.155h0.537c2.687,0,4.906,2.014,5.162,4.688
																	l0.354,3.678L12.404,26.111L12.404,26.111z M33.75,37.113c-1.687,0-3.055-1.367-3.055-3.056c0-1.689,1.368-3.057,3.055-3.057
																	c1.688,0,3.057,1.367,3.057,3.057C36.807,35.746,35.438,37.113,33.75,37.113z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">1</span>
												</div>
							                </div>
							            </div>
							        </div>
							    </div>
							</div>
							<!-- Property -->

							<!-- Property -->
							<div class="col-md-12 property-list-item property-item-data clearfix"
								data-lat="34.046928"
								data-long="-118.182725"
								data-title="14 Apartements de Type A"
								data-thumb="assets/images/properties/property-5.jpg"
								data-pin="assets/images/svg/house-1.svg"
								data-price="31000000fcfa"
								data-type="Tour Residentielle"
								data-desc="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh…"
								data-link="single-post.html"
								data-id="49"


								>

							    <div class="property-list-content">


							        <a href="single-property.html" class="property-list-image" style="background-image: url(assets/images/properties/property-5.jpg);">

							            <span class="property-featured">
							                <i class="fa fa-bolt" aria-hidden="true"></i>
							            </span>

							            <span class="property-action-unit add-to-favorites">
						                    <span class="add-to-favorites-list" data-toggle="tooltip" data-placement="top" data-original-title="Add to favorites">
						                        <i class="fa fa-heart-o" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                    <span class="remove-to-favorites-list" data-toggle="tooltip" data-placement="top" data-original-title="Remove from favorites">
						                        <i class="fa fa-heart" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                </span>

							            <span class="property-action-unit add-to-compare" data-id="48" data-action="remove">
							                <span class="add-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Add to compare">
							                    <i class="fa fa-exchange" aria-hidden="true"></i>
							                    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
							                </span>
							                <span class="remove-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Remove from compare">
							                    <i class="fa fa-exchange" aria-hidden="true"></i>
							                    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
							                </span>
							            </span>

							            <img src="assets/images/properties/placeholder-casaroyal-property-list-view-image.png">

							        </a>

							        <div class="property-list-item-holder">

							            <div class="property-grid-price">
							                <span class="price-prefix"></span>
							                <span class="property-price-holder"><span class="property-price-number">31000000 fcfa</span></span>
							                <span class="price-prefix"></span>
							            </div>

							            <a href="single-property.html">
							            	<h4 class="property-list-title">14 Apartements de Type A</h4>
							            </a>

							            <div class="property-price">
							                <span class="status-label">
							                    <span class="property-type">Tour Residentielle</span> / À Vendre - Kaya, CA
							                </span>
							            </div>

						                <div class="casaroyal-property-agent-name">
						                	<i class="fa fa-user-circle" aria-hidden="true"></i>
						                	<a href="single-agent.html">Alain Alain</a>
						                </div>

							            <div class="casaroyal-property-listing-time">
							                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>il y'a 2 mois
							            </div>

							            <div class="property-meta">

							                <div class="property-meta-list">

							                    <div class="property-meta-item first-item">
							                    	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
														<g>
															<g>
																<path d="M501.533,450.097l-33.38-33.38c-6.521-6.521-17.087-6.521-23.609,0c-6.521,6.516-6.521,17.092,0,23.609l4.892,4.892
																	H129.349l4.892-4.892c6.521-6.516,6.521-17.092,0-23.609c-6.521-6.521-17.087-6.521-23.609,0l-33.38,33.38
																	c-3.275,3.269-4.903,7.73-4.903,11.816c0,4.174,1.714,8.633,4.903,11.816l33.38,33.38c6.522,6.522,17.086,6.522,23.609,0
																	c6.521-6.516,6.521-17.092,0-23.609l-4.892-4.892h320.087l-4.892,4.892c-6.521,6.516-6.521,17.092,0,23.609
																	c6.522,6.522,17.086,6.522,23.609,0l33.38-33.38c3.27-3.262,4.903-7.721,4.903-11.816
																	C506.436,457.629,504.724,453.28,501.533,450.097z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M77.241,349.935l-4.892,4.891V57l4.892,4.892c6.522,6.522,17.086,6.522,23.609,0c6.522-6.522,6.522-17.086,0-23.609
																	L67.458,4.892c-6.521-6.521-17.087-6.521-23.609,0L10.458,38.283c-6.522,6.522-6.522,17.086,0,23.609
																	c6.521,6.521,17.087,6.521,23.609,0L38.958,57v297.826l-4.892-4.892c-6.521-6.521-17.087-6.521-23.609,0
																	c-6.522,6.522-6.522,17.086,0,23.609l33.391,33.391c6.522,6.522,17.086,6.522,23.609,0l33.391-33.391
																	c6.522-6.521,6.522-17.086,0.001-23.608C94.328,343.414,83.762,343.414,77.241,349.935z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M422.958,133.565h83.478V16.696C506.436,7.473,498.957,0,489.74,0H261.566v133.565h83.478
																	c9.217,0,16.696,7.473,16.696,16.696c0,9.223-7.479,16.696-16.696,16.696h-83.478v50.087c0,9.223-7.479,16.696-16.696,16.696
																	s-16.696-7.473-16.696-16.696V0h-72.348c-9.217,0-16.696,7.473-16.696,16.696v345.043c0,9.223,7.479,16.696,16.696,16.696h72.348
																	v-83.478c0-9.223,7.479-16.696,16.696-16.696s16.696,7.473,16.696,16.696v83.478H489.74c9.217,0,16.696-7.473,16.696-16.696
																	V166.957h-83.478c-9.217,0-16.696-7.473-16.696-16.696S413.74,133.565,422.958,133.565z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">1600</span>
													<span class="property-meta-name">Sq Ft</span>
												</div>
												<div class="property-meta-item">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="910px" height="910px" viewBox="0 0 910 910" style="enable-background:new 0 0 910 910;" xml:space="preserve">
														<g>
															<g>
																<path d="M789.1,449.9H879V369c0-16.8-13.7-30.5-30.5-30.5H342.1c1.601,3.3,3.101,6.6,4.601,10c10.2,24.2,15.399,49.9,15.399,76.4
																	c0,8.399-0.5,16.8-1.6,25H789.1z"></path>
																<path d="M165.9,263.7c-3.4,0-6.7,0.1-10,0.3v185.8H267h58.1c1.301-8.2,1.9-16.5,1.9-25c0-31.8-9.2-61.399-25.1-86.3
																	C273.4,293.5,223.1,263.7,165.9,263.7z"></path>
																<path d="M30,731.5h60.9c16.6,0,30-13.4,30-30v-95.7h668.2v95.7c0,16.6,13.4,30,30,30H880c16.6,0,30-13.4,30-30V514.9
																	c0-16.601-13.4-30-30-30h-90.9H120.9V270.1v-61.6c0-16.6-13.4-30-30-30H30c-16.6,0-30,13.4-30,30v111.7v38.5V491v38.5v172
																	C0,718,13.4,731.5,30,731.5z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">2</span>
												</div>

												<div class="property-meta-item">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
														<g>
															<g>
																<path d="M484.66,461.309l-8.06-19.028c-17.218,15.087-38.093,26.095-61.107,31.495l14.787,19.245
																	c5.965,7.762,15.371,12.396,25.162,12.396c10.672,0,20.561-5.312,26.455-14.208C487.789,482.311,488.823,471.134,484.66,461.309z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M35.401,442.281l-8.06,19.028c-4.162,9.826-3.129,21.003,2.764,29.899c5.893,8.896,15.783,14.208,26.455,14.208
																	c9.79,0,19.195-4.634,25.163-12.397l14.786-19.244C73.494,468.376,52.618,457.368,35.401,442.281z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M183.109,60.263h-1.639c-4.049-30.259-30.015-53.679-61.364-53.679h-13.814c-34.148,0-61.931,27.782-61.931,61.931
																	v129.717h30.073V68.514c0-17.566,14.292-31.858,31.858-31.858h13.814c14.713,0,27.122,10.028,30.768,23.606h-2.429
																	c-23.922,0-43.384,19.462-43.384,43.384v25.366c0,8.042,6.319,14.59,14.26,14.997c0.259,0.013,0.514,0.039,0.776,0.039h91.359
																	c8.304,0,15.036-6.732,15.036-15.036v-25.365C226.493,79.725,207.031,60.263,183.109,60.263z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M16.881,316.254v19.082c0,61.821,50.294,112.116,112.115,112.116h254.009c61.82,0,112.115-50.294,112.115-112.116v-19.082
																	H16.881z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M490.37,242.697H21.63C9.703,242.698,0,252.402,0,264.329s9.703,21.63,21.63,21.63h468.74
																	c11.927,0,21.63-9.703,21.63-21.63S502.297,242.697,490.37,242.697z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">1</span>
												</div>

												<div class="property-meta-item property-meta-item-garage">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45.393px" height="45.393px" viewBox="0 0 45.393 45.393" style="enable-background:new 0 0 45.393 45.393;" xml:space="preserve">
														<g>
															<g>
																<path d="M43.518,12.709L25.178,0.728c-1.511-0.978-3.458-0.968-4.96,0.021L1.859,12.719c-1.14,0.751-1.455,2.284-0.705,3.424
																	c0.751,1.14,2.283,1.456,3.424,0.704L22.715,5.021L40.83,16.857c0.416,0.269,0.881,0.396,1.341,0.396
																	c0.812,0,1.604-0.397,2.077-1.127C44.99,14.98,44.662,13.452,43.518,12.709z"></path>
																<path d="M38.879,27.616c-0.151-0.865-0.903-1.505-1.78-1.505h-1.008l-0.383-3.987c-0.409-4.264-3.948-7.49-8.232-7.49H17.92
																	c-4.285,0-7.823,3.227-8.233,7.49l-0.382,3.987H8.296c-0.878,0-1.629,0.64-1.782,1.505l-1.5,8.504
																	c-0.186,1.054,0.112,2.139,0.8,2.957c0.662,0.788,1.637,1.258,2.657,1.293v1.412c0,1.999,1.602,3.61,3.603,3.61h1.138
																	c1.999,0,3.625-1.611,3.625-3.61v-1.389h11.732v1.386c0,2,1.613,3.613,3.612,3.613h1.139c1.999,0,3.614-1.613,3.614-3.613V40.37
																	c1.02-0.035,1.989-0.501,2.649-1.288c0.688-0.82,0.982-1.899,0.798-2.955L38.879,27.616z M11.642,37.113
																	c-1.687,0-3.055-1.367-3.055-3.056c0-1.689,1.368-3.057,3.055-3.057c1.688,0,3.057,1.367,3.057,3.057
																	C14.699,35.746,13.33,37.113,11.642,37.113z M12.404,26.111l0.353-3.678c0.257-2.674,2.476-4.688,5.163-4.688h0.551v1.156
																	c0,1.003,0.797,1.802,1.799,1.802h4.856c1.002,0,1.813-0.799,1.813-1.802v-1.155h0.537c2.687,0,4.906,2.014,5.162,4.688
																	l0.354,3.678L12.404,26.111L12.404,26.111z M33.75,37.113c-1.687,0-3.055-1.367-3.055-3.056c0-1.689,1.368-3.057,3.055-3.057
																	c1.688,0,3.057,1.367,3.057,3.057C36.807,35.746,35.438,37.113,33.75,37.113z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">1</span>
												</div>
							                </div>
							            </div>
							        </div>
							    </div>
							</div>
							<!-- Property -->

							<!-- Property -->
							<div class="col-md-12 property-list-item property-item-data clearfix"
								data-lat="34.162137"
								data-long="-118.13202000000001"
								data-title="Maison de vaccaces modernes à la campagne"
								data-thumb="assets/images/properties/property-6.jpg"
								data-pin="assets/images/svg/house-1.svg"
								data-price="1300000 fcfa"
								data-type="Maison de vaccances"
								data-desc="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh…"
								data-link="single-property.html"
								data-id="49"


								>

							    <div class="property-list-content">


							        <a href="single-property.html" class="property-list-image" style="background-image: url(assets/images/properties/property-6.jpg);">

							            <span class="property-featured">
							                <i class="fa fa-bolt" aria-hidden="true"></i>
							            </span>

							            <span class="property-action-unit add-to-favorites">
						                    <span class="add-to-favorites-list" data-toggle="tooltip" data-placement="top" data-original-title="Add to favorites">
						                        <i class="fa fa-heart-o" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                    <span class="remove-to-favorites-list" data-toggle="tooltip" data-placement="top" data-original-title="Remove from favorites">
						                        <i class="fa fa-heart" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                </span>

							            <span class="property-action-unit add-to-compare remove" data-id="48" data-action="remove">
							                <span class="add-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Add to compare">
							                    <i class="fa fa-exchange" aria-hidden="true"></i>
							                    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
							                </span>
							                <span class="remove-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Remove from compare">
							                    <i class="fa fa-exchange" aria-hidden="true"></i>
							                    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
							                </span>
							            </span>

							            <img src="assets/images/properties/placeholder-casaroyal-property-list-view-image.png">

							        </a>

							        <div class="property-list-item-holder">

							            <div class="property-grid-price">
							                <span class="price-prefix">De</span>
							                <span class="property-price-holder"><span class="property-price-number">130000 fcfa</span></span>
							                <span class="price-prefix">Par Moish</span>
							            </div>

							            <a href="single-property.html">
							            	<h4 class="property-list-title">Maison de vaccances modernes en campagne</h4>
							            </a>

							            <div class="property-price">
							                <span class="status-label">
							                    <span class="property-type">Maison de vaccances</span> / À Louer - Koudougou, CA
							                </span>
							            </div>

						                <div class="casaroyal-property-agent-name">
						                	<i class="fa fa-user-circle" aria-hidden="true"></i>
						                	<a href="single-agent.html">Louis Bertson</a>
						                </div>

							            <div class="casaroyal-property-listing-time">
							                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>il y'a 2 mois
							            </div>

							            <div class="property-meta">

							                <div class="property-meta-list">

							                    <div class="property-meta-item first-item">
							                    	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
														<g>
															<g>
																<path d="M501.533,450.097l-33.38-33.38c-6.521-6.521-17.087-6.521-23.609,0c-6.521,6.516-6.521,17.092,0,23.609l4.892,4.892
																	H129.349l4.892-4.892c6.521-6.516,6.521-17.092,0-23.609c-6.521-6.521-17.087-6.521-23.609,0l-33.38,33.38
																	c-3.275,3.269-4.903,7.73-4.903,11.816c0,4.174,1.714,8.633,4.903,11.816l33.38,33.38c6.522,6.522,17.086,6.522,23.609,0
																	c6.521-6.516,6.521-17.092,0-23.609l-4.892-4.892h320.087l-4.892,4.892c-6.521,6.516-6.521,17.092,0,23.609
																	c6.522,6.522,17.086,6.522,23.609,0l33.38-33.38c3.27-3.262,4.903-7.721,4.903-11.816
																	C506.436,457.629,504.724,453.28,501.533,450.097z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M77.241,349.935l-4.892,4.891V57l4.892,4.892c6.522,6.522,17.086,6.522,23.609,0c6.522-6.522,6.522-17.086,0-23.609
																	L67.458,4.892c-6.521-6.521-17.087-6.521-23.609,0L10.458,38.283c-6.522,6.522-6.522,17.086,0,23.609
																	c6.521,6.521,17.087,6.521,23.609,0L38.958,57v297.826l-4.892-4.892c-6.521-6.521-17.087-6.521-23.609,0
																	c-6.522,6.522-6.522,17.086,0,23.609l33.391,33.391c6.522,6.522,17.086,6.522,23.609,0l33.391-33.391
																	c6.522-6.521,6.522-17.086,0.001-23.608C94.328,343.414,83.762,343.414,77.241,349.935z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M422.958,133.565h83.478V16.696C506.436,7.473,498.957,0,489.74,0H261.566v133.565h83.478
																	c9.217,0,16.696,7.473,16.696,16.696c0,9.223-7.479,16.696-16.696,16.696h-83.478v50.087c0,9.223-7.479,16.696-16.696,16.696
																	s-16.696-7.473-16.696-16.696V0h-72.348c-9.217,0-16.696,7.473-16.696,16.696v345.043c0,9.223,7.479,16.696,16.696,16.696h72.348
																	v-83.478c0-9.223,7.479-16.696,16.696-16.696s16.696,7.473,16.696,16.696v83.478H489.74c9.217,0,16.696-7.473,16.696-16.696
																	V166.957h-83.478c-9.217,0-16.696-7.473-16.696-16.696S413.74,133.565,422.958,133.565z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">1300</span>
													<span class="property-meta-name">Sq Ft</span>
												</div>
												<div class="property-meta-item">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="910px" height="910px" viewBox="0 0 910 910" style="enable-background:new 0 0 910 910;" xml:space="preserve">
														<g>
															<g>
																<path d="M789.1,449.9H879V369c0-16.8-13.7-30.5-30.5-30.5H342.1c1.601,3.3,3.101,6.6,4.601,10c10.2,24.2,15.399,49.9,15.399,76.4
																	c0,8.399-0.5,16.8-1.6,25H789.1z"></path>
																<path d="M165.9,263.7c-3.4,0-6.7,0.1-10,0.3v185.8H267h58.1c1.301-8.2,1.9-16.5,1.9-25c0-31.8-9.2-61.399-25.1-86.3
																	C273.4,293.5,223.1,263.7,165.9,263.7z"></path>
																<path d="M30,731.5h60.9c16.6,0,30-13.4,30-30v-95.7h668.2v95.7c0,16.6,13.4,30,30,30H880c16.6,0,30-13.4,30-30V514.9
																	c0-16.601-13.4-30-30-30h-90.9H120.9V270.1v-61.6c0-16.6-13.4-30-30-30H30c-16.6,0-30,13.4-30,30v111.7v38.5V491v38.5v172
																	C0,718,13.4,731.5,30,731.5z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">2</span>
												</div>

												<div class="property-meta-item">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
														<g>
															<g>
																<path d="M484.66,461.309l-8.06-19.028c-17.218,15.087-38.093,26.095-61.107,31.495l14.787,19.245
																	c5.965,7.762,15.371,12.396,25.162,12.396c10.672,0,20.561-5.312,26.455-14.208C487.789,482.311,488.823,471.134,484.66,461.309z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M35.401,442.281l-8.06,19.028c-4.162,9.826-3.129,21.003,2.764,29.899c5.893,8.896,15.783,14.208,26.455,14.208
																	c9.79,0,19.195-4.634,25.163-12.397l14.786-19.244C73.494,468.376,52.618,457.368,35.401,442.281z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M183.109,60.263h-1.639c-4.049-30.259-30.015-53.679-61.364-53.679h-13.814c-34.148,0-61.931,27.782-61.931,61.931
																	v129.717h30.073V68.514c0-17.566,14.292-31.858,31.858-31.858h13.814c14.713,0,27.122,10.028,30.768,23.606h-2.429
																	c-23.922,0-43.384,19.462-43.384,43.384v25.366c0,8.042,6.319,14.59,14.26,14.997c0.259,0.013,0.514,0.039,0.776,0.039h91.359
																	c8.304,0,15.036-6.732,15.036-15.036v-25.365C226.493,79.725,207.031,60.263,183.109,60.263z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M16.881,316.254v19.082c0,61.821,50.294,112.116,112.115,112.116h254.009c61.82,0,112.115-50.294,112.115-112.116v-19.082
																	H16.881z"></path>
															</g>
														</g>
														<g>
															<g>
																<path d="M490.37,242.697H21.63C9.703,242.698,0,252.402,0,264.329s9.703,21.63,21.63,21.63h468.74
																	c11.927,0,21.63-9.703,21.63-21.63S502.297,242.697,490.37,242.697z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">3</span>
												</div>

												<div class="property-meta-item property-meta-item-garage">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45.393px" height="45.393px" viewBox="0 0 45.393 45.393" style="enable-background:new 0 0 45.393 45.393;" xml:space="preserve">
														<g>
															<g>
																<path d="M43.518,12.709L25.178,0.728c-1.511-0.978-3.458-0.968-4.96,0.021L1.859,12.719c-1.14,0.751-1.455,2.284-0.705,3.424
																	c0.751,1.14,2.283,1.456,3.424,0.704L22.715,5.021L40.83,16.857c0.416,0.269,0.881,0.396,1.341,0.396
																	c0.812,0,1.604-0.397,2.077-1.127C44.99,14.98,44.662,13.452,43.518,12.709z"></path>
																<path d="M38.879,27.616c-0.151-0.865-0.903-1.505-1.78-1.505h-1.008l-0.383-3.987c-0.409-4.264-3.948-7.49-8.232-7.49H17.92
																	c-4.285,0-7.823,3.227-8.233,7.49l-0.382,3.987H8.296c-0.878,0-1.629,0.64-1.782,1.505l-1.5,8.504
																	c-0.186,1.054,0.112,2.139,0.8,2.957c0.662,0.788,1.637,1.258,2.657,1.293v1.412c0,1.999,1.602,3.61,3.603,3.61h1.138
																	c1.999,0,3.625-1.611,3.625-3.61v-1.389h11.732v1.386c0,2,1.613,3.613,3.612,3.613h1.139c1.999,0,3.614-1.613,3.614-3.613V40.37
																	c1.02-0.035,1.989-0.501,2.649-1.288c0.688-0.82,0.982-1.899,0.798-2.955L38.879,27.616z M11.642,37.113
																	c-1.687,0-3.055-1.367-3.055-3.056c0-1.689,1.368-3.057,3.055-3.057c1.688,0,3.057,1.367,3.057,3.057
																	C14.699,35.746,13.33,37.113,11.642,37.113z M12.404,26.111l0.353-3.678c0.257-2.674,2.476-4.688,5.163-4.688h0.551v1.156
																	c0,1.003,0.797,1.802,1.799,1.802h4.856c1.002,0,1.813-0.799,1.813-1.802v-1.155h0.537c2.687,0,4.906,2.014,5.162,4.688
																	l0.354,3.678L12.404,26.111L12.404,26.111z M33.75,37.113c-1.687,0-3.055-1.367-3.055-3.056c0-1.689,1.368-3.057,3.055-3.057
																	c1.688,0,3.057,1.367,3.057,3.057C36.807,35.746,35.438,37.113,33.75,37.113z"></path>
															</g>
														</g>
													</svg>
													<span class="property-meta-number">3</span>
												</div>
							                </div>
							            </div>
							        </div>
							    </div>
							</div>
							<!-- Property -->

						</div>
						<!-- Properties Grid -->

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
