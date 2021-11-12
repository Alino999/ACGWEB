@extends('layouts.layout')
@section('content')

	<body class="home">

		<!-- Header -->

    	<!-- Header -->

		<!-- Slider Section -->
		<div class="casaroyal-property-asf-wrapper">

			<div class="casaroyal-page-title-image-background"></div>

			<div class="container">

				<div class="casaroyal-property-asf">

	    			<h2 class="title search-heading text-white">Laissez-nous vous guider à la maison</h2>
	    			<p class="search-heading-subtitle text-grey">Trouvez la maison de vos rêves</p>

	            	<div class="advance-search as-form-wrap">

	            		<form class="row advance-search-form clearfix minimal-search-form minimal-search-form-casaroyal-style" action="properties.html" method="get">

			        		<div class="col-md-5">

				    			<div class="row">

						        	<div class="af-estate-search-field col-md-7">

						            	<span class="selectwrap" data-label="Type">

						                	<select name="type" id="select-property-type" class="search-select">
						                    	<option value="any" selected="selected">Sélectionner le genre</option>
						                    	<option value="commercial"> Commercial</option>
						                    	<option value="office">-  Bureau</option>
						                    	<option value="shop">-  Boutique</option>
						                    	<option value="condo"> Copropriété</option>
						                    	<option value="residential"> Résidentiel</option>
						                    	<option value="apartment">-  Apartement</option>
						                    	<option value="house">-  Maison</option>
						                    	<option value="residential-tower">-  Tour Résidentielle</option>
						                    	<option value="summer-house">-  Maison des vaccances</option>
						                    </select>

					                   	</span>

						        	</div>

						        	<div class="af-estate-search-field col-md-5">

						            	<span class="selectwrap" data-label="Location">
						                	<select name="location" id="location" class="search-select">
						                    	<option value="any" selected="selected">Selectionner </option>
						                    	<option value="beverly-hills"> Ouaga</option>
						                    	<option value="los-angeles"> Bobo </option>
						                    	<option value="mission-viejo"> Manga</option>
						                    	<option value="newport-beach"> Pô</option>
						                    	<option value="pasadena"> Banfora</option>
						                    	<option value="santa-monica"> Kaya</option>
						                    </select>
						                </span>

						        	</div>

					       		</div>

				      		</div>

				      		<div class="col-md-7">

				    			<div class="row">

						        	<div class="af-estate-search-field col-lg-8 col-md-7">
						            	<input type="text" name="keyword" class="casaroyal-search-keyword" placeholder="Rechercher des propriétés, des banlieues ou des mots-clés…" autocomplete="off">
						            	<ul class="casaroyal-search-locations-list">
						            		<li>
						            			<a href="#"><i class="fa fa-align-justify" aria-hidden="true"></i>Toutes les Propriétés</a>
						            		</li>
						            		<li>
						            			<a href="#"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>À Ouagadougou <span class="listings_count">1</span></a>
						            		</li>
						            		<li>
						            			<a href="#"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>À Bobo Dioulasso <span class="listings_count">3</span></a>
						            		</li>
						            		<li>
						            			<a href="#"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>À Manga <span class="listings_count">1</span></a>
						            		</li>
						            		<li>
						            			<a href="#"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>À Pô <span class="listings_count">1</span></a>
						            		</li>
						            		<li>
						            			<a href="#"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>À Banfora <span class="listings_count">1</span></a>
						            		</li>
						            		<li>
						            			<a href="#"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>À Kaya <span class="listings_count">1</span></a>
						            		</li>
						            	</ul>
						        	</div>

						        	<div class="af-estate-search-field col-lg-4 col-md-5">
						            	<input id="find-properties" type="submit" value="Rechercher " class="af-estate-search-btn">
						        	</div>

						    	</div>

						    </div>

			       		</form>

			       	</div>

		       	</div>

		   	</div>

		</div>
		<!-- Search Section -->

		<!-- Featured Section -->
		<div class="casaroyal-featured-properties-section">
			<div class="container">

				<div class="casaroyal-entry-title-wrapper">
					<div class="casaroyal-entry-title casaroyal-entry-title-align-center">
				     	<h5>AFRIC CONSULTING GROUP IMMOBILIER</h5>
				     	<h3><span>Mis en exergue</span> Propriétés</h3>
				     </div>
			    </div>

			    <div class="casaroyal-inline-block ">

					<div class="properties-list-wrapper row property-grid-view clearfix masonry-container">

						<!-- Property -->
						<div class="col-lg-4 col-md-6 property-grid-item property-item-data clearfix"
							data-lat="33.6262516"
							data-long="-117.8465223"
							data-title="2710 ACG_immobilier, Ouagadougou, CA 92660, BF"
							data-thumb="assets/images/properties/property-2.jpg"
							data-pin="assets/images/svg/house-1.svg"
							data-price="900 fcfa"
							data-type="Maison"
							data-desc="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh…"
							data-link="single-property.html"
							data-id="49"


							>

						    <div class="property-grid-card">

						        <div class="property-grid-card-a">

						            <div class="property-grid-image">

						                <a href="single-property.html" class="property-link-over-image" style="background-image: url(assets/images/properties/property-2.jpg);"></a>

						                <span class="property-status-label">
						                	<span class="property-type">Maison</span>
						                    <span class="property-status">A louer</span>
						                </span>

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

						                <span class="property-action-unit add-to-compare " data-id="49" data-action="add">
						                    <span class="add-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Add to compare">
						                        <i class="fa fa-exchange" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                    <span class="remove-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Remove from compare">
						                        <i class="fa fa-exchange" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                </span>

						            </div>

						            <div class="property-grid-content">

						                <div class="property-grid-item-holder">
						                    <span class="property-grid-price">
						                    	<span class="price-prefix"></span>
						                    	<span class="property-price-holder"><span class="property-price-number">90000 </span> fcfa</span>
						                    	<span class="price-prefix">Par mois</span>
							                </span>
						                    <div class="casaroyal-property-title-holder">
						                        <span class="property-location-label">
						                        	<i class="fa fa-map-marker" aria-hidden="true"></i>
						                            Ouagadougou, CA
						                        </span>
						                        <h4 class="property-grid-title-v2">
						                        	<a href="single-property.html" class="property-link">
						                            	2710 ACG_immobilier, Ouagadougou, CA 92660, BF
						                            </a>
						                        </h4>
						                    </div>
						                    <div class="casaroyal-property-agent-name">
						                    	<i class="fa fa-user-circle" aria-hidden="true"></i>
						                    	<a href="single-agent.html">Guigma Alain</a>
						                    </div>
						                    <div class="casaroyal-property-listing-time">
						                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> il y'a 2 mois
						                    </div>

						                </div>

						                <div class="property-meta">

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
												<span class="property-meta-number">2</span>
											</div>
						                </div>
						            </div>
						        </div>
						    </div>
						</div>
						<!-- Property -->

						<!-- Property -->
						<div class="col-lg-4 col-md-6 property-grid-item property-item-data clearfix"
							data-lat="34.06244093"
							data-long="-117.6675707"
							data-title="26502 Villa, Bobo Dioulasso, CA 92691, BF"
							data-thumb="assets/images/properties/property-1.jpg"
							data-pin="assets/images/svg/house-1.svg"
							data-price="90000fcfa"
							data-type="Maison"
							data-desc="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh…"
							data-link="single-property.html"
							data-id="49"


							>

						    <div class="property-grid-card">

						        <div class="property-grid-card-a">

						            <div class="property-grid-image">

						                <a href="single-property.html" class="property-link-over-image" style="background-image: url(assets/images/properties/property-1.jpg);"></a>

						                <span class="property-status-label">
						                	<span class="property-type">Maison</span>
						                    <span class="property-status">À vendre</span>
						                </span>

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

						                <span class="property-action-unit add-to-compare remove" data-id="49" data-action="add">
						                    <span class="add-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Add to compare">
						                        <i class="fa fa-exchange" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                    <span class="remove-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Remove from compare">
						                        <i class="fa fa-exchange" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                </span>

						            </div>

						            <div class="property-grid-content">

						                <div class="property-grid-item-holder">
						                    <span class="property-grid-price">
						                    	<span class="price-prefix"></span>
						                    	<span class="property-price-holder"><span class="property-price-number">16000000</span>fcfa</span>
						                    	<span class="price-prefix"></span>
							                </span>
						                    <div class="casaroyal-property-title-holder">
						                        <span class="property-location-label">
						                        	<i class="fa fa-map-marker" aria-hidden="true"></i>
						                            Bobo Dioulasso, CA
						                        </span>
						                        <h4 class="property-grid-title-v2">
						                        	<a href="single-property.html" class="property-link">
						                            	26502 ACG_immobilier, Bobo Dioulasso, CA 92691, BF
						                            </a>
						                        </h4>
						                    </div>
						                    <div class="casaroyal-property-agent-name">
						                    	<i class="fa fa-user-circle" aria-hidden="true"></i>
						                    	<a href="single-agent.html">Louis Nabaloum</a>
						                    </div>
						                    <div class="casaroyal-property-listing-time">
						                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> il y'a 2 mois
						                    </div>

						                </div>

						                <div class="property-meta">

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
												<span class="property-meta-number">3</span>
											</div>
						                </div>
						            </div>
						        </div>
						    </div>
						</div>
						<!-- Property -->

						<!-- Property -->
						<div class="col-lg-4 col-md-6 property-grid-item property-item-data clearfix"
							data-lat="34.0624409"
							data-long="-118.39353510000001"
							data-title="272 S ACG_immobilier, Manga, CA 90212, BF"
							data-thumb="assets/images/properties/property-3.jpg"
							data-pin="assets/images/svg/house-1.svg"
							data-price="$225,000.00"
							data-type="Maison"
							data-desc="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh…"
							data-link="single-property.html"
							data-id="49"


							>

						    <div class="property-grid-card">

						        <div class="property-grid-card-a">

						            <div class="property-grid-image">

						                <a href="single-property.html" class="property-link-over-image" style="background-image: url(assets/images/properties/property-3.jpg);"></a>

						                <span class="property-status-label">
						                	<span class="property-type">Maison</span>
						                    <span class="property-status">À Vendre</span>
						                </span>

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

						                <span class="property-action-unit add-to-compare " data-id="49" data-action="add">
						                    <span class="add-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Add to compare">
						                        <i class="fa fa-exchange" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                    <span class="remove-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Remove from compare">
						                        <i class="fa fa-exchange" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                </span>

						            </div>

						            <div class="property-grid-content">

						                <div class="property-grid-item-holder">
						                    <span class="property-grid-price">
						                    	<span class="price-prefix"></span>
						                    	<span class="property-price-holder"><span class="property-price-number">22500000</span>fcfa</span>
						                    	<span class="price-prefix"></span>
							                </span>
						                    <div class="casaroyal-property-title-holder">
						                        <span class="property-location-label">
						                        	<i class="fa fa-map-marker" aria-hidden="true"></i>
						                            Manga, CA
						                        </span>
						                        <h4 class="property-grid-title-v2">
						                        	<a href="single-property.html" class="property-link">
						                            	272 S ACG_immobilier, Manga, CA 90212, BF
						                            </a>
						                        </h4>
						                    </div>
						                    <div class="casaroyal-property-agent-name">
						                    	<i class="fa fa-user-circle" aria-hidden="true"></i>
						                    	<a href="single-agent.html">KOné Cheick</a>
						                    </div>
						                    <div class="casaroyal-property-listing-time">
						                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> il y'a 2 mois
						                    </div>

						                </div>

						                <div class="property-meta">

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
												<span class="property-meta-number">2</span>
											</div>
						                </div>
						            </div>
						        </div>
						    </div>
						</div>
						<!-- Property -->

						<!-- Property -->
						<div class="col-lg-4 col-md-6 property-grid-item property-item-data clearfix"
							data-lat="34.046928"
							data-long="-118.182725"
							data-title="15 Apartements de Type B"
							data-thumb="assets/images/properties/property-4.jpg"
							data-pin="assets/images/svg/house-1.svg"
							data-price="1,700000 fcfa"
							data-type="Tour Résidentielle"
							data-desc="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh…"
							data-link="single-property.html"
							data-id="49"


							>

						    <div class="property-grid-card">

						        <div class="property-grid-card-a">

						            <div class="property-grid-image">

						                <a href="single-property.html" class="property-link-over-image" style="background-image: url(assets/images/properties/property-4.jpg);"></a>

						                <span class="property-status-label">
						                	<span class="property-type">Tour Résidentielle</span>
						                    <span class="property-status">À Louer</span>
						                </span>

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

						                <span class="property-action-unit add-to-compare " data-id="49" data-action="add">
						                    <span class="add-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Add to compare">
						                        <i class="fa fa-exchange" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                    <span class="remove-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Remove from compare">
						                        <i class="fa fa-exchange" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                </span>

						            </div>

						            <div class="property-grid-content">

						                <div class="property-grid-item-holder">
						                    <span class="property-grid-price">
						                    	<span class="price-prefix">De</span>
						                    	<span class="property-price-holder"><span class="property-price-number">1700000</span> fcfa</span>
						                    	<span class="price-prefix">Par mois</span>
							                </span>
						                    <div class="casaroyal-property-title-holder">
						                        <span class="property-location-label">
						                        	<i class="fa fa-map-marker" aria-hidden="true"></i>
						                             Manga, CA
						                        </span>
						                        <h4 class="property-grid-title-v2">
						                        	<a href="single-property.html" class="property-link">
						                            	15 Apartments de Type B
						                            </a>
						                        </h4>
						                    </div>
						                    <div class="casaroyal-property-agent-name">
						                    	<i class="fa fa-user-circle" aria-hidden="true"></i>
						                    	<a href="single-agent.html">Alain Guigma</a>
						                    </div>
						                    <div class="casaroyal-property-listing-time">
						                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> il y'a 2 mois
						                    </div>

						                </div>

						                <div class="property-meta">

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

												<span class="property-meta-number">1</span>

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
												<span class="property-meta-number">2</span>
											</div>
						                </div>
						            </div>
						        </div>
						    </div>
						</div>
						<!-- Property -->

						<!-- Property -->
						<div class="col-lg-4 col-md-6 property-grid-item property-item-data clearfix"
							data-lat="34.046928"
							data-long="-118.182725"
							data-title="14 Apartements de Type A"
							data-thumb="assets/images/properties/property-5.jpg"
							data-pin="assets/images/svg/house-1.svg"
							data-price="310000000 fcfa"
							data-type="Tour Résidentielle"
							data-desc="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh…"
							data-link="single-post.html"
							data-id="49"


							>

						    <div class="property-grid-card">

						        <div class="property-grid-card-a">

						            <div class="property-grid-image">

						                <a href="single-property.html" class="property-link-over-image" style="background-image: url(assets/images/properties/property-5.jpg);"></a>

						                <span class="property-status-label">
						                	<span class="property-type">Tour Résidentielle</span>
						                    <span class="property-status">À Vendre</span>
						                </span>

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

						                <span class="property-action-unit add-to-compare " data-id="49" data-action="add">
						                    <span class="add-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Add to compare">
						                        <i class="fa fa-exchange" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                    <span class="remove-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Remove from compare">
						                        <i class="fa fa-exchange" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                </span>

						            </div>

						            <div class="property-grid-content">

						                <div class="property-grid-item-holder">
						                    <span class="property-grid-price">
						                    	<span class="price-prefix"></span>
						                    	<span class="property-price-holder"><span class="property-price-number">310000000 fcfa</span></span>
						                    	<span class="price-prefix"></span>
							                </span>
						                    <div class="casaroyal-property-title-holder">
						                        <span class="property-location-label">
						                        	<i class="fa fa-map-marker" aria-hidden="true"></i>
						                            Manga, CA
						                        </span>
						                        <h4 class="property-grid-title-v2">
						                        	<a href="single-property.html" class="property-link">
						                            	14 Apartements de Type A
						                            </a>
						                        </h4>
						                    </div>
						                    <div class="casaroyal-property-agent-name">
						                    	<i class="fa fa-user-circle" aria-hidden="true"></i>
						                    	<a href="single-agent.html">Bougma Anna</a>
						                    </div>
						                    <div class="casaroyal-property-listing-time">
						                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> il y'a mois
						                    </div>

						                </div>

						                <div class="property-meta">

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
						<div class="col-lg-4 col-md-6 property-grid-item property-item-data clearfix"
							data-lat="34.162137"
							data-long="-118.13202000000001"
							data-title="Maison d'été moderne à la campagne"
							data-thumb="assets/images/properties/property-6.jpg"
							data-pin="assets/images/svg/house-1.svg"
							data-price="1300000 fcfa"
							data-type="Maison des Vaccaces"
							data-desc="Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh…"
							data-link="single-property.html"
							data-id="49"


							>

						    <div class="property-grid-card">

						        <div class="property-grid-card-a">

						            <div class="property-grid-image">

						                <a href="single-property.html" class="property-link-over-image" style="background-image: url(assets/images/properties/property-6.jpg);"></a>

						                <span class="property-status-label">
						                	<span class="property-type">Maison des Vaccances</span>
						                    <span class="property-status">A louer</span>
						                </span>

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

						                <span class="property-action-unit add-to-compare " data-id="49" data-action="add">
						                    <span class="add-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Add to compare">
						                        <i class="fa fa-exchange" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                    <span class="remove-to-compare-list" data-toggle="tooltip" data-placement="top" data-original-title="Remove from compare">
						                        <i class="fa fa-exchange" aria-hidden="true"></i>
						                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
						                    </span>
						                </span>

						            </div>

						            <div class="property-grid-content">

						                <div class="property-grid-item-holder">
						                    <span class="property-grid-price">
						                    	<span class="price-prefix">De</span>
						                    	<span class="property-price-holder"><span class="property-price-number">1300000 fcfa</span></span>
						                    	<span class="price-prefix">Par mois</span>
							                </span>
						                    <div class="casaroyal-property-title-holder">
						                        <span class="property-location-label">
						                        	<i class="fa fa-map-marker" aria-hidden="true"></i>
						                            Kaya, CA
						                        </span>
						                        <h4 class="property-grid-title-v2">
						                        	<a href="single-property.html" class="property-link">
						                            	Maison d'été moderne à la campagne
						                            </a>
						                        </h4>
						                    </div>
						                    <div class="casaroyal-property-agent-name">
						                    	<i class="fa fa-user-circle" aria-hidden="true"></i>
						                    	<a href="single-agent.html">Mme Ouédraogo</a>
						                    </div>
						                    <div class="casaroyal-property-listing-time">
						                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i> il y'a 2 mois
						                    </div>

						                </div>

						                <div class="property-meta">

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
												<span class="property-meta-number">2</span>
											</div>
						                </div>
						            </div>
						        </div>
						    </div>
						</div>
						<!-- Property -->

					</div>

					<div class="row">

						<div class="col-md-12 mt-60">

							<div class="casaroyal-button-container casaroyal-button-align-center casaroyal-button-size-medium">
								<a class="btn-casaroyal" href="#">Toutes les propriétes</a>
							</div>

						</div>

					</div>

				</div>
			</div>
		</div>
		<!-- Featured Section -->

		<!-- Single Property Section -->
		<div class="casaroyal-single-property-section">
			<div class="container pt-0 pb-90">

				<div class="row">

					<div class="col-md-12">

						<div class="casaroyal-entry-title-wrapper">
							<div class="casaroyal-entry-title casaroyal-entry-title-align-center">
						     	<h5>AFRIC CONSULTING GROUP IMMOBILIER</h5>
						     	<h3><span>Chaud</span> Accord</h3>
						    </div>
					    </div>

					</div>

				</div>

				<div class="bph casaroyal-single-property-shortcode">

					<div class="row row-eq-height">

						<div class="col-md-6 bph-image" style="background-image: url(assets/images/properties/property-1.jpg);">

							<a data-fancybox-group="casaroyal-gallery-48" class="fancybox" href="assets/images/properties/property-1.jpg"></a>

							<a data-fancybox-group="casaroyal-gallery-48" class="fancybox" href="assets/images/properties/property-2.jpg"></a>

							<a data-fancybox-group="casaroyal-gallery-48" class="fancybox" href="assets/images/properties/property-3.jpg"></a>

							<a data-fancybox-group="casaroyal-gallery-48" class="fancybox" href="assets/images/properties/property-4.jpg"></a>

							<a data-fancybox-group="casaroyal-gallery-48" class="fancybox" href="assets/images/properties/property-5.jpg"></a>

			                <a data-open-id="casaroyal-gallery-48" class="casaroyal-image-gallery open-album" href="#">Photos <span>(5)</span></a>

						</div>

						<div class="col-md-6 bph-meta">

							<span class="bph-type muted">
								<span class="property-type">Maison</span> À Vendre
							</span>

							<div class="bph-info-wrapper">

								<h2 class="bph-title">
									<a href="single-property.html">26502 ACG_immobilier, Ouagadougou, CA 92691, Bf</a>
								</h2>

								<p><i class="fa fa-dot-circle-o" aria-hidden="true"></i>  Ouagadougou, CA</p>

								<div class="bph-price property-has-video">

									<div class="property-price-wrapper">
										<span class="price-prefix"></span>
										<span class="property-price-holder"><span class="property-price-number">16000000</span>fcfa</span>
										<span class="price-prefix"></span>
									</div>

								</div>

								<a href="https://www.youtube.com/embed/zvL0UmvPSEA" class="bph-play-video fancybox fancybox.iframe">
									<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
										<style type="text/css">.st0{fill:#FFFFFF;}</style>
										<path class="st0" d="M80.9,488.3L448.7,276c20-11.5,20-40.4,0-52L80.9,11.7c-20-11.5-45,2.9-45,26v424.7
			C35.9,485.5,60.9,499.9,80.9,488.3z"></path>
									</svg>
								</a>

							</div>

							<div class="property-meta">

								<div class="property-meta-item">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
										<g>
											<g>
												<path d="M501.533,450.097l-33.38-33.38c-6.521-6.521-17.087-6.521-23.609,0c-6.521,6.516-6.521,17.092,0,23.609l4.892,4.892
													H129.349l4.892-4.892c6.521-6.516,6.521-17.092,0-23.609c-6.521-6.521-17.087-6.521-23.609,0l-33.38,33.38
													c-3.275,3.269-4.903,7.73-4.903,11.816c0,4.174Des lits92h320.087l-4.892,4.892c-6.521,6.516-6.521,17.092,0,23.609
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
									<span class="property-meta-name">Des lits</span>
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
									<span class="property-meta-name">
                                        thermes</span>
								</div>
								<div class="property-meta-item">
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
									<span class="property-meta-name">Garages</span>
								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>
		<!-- Single Property Section -->

		<!-- Agents Section -->
		<div class="casaroyal-single-property-section casaroyal-background-grey">
			<div class="container pt-30">

				<div class="row">

					<div class="col-md-12">

						<div class="casaroyal-entry-title-wrapper  ">
							<div class="casaroyal-entry-title casaroyal-entry-title-align-center">
						     	<h5>Voir notre équipe</h5>
						     	<h3><span>Nos</span> Agents</h3>
						     </div>
					    </div>

					    <div class="agent-wrapper">

					    	<div class='owl-demo owl-carousel owl-theme owl-agents masonry-projects'>

					    		<!-- agent -->
								<div class="item item-agent">

									<div class="item-agent-container">

										<div class="casaroyal-search-card">

			                                <div class="casaroyal-search-card-body blog-card-body">

			                                    <div class="casaroyal-search-card-image">

			                                        <a href="single-agent.html" title="">

		                                                <img width="500" height="375" src="assets/images/agents/agent-1.jpg" alt="">

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

			                                    <h2><a href="single-agent.html">Alain Guigma</a></h2>

			                                    <div class="entry-title agent-contacts">

			                                        <h5><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:(123)456-7890">+226 66 41 07 68</a></h5>
			                                        <h5><i class="fa fa-envelope" aria-hidden="true"></i> <a href="/cdn-cgi/l/email-protection#ceafa9aba0ba8eabb6afa3bea2abe0ada1a3"><span class="__cf_email__" data-cfemail="5c3d3b3932281c39243d312c3039723f3331">Email : alain.guigma@africconsultinggroup.com</span></a></h5>

			                                    </div>

			                                    <!-- Agent's Social Navigation -->
	                                            <ul class="casaroyal-agent-social-links agent-social-link clearfix">
	                                                <li class="facebook">
                                                        <a target="_blank" href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                                    </li>
                                                    <li class="twitter">
                                                        <a target="_blank" href="#" ><i class="fa fa-twitter fa-lg"></i></a>
                                                    </li>
                                                    <li class="linkedin">
                                                        <a target="_blank" href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                                    </li>
	                                            </ul>

			                                </div>

			                            </div>

									</div>

								</div>
								<!-- /agent -->

								<!-- agent -->
								<div class="item item-agent">

									<div class="item-agent-container">

										<div class="casaroyal-search-card">

			                                <div class="casaroyal-search-card-body blog-card-body">

			                                    <div class="casaroyal-search-card-image">

			                                        <a href="single-agent.html" title="">

		                                                <img width="500" height="375" src="assets/images/agents/agent-2.jpg" alt="">

		                                                <div class="project-hover-overlay">
		                                                    <span></span>
		                                                    <span></span>
		                                                    <span></span>
		                                                </div>

		                                            </a>

			                                    </div>

			                                    <div class="entry-title">

			                                        <span class="casaroyal-agent-position">MarketteurDigital</span>

			                                    </div>

			                                    <h2><a href="single-agent.html">Cheick Koné</a></h2>

			                                    <div class="entry-title agent-contacts">

			                                        <h5><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:(123)456-7890">+226 65 75 27 89</a></h5>
			                                        <h5><i class="fa fa-envelope" aria-hidden="true"></i> <a href="/cdn-cgi/l/email-protection#b9d8dedcd7cdf9dcc1d8d4c9d5dc97dad6d4"><span class="__cf_email__" data-cfemail="7f1e181a110b3f1a071e120f131a511c1012">Email : cheick.kone@africconsultinggroup.com</span></a></h5>

			                                    </div>

			                                    <!-- Agent's Social Navigation -->
	                                            <ul class="casaroyal-agent-social-links agent-social-link clearfix">
	                                                <li class="facebook">
                                                        <a target="_blank" href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                                    </li>
                                                    <li class="twitter">
                                                        <a target="_blank" href="#" ><i class="fa fa-twitter fa-lg"></i></a>
                                                    </li>
                                                    <li class="linkedin">
                                                        <a target="_blank" href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                                    </li>
	                                            </ul>

			                                </div>

			                            </div>

									</div>

								</div>
								<!-- /agent -->

								<!-- agent -->
								<div class="item item-agent">

									<div class="item-agent-container">

										<div class="casaroyal-search-card">

			                                <div class="casaroyal-search-card-body blog-card-body">

			                                    <div class="casaroyal-search-card-image">

			                                        <a href="single-agent.html" title="">

		                                                <img width="500" height="375" src="assets/images/agents/agent-3.jpg" alt="">

		                                                <div class="project-hover-overlay">
		                                                    <span></span>
		                                                    <span></span>
		                                                    <span></span>
		                                                </div>

		                                            </a>

			                                    </div>

			                                    <div class="entry-title">

			                                        <span class="casaroyal-agent-position">
                                                        Agent de vente</span>

			                                    </div>

			                                    <h2><a href="single-agent.html">Louis Bertson Nabaloum</a></h2>

			                                    <div class="entry-title agent-contacts">

			                                        <h5><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:(123)456-7890">+226 52 13 30 10</a></h5>
			                                        <h5><i class="fa fa-envelope" aria-hidden="true"></i> <a href="/cdn-cgi/l/email-protection#c8a9afada6bc88adb0a9a5b8a4ade6aba7a5"><span class="__cf_email__" data-cfemail="d1b0b6b4bfa591b4a9b0bca1bdb4ffb2bebc">Email : louis.nabaloum@africconsultinggroup.com</span></a></h5>

			                                    </div>

			                                    <!-- Agent's Social Navigation -->
	                                            <ul class="casaroyal-agent-social-links agent-social-link clearfix">
	                                                <li class="facebook">
                                                        <a target="_blank" href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                                    </li>
                                                    <li class="twitter">
                                                        <a target="_blank" href="#" ><i class="fa fa-twitter fa-lg"></i></a>
                                                    </li>
                                                    <li class="linkedin">
                                                        <a target="_blank" href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                                    </li>
	                                            </ul>

			                                </div>

			                            </div>

									</div>

								</div>
								<!-- /agent -->

								<!-- agent -->
								<div class="item item-agent">

									<div class="item-agent-container">

										<div class="casaroyal-search-card">

			                                <div class="casaroyal-search-card-body blog-card-body">

			                                    <div class="casaroyal-search-card-image">

			                                        <a href="single-agent.html" title="">

		                                                <img width="500" height="375" src="assets/images/agents/agent-4.jpg" alt="">

		                                                <div class="project-hover-overlay">
		                                                    <span></span>
		                                                    <span></span>
		                                                    <span></span>
		                                                </div>

		                                            </a>

			                                    </div>

			                                    <div class="entry-title">

			                                        <span class="casaroyal-agent-position">
                                                        Agent d'achat</span>

			                                    </div>

			                                    <h2><a href="single-agent.html">Bougma Anna</a></h2>

			                                    <div class="entry-title agent-contacts">

			                                        <h5><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:(123)456-7890">+226 73 25 65 41</a></h5>
			                                        <h5><i class="fa fa-envelope" aria-hidden="true"></i> <a href="/cdn-cgi/l/email-protection#6e0f090b001a2e0b160f031e020b400d0103"><span class="__cf_email__" data-cfemail="58393f3d362c183d20393528343d763b3735">Email : anna.bougma@africconsultinggroup.com</span></a></h5>

			                                    </div>

			                                    <!-- Agent's Social Navigation -->
	                                            <ul class="casaroyal-agent-social-links agent-social-link clearfix">
	                                                <li class="facebook">
                                                        <a target="_blank" href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                                    </li>
                                                    <li class="twitter">
                                                        <a target="_blank" href="#" ><i class="fa fa-twitter fa-lg"></i></a>
                                                    </li>
                                                    <li class="linkedin">
                                                        <a target="_blank" href="#"><i class="fa fa-linkedin fa-lg"></i></a>
                                                    </li>
	                                            </ul>

			                                </div>

			                            </div>

									</div>

								</div>
								<!-- /agent -->

					    	</div>

					    </div>

					</div>

				</div>

			</div>
		</div>
		<!-- Agents Section -->

		<!-- Sell Property Section -->
		<div class="casaroyal-sell-property-section">
			<div class="casaroyal-page-title-image-background" style="background-image: url(assets/images/sell-5.jpg);"></div>
			<div class="container pt-180 pb-180">
				<div class="row">
					<div class="col-md-7" style="float: left; ">
						<div class="casaroyal-promo-block casaroyal-promo-block-blue">

							<h2>Vous voulez vendre une propriété ?</h2>
							<p>Laissez-nous créer un plan de marketing stratégique sur mesure et suivre le processus de vente.</p>
							<div class="casaroyal-button-container casaroyal-button-align-left casaroyal-button-icon-align-right casaroyal-button-style-default casaroyal-button-size-medium">
								<a href="#" class="btn-casaroyal">
									Plus Details<i class="fa fa-angle-right"></i>
								</a>
							</div>

						</div>
					</div>
			    </div>
			</div>
		</div>
		<!-- Sell Property Section -->

		<!-- Blog Posts Section -->
		<div class="casaroyal-blog-posts-section casaroyal-background-grey">

			<div class="container pt-30">

				<div class="row">

					<div class="col-md-12">

						<div class="casaroyal-entry-title-wrapper  ">
							<div class="casaroyal-entry-title casaroyal-entry-title-align-center">
						     	<h5>ACG_immobiler Nouveau</h5>
						     	<h3><span>Articles</span> & Astuces</h3>
						     </div>
					    </div>

					</div>

				</div>

				<div class="casaroyal-blog-posts-shortcode ">

					<div class="row">

						<!-- Post -->
						<div class="col-lg-4 col-md-6 post">

	                        <div class="casaroyal-search-card">

	                        	<div class="casaroyal-search-card-image casaroyal-post-card-image">

                                    <a href="single-post.html">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <div class="mask"></div>
                                        <img class="lazyload" src="assets/images/posts/post-1.jpg" alt="">
                                    </a>

                                </div>

	                            <div class="casaroyal-search-card-body blog-card-body">
	                                <div class="casaroyal-categories-post"><a href="#" rel="category tag">Articles & Astuces</a></div>
	                                <h2><a href="single-post.html">13 trucs et astuces pour vendre des maisons</a></h2>
	                                <span class="casaroyal-search-card-body-meta">

	                                    <span class="post-meta-item">
	                                        <span class="post-meta-icon">
	                                        	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
													<g>
														<g>
															<path d="M437.019,74.981C388.667,26.629,324.38,0,256,0S123.333,26.63,74.981,74.981S0,187.62,0,256
																s26.629,132.667,74.981,181.019C123.332,485.371,187.62,512,256,512s132.667-26.629,181.019-74.981
																C485.371,388.667,512,324.38,512,256S485.371,123.332,437.019,74.981z M256,470.636C137.65,470.636,41.364,374.35,41.364,256
																S137.65,41.364,256,41.364S470.636,137.65,470.636,256S374.35,470.636,256,470.636z"></path>
														</g>
													</g>
													<g>
														<g>
															<path d="M341.221,311.97l-64.538-64.537V114.809c0-11.422-9.259-20.682-20.682-20.682c-11.422,0-20.682,9.26-20.682,20.682V256
																c0,5.486,2.179,10.746,6.058,14.625l70.594,70.595c4.038,4.039,9.332,6.058,14.625,6.058c5.293,0,10.586-2.019,14.626-6.058
																C349.297,333.142,349.297,320.047,341.221,311.97z"></path>
														</g>
													</g>
												</svg>
											</span>
											<a href="#">12 Octobre 2018</a>
										</span>
	                                </span>
	                            </div>
	                        </div>
	                    </div>
						<!-- /Post -->

						<!-- Post -->
						<div class="col-lg-4 col-md-6 post">

	                        <div class="casaroyal-search-card">

	                        	<div class="casaroyal-search-card-image casaroyal-post-card-image">

                                    <a href="single-post.html">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <div class="mask"></div>
                                        <img class="lazyload" src="assets/images/posts/post-2.jpg" alt="">
                                    </a>

                                </div>

	                            <div class="casaroyal-search-card-body blog-card-body">
	                                <div class="casaroyal-categories-post"><a href="#" rel="category tag">Articles & Astuces</a></div>
	                                <h2><a href="single-post.html">Acheter une maison dans le milieu urbain à moindre coût</a></h2>
	                                <span class="casaroyal-search-card-body-meta">

	                                    <span class="post-meta-item">
	                                        <span class="post-meta-icon">
	                                        	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
													<g>
														<g>
															<path d="M437.019,74.981C388.667,26.629,324.38,0,256,0S123.333,26.63,74.981,74.981S0,187.62,0,256
																s26.629,132.667,74.981,181.019C123.332,485.371,187.62,512,256,512s132.667-26.629,181.019-74.981
																C485.371,388.667,512,324.38,512,256S485.371,123.332,437.019,74.981z M256,470.636C137.65,470.636,41.364,374.35,41.364,256
																S137.65,41.364,256,41.364S470.636,137.65,470.636,256S374.35,470.636,256,470.636z"></path>
														</g>
													</g>
													<g>
														<g>
															<path d="M341.221,311.97l-64.538-64.537V114.809c0-11.422-9.259-20.682-20.682-20.682c-11.422,0-20.682,9.26-20.682,20.682V256
																c0,5.486,2.179,10.746,6.058,14.625l70.594,70.595c4.038,4.039,9.332,6.058,14.625,6.058c5.293,0,10.586-2.019,14.626-6.058
																C349.297,333.142,349.297,320.047,341.221,311.97z"></path>
														</g>
													</g>
												</svg>
											</span>
											<a href="#">2 Octobre 2018</a>
										</span>
	                                </span>
	                            </div>
	                        </div>
	                    </div>
						<!-- /Post -->

						<!-- Post -->
						<div class="col-lg-4 col-md-6 post">

	                        <div class="casaroyal-search-card">

	                        	<div class="casaroyal-search-card-image casaroyal-post-card-image">

                                    <a href="single-post.html">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <div class="mask"></div>
                                        <img class="lazyload" src="assets/images/posts/post-3.jpg" alt="">
                                    </a>

                                </div>

	                            <div class="casaroyal-search-card-body blog-card-body">
	                                <div class="casaroyal-categories-post"><a href="#" rel="category tag">Articles & Astuces</a></div>
	                                <h2><a href="single-post.html">Avantages et inconvénients d'une maison de campagne</a></h2>
	                                <span class="casaroyal-search-card-body-meta">

	                                    <span class="post-meta-item">
	                                        <span class="post-meta-icon">
	                                        	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
													<g>
														<g>
															<path d="M437.019,74.981C388.667,26.629,324.38,0,256,0S123.333,26.63,74.981,74.981S0,187.62,0,256
																s26.629,132.667,74.981,181.019C123.332,485.371,187.62,512,256,512s132.667-26.629,181.019-74.981
																C485.371,388.667,512,324.38,512,256S485.371,123.332,437.019,74.981z M256,470.636C137.65,470.636,41.364,374.35,41.364,256
																S137.65,41.364,256,41.364S470.636,137.65,470.636,256S374.35,470.636,256,470.636z"></path>
														</g>
													</g>
													<g>
														<g>
															<path d="M341.221,311.97l-64.538-64.537V114.809c0-11.422-9.259-20.682-20.682-20.682c-11.422,0-20.682,9.26-20.682,20.682V256
																c0,5.486,2.179,10.746,6.058,14.625l70.594,70.595c4.038,4.039,9.332,6.058,14.625,6.058c5.293,0,10.586-2.019,14.626-6.058
																C349.297,333.142,349.297,320.047,341.221,311.97z"></path>
														</g>
													</g>
												</svg>
											</span>
											<a href="#">2 Octobre 2018</a>
										</span>
	                                </span>
	                            </div>
	                        </div>
	                    </div>
						<!-- /Post -->

					</div>

					<div class="row">

						<div class="col-md-12 mt-60">

							<div class="casaroyal-button-container casaroyal-button-align-center casaroyal-button-icon-align-left casaroyal-button-style-default casaroyal-button-size-medium  ">
								<a class="btn-casaroyal" href="#" title="More Articles & Tips">Plus Articles & Astuces</a>
							</div>

						</div>

					</div>

				</div>

			</div>

		</div>
		<!-- Blog Posts Section -->

		<!-- Our Values Section -->
		<div class="casaroyal-blog-posts-section casaroyal-background-light-grey">

			<div class="container pt-30">

				<div class="row">

					<div class="col-md-12">

						<div class="casaroyal-entry-title-wrapper  ">
							<div class="casaroyal-entry-title casaroyal-entry-title-align-center">
						     	<h5>AFRIC CONSULTING GROUP IMMOBILIER</h5>
						     	<h3><span>Nos</span> Valeurs</h3>
						     </div>
					    </div>

					</div>

				</div>

				<div class="row">

					<!-- Icon Block -->
					<div class="col-lg-4 col-md-6">
						<div class="casaroyal-icon-box casaroyal-icon-box-style-boxed ">

							<div class="casaroyal-icon-box-icon">
								<i class="li_bubble"></i>
							</div>
							<div class="casaroyal-icon-box-content">
								<h4>Assurer la communication</h4>
								Nous vous tenons au courant à chaque étape du processus. Vous pouvez compter sur un flux d'informations compréhensible.
							</div>

						</div>
                    </div>
					<!-- /Icon Block -->

					<!-- Icon Block -->
					<div class="col-lg-4 col-md-6">
						<div class="casaroyal-icon-box casaroyal-icon-box-style-boxed ">

							<div class="casaroyal-icon-box-icon">
								<i class="li_paperplane"></i>
							</div>
							<div class="casaroyal-icon-box-content">
								<h4>Tirer le meilleur parti de la technologie</h4>
								Le temps est precieux. Nous garantissons un haut degré d'efficacité et un niveau de service premium en utilisant les bons outils.
							</div>

						</div>
                    </div>
					<!-- /Icon Block -->

					<!-- Icon Block -->
					<div class="col-lg-4 col-md-6">
						<div class="casaroyal-icon-box casaroyal-icon-box-style-boxed ">

							<div class="casaroyal-icon-box-icon">
								<i class="li_heart"></i>
							</div>
							<div class="casaroyal-icon-box-content">
								<h4>Offrir un excellent service client</h4>
								Nous sommes passionnés par ce que nous faisons et nous sommes fiers d'atteindre les résultats que vous avez en tête .
							</div>

						</div>
                    </div>
					<!-- /Icon Block -->

				</div>

				<div class="row">

					<div class="col-md-12 mt-90">

						<div class="casaroyal-button-container casaroyal-button-align-center casaroyal-button-icon-align-left casaroyal-button-style-default casaroyal-button-size-medium  ">
							<a class="btn-casaroyal" href="#" title="Read More">Lire Plus</a>
						</div>

					</div>

				</div>

			</div>

		</div>
		<!-- Our Values Section -->

		<!-- Testimonials Section -->
		<div class="casaroyal-testimonials-section">
			<div class="casaroyal-page-title-image-background" style="background-image: url(assets/images/testimonials-bg.jpg);"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="casaroyal-entry-title-wrapper  ">
							<div class="casaroyal-entry-title casaroyal-entry-title-align-left">
						     	<h5 class="text-grey">Avis des clients</h5>
						     	<h3 class="text-white"><span>Que</span> disent Nos clients </h3>
						     </div>
					    </div>
					    <div class="testimonials-wrapper dark-bg">
							<div class='owl-demo owl-carousel owl-theme owl-testimonials-v3'>

								<!-- Testimonial -->
								<div class="item item-testimonials">
									<div class="item-testimonials-container">
										<div class="item-testimonials-body">
											<p class="testimonial-quote">Un peu perdue avec les documents Syndic de Copropriété a analyser pour l’achat de mon appartement , j ai trouvé avec l ‘Agence ACG_immobilier conseils et explications détaillés . Je remercie particulièrement Alain du service Syndic pour son accueil, ses compétences et sa disponibilité ! équipe jeune et dynamique ! Bravo.</p>
											<div class="testimonial-author">
												<div class="item-testimonials-avatar">
													<img width="120" height="120" src="assets/images/testimonials/author-1.jpg" alt="">
												</div>
												<div class="item-testimonials-author-data">
													<h2>Alain Alain</h2>
													<span class="item-testimonials-meta">Ouagadougou</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Testimonial -->

								<!-- Testimonial -->
								<div class="item item-testimonials">
									<div class="item-testimonials-container">
										<div class="item-testimonials-body">
											<p class="testimonial-quote">Cette agence immobilière, récemment ouverte à Ouagadougou, a pu vraiment répondre à toute mes attentes. Ayant envie d’investir sur la station de Courchevel et n’étant pas un grand connaisseur en matière d’immobilier, je me posais pas mal de questions sur le marché local et sur le fonctionnement du syndic en particulier.</p>
											<div class="testimonial-author">
												<div class="item-testimonials-avatar">
													<img width="120" height="120" src="assets/images/testimonials/author-2.jpg" alt="">
												</div>
												<div class="item-testimonials-author-data">
													<h2>Louis Bertson</h2>
													<span class="item-testimonials-meta">Bobo Dioulasso</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Testimonial -->

								<!-- Testimonial -->
								<div class="item item-testimonials">
									<div class="item-testimonials-container">
										<div class="item-testimonials-body">
											<p class="testimonial-quote">En tant que Marketteur digital, je suis en mesure de recommander les connaissances & compétences techniques dans le domaine de l’immobilier de Vivet Immobilier J’ai pu apprécier également le sérieux et le professionnalisme des deux associés, ainsi que leurs valeurs morales, malheureusement trop rares dans le monde de la transaction immobilière.</p>
											<div class="testimonial-author">
												<div class="item-testimonials-avatar">
													<img width="120" height="120" src="assets/images/testimonials/author-2.jpg" alt="">
												</div>
												<div class="item-testimonials-author-data">
													<h2>Cheick Omar</h2>
													<span class="item-testimonials-meta">Bobo Dioulasso</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Testimonial -->

								<!-- Testimonial -->
								<div class="item item-testimonials">
									<div class="item-testimonials-container">
										<div class="item-testimonials-body">
											<p class="testimonial-quote">C’était parfait. Nous avons mis en vente notre maison dans cette agence et en très peu de temps ils ont trouvé un acquéreur. Nous avons été satisfait de leurs conseils pour la mise en vente et des astuces pour mettre en valeur notre maison. Nous recommandons cette agence à nos amis..</p>
											<div class="testimonial-author">
												<div class="item-testimonials-avatar">
													<img width="120" height="120" src="assets/images/testimonials/author-3.jpg" alt="">
												</div>
												<div class="item-testimonials-author-data">
													<h2>Alain Alain</h2>
													<span class="item-testimonials-meta">Manga</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Testimonial -->

							</div>
						</div>
					</div>
			    </div>
			</div>
		</div>
		<!-- Testimonials Section -->






    @endsection

