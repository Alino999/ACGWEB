@extends('layouts.layout')

@section('content')

		<!-- Title Section -->
    	<div class="casaroyal-section">

			<div class="casaroyal-page-title property-banner has-image-bg paralax-background">

	            <div class="container">
	                <span>Présentation des maisons</span>
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

						<div class="casaroyal-sidebar pr-20">

							<div class="widget widget_search">
								<div class="widget-content">
									<div class="widget-title-container">
										<h3 class="widget-title">Recherche</h3>
									</div>
									<form method="get" class="search-form" id="search-form">
										<input type="search" class="search-field" placeholder="Recherche" name="s" id="s">
										<button type="submit" class="search-button"><i class="fa fa-search" aria-hidden="true"></i></button>
									</form>
								</div>
								<div class="clear"></div>
							</div>

							<div class="widget widget_archive">
								<div class="widget-content">
									<div class="widget-title-container">
										<h3 class="widget-title">Archive</h3>
									</div>
									<ul>
										<li><a href="#">Novembre 2021</a></li>
										<li><a href="#">Octobre 2021</a></li>
										<li><a href="#">Septembre 2021</a></li>
									</ul>
								</div>
								<div class="clear"></div>
							</div>

							<div class="widget widget_casaroyal_recent_posts">
								<div class="widget-content">
									<div class="widget-title-container">
										<h3 class="widget-title"> Posts Récents</h3>
									</div>
									<ul class="casaroyal-widget-list">
										<li>
											<a href="single-post.html" title="13 Tips And Tricks For Selling Homes">
												<div class="post-icon">
													<img width="200" height="200" src="assets/images/posts/widget-post-1.jpg">
												</div>
												<div class="inner">
													<p class="title">Trucs et astuces pour vendre des maisons</p>
													<p class="meta">12 Octobre 2021</p>
												</div>
												<div class="clear"></div>
											</a>
										</li>
										<li>
											<a href="single-post.html" title="Pros and cons on a countryside house">
												<div class="post-icon">
													<img width="200" height="200" src="assets/images/posts/widget-post-2.jpg">

												</div>
												<div class="inner">
													<p class="title">Avantages et inconvénients d'une maison de campagne</p>
													<p class="meta">2 Septembre 2021</p>
												</div>
												<div class="clear"></div>
											</a>
										</li>
										<li>
											<a href="single-post.html" title="Buying a House">

												<div class="post-icon">
													<img width="200" height="200" src="assets/images/posts/widget-post-3.jpg">
												</div>
												<div class="inner">
													<p class="title">Acheter une maison</p>
													<p class="meta">2 Septembre 2021</p>
												</div>
												<div class="clear"></div>
											</a>
										</li>
									</ul>

								</div>
								<div class="clear"></div>
							</div>

							<div class="widget casaroyal_recent_properties_widget">
								<div class="widget-content">
									<div class="widget-title-container">
										<h3 class="widget-title">Propriétés récentes</h3>
									</div>
									<div class="featured-properties-widget-container">

										<!-- Property -->
										<div class="property-grid-item property-item-data clearfix">

										    <div class="property-grid-card">

										        <div class="property-grid-card-a">

										            <div class="property-grid-image">

										                <a href="single-property.html" class="property-link-over-image" style="background-image: url(assets/images/properties/property-4.jpg);"></a>

										                <span class="property-status-label">
										                	<span class="property-type">Tour Residentielle</span>
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
										                    	<span class="property-price-holder"><span class="property-price-number">170000</span>fcfa</span>
										                    	<span class="price-prefix">Par Mois</span>
											                </span>
										                    <div class="casaroyal-property-title-holder">
										                        <span class="property-location-label">
										                        	<i class="fa fa-map-marker" aria-hidden="true"></i>
										                             Ouagadougou, CA
										                        </span>
										                        <h4 class="property-grid-title-v2">
										                        	<a href="single-property.html" class="property-link">
										                            	15 Apartements de Type B
										                            </a>
										                        </h4>
										                    </div>
										                    <div class="casaroyal-property-agent-name">
										                    	<i class="fa fa-user-circle" aria-hidden="true"></i>
										                    	<a href="single-agent.html">Alain Alain</a>
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
										<div class="property-grid-item property-item-data clearfix">

										    <div class="property-grid-card">

										        <div class="property-grid-card-a">

										            <div class="property-grid-image">

										                <a href="single-property.html" class="property-link-over-image" style="background-image: url(assets/images/properties/property-5.jpg);"></a>

										                <span class="property-status-label">
										                	<span class="property-type">Tour Residentielle</span>
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
										                    	<span class="property-price-holder"><span class="property-price-number">31000000</span>fcfa</span>
										                    	<span class="price-prefix"></span>
											                </span>
										                    <div class="casaroyal-property-title-holder">
										                        <span class="property-location-label">
										                        	<i class="fa fa-map-marker" aria-hidden="true"></i>
										                            Ouagadougou, CA
										                        </span>
										                        <h4 class="property-grid-title-v2">
										                        	<a href="single-property.html" class="property-link">
										                            	14 Apartements de Type A
										                            </a>
										                        </h4>
										                    </div>
										                    <div class="casaroyal-property-agent-name">
										                    	<i class="fa fa-user-circle" aria-hidden="true"></i>
										                    	<a href="single-agent.html">Louis Bertson</a>
										                    </div>
										                    <div class="casaroyal-property-listing-time">
										                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>  il y'a 2 mois
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
										<div class="property-grid-item property-item-data clearfix">

										    <div class="property-grid-card">

										        <div class="property-grid-card-a">

										            <div class="property-grid-image">

										                <a href="single-property.html" class="property-link-over-image" style="background-image: url(assets/images/properties/property-6.jpg);"></a>

										                <span class="property-status-label">
										                	<span class="property-type">Maison de vaccances</span>
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
										                    	<span class="price-prefix">From</span>
										                    	<span class="property-price-holder"><span class="property-price-number">130000</span>fcfa</span>
										                    	<span class="price-prefix">Par Mois</span>
											                </span>
										                    <div class="casaroyal-property-title-holder">
										                        <span class="property-location-label">
										                        	<i class="fa fa-map-marker" aria-hidden="true"></i>
										                            Pasadena, CA
										                        </span>
										                        <h4 class="property-grid-title-v2">
										                        	<a href="single-property.html" class="property-link">
										                            	Maison de vaccances en campagne
										                            </a>
										                        </h4>
										                    </div>
										                    <div class="casaroyal-property-agent-name">
										                    	<i class="fa fa-user-circle" aria-hidden="true"></i>
										                    	<a href="single-agent.html">Alain Alain</a>
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
								</div>
							</div>
						</div>

                    </div>

                    <div class="col-md-8">

						<!-- Search Results Grid -->
						<div class="row blog-big-cards">

							<!-- Post -->
							<div class="col-md-12 post">

								<div class="casaroyal-search-card">

									<div class="casaroyal-search-card-image casaroyal-post-card-image">

										<a href="single-post.html">
											<span></span>
											<span></span>
											<span></span>
											<div class="mask"></div>
											<img src="assets/images/posts/post-big-1.jpg" alt="13 Tips And Tricks For Selling Homes">
										</a>

									</div>

									<div class="casaroyal-search-card-body blog-card-body">

										<div class="casaroyal-categories-post">
											<a href="#" rel="category tag">Articles et conseils</a>
										</div>

										<h2><a href="single-post.html/">13 trucs et astuces pour vendre des maisons</a></h2>

										<p class="post-preview">Vendre sa maison n'est pas de tout repos. Estimation, mise en vente, obligations légales.Il est toujours un peu stressant de mettre sa propriété sur le marché. Nous vous donons des conseils…</p>

										<span class="casaroyal-search-card-body-meta">

											<span class="post-meta-item">
												<span class="post-meta-icon">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 482.9 482.9" style="enable-background:new 0 0 482.9 482.9;" xml:space="preserve">
														<g>
															<g>
																<path d="M239.7,260.2c0.5,0,1,0,1.6,0c0.2,0,0.4,0,0.6,0c0.3,0,0.7,0,1,0c29.3-0.5,53-10.8,70.5-30.5
																	c38.5-43.4,32.1-117.8,31.4-124.9c-2.5-53.3-27.7-78.8-48.5-90.7C280.8,5.2,262.7,0.4,242.5,0h-0.7c-0.1,0-0.3,0-0.4,0h-0.6
																	c-11.1,0-32.9,1.8-53.8,13.7c-21,11.9-46.6,37.4-49.1,91.1c-0.7,7.1-7.1,81.5,31.4,124.9C186.7,249.4,210.4,259.7,239.7,260.2z
																	 M164.6,107.3c0-0.3,0.1-0.6,0.1-0.8c3.3-71.7,54.2-79.4,76-79.4h0.4c0.2,0,0.5,0,0.8,0c27,0.6,72.9,11.6,76,79.4
																	c0,0.3,0,0.6,0.1,0.8c0.1,0.7,7.1,68.7-24.7,104.5c-12.6,14.2-29.4,21.2-51.5,21.4c-0.2,0-0.3,0-0.5,0l0,0c-0.2,0-0.3,0-0.5,0
																	c-22-0.2-38.9-7.2-51.4-21.4C157.7,176.2,164.5,107.9,164.6,107.3z"></path>
																<path d="M446.8,383.6c0-0.1,0-0.2,0-0.3c0-0.8-0.1-1.6-0.1-2.5c-0.6-19.8-1.9-66.1-45.3-80.9c-0.3-0.1-0.7-0.2-1-0.3
																	c-45.1-11.5-82.6-37.5-83-37.8c-6.1-4.3-14.5-2.8-18.8,3.3c-4.3,6.1-2.8,14.5,3.3,18.8c1.7,1.2,41.5,28.9,91.3,41.7
																	c23.3,8.3,25.9,33.2,26.6,56c0,0.9,0,1.7,0.1,2.5c0.1,9-0.5,22.9-2.1,30.9c-16.2,9.2-79.7,41-176.3,41
																	c-96.2,0-160.1-31.9-176.4-41.1c-1.6-8-2.3-21.9-2.1-30.9c0-0.8,0.1-1.6,0.1-2.5c0.7-22.8,3.3-47.7,26.6-56
																	c49.8-12.8,89.6-40.6,91.3-41.7c6.1-4.3,7.6-12.7,3.3-18.8c-4.3-6.1-12.7-7.6-18.8-3.3c-0.4,0.3-37.7,26.3-83,37.8
																	c-0.4,0.1-0.7,0.2-1,0.3c-43.4,14.9-44.7,61.2-45.3,80.9c0,0.9,0,1.7-0.1,2.5c0,0.1,0,0.2,0,0.3c-0.1,5.2-0.2,31.9,5.1,45.3
																	c1,2.6,2.8,4.8,5.2,6.3c3,2,74.9,47.8,195.2,47.8s192.2-45.9,195.2-47.8c2.3-1.5,4.2-3.7,5.2-6.3
																	C447,415.5,446.9,388.8,446.8,383.6z"></path>
															</g>
														</g>
													</svg>
												</span>
												<a href="#" title="Posts par ACG_immobilier" rel="author">AFRIC CONSULTING GROUP</a>
											</span>

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
												<a href="single-post.html">12 Octobre 2021</a>
											</span>

											<span class="post-meta-item">
												<span class="post-meta-icon">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="511.626px" height="511.627px" viewBox="0 0 511.626 511.627" style="enable-background:new 0 0 511.626 511.627;" xml:space="preserve">
														<g>
															<path d="M477.364,127.481c-22.839-28.072-53.864-50.248-93.072-66.522c-39.208-16.274-82.036-24.41-128.479-24.41
																c-46.442,0-89.269,8.136-128.478,24.41c-39.209,16.274-70.233,38.446-93.074,66.522C11.419,155.555,0,186.15,0,219.269
																c0,28.549,8.61,55.299,25.837,80.232c17.227,24.934,40.778,45.874,70.664,62.813c-2.096,7.611-4.57,14.842-7.426,21.7
																c-2.855,6.851-5.424,12.467-7.708,16.847c-2.286,4.374-5.376,9.23-9.281,14.555c-3.899,5.332-6.849,9.093-8.848,11.283
																c-1.997,2.19-5.28,5.801-9.851,10.848c-4.565,5.041-7.517,8.33-8.848,9.853c-0.193,0.097-0.953,0.948-2.285,2.574
																c-1.331,1.615-1.999,2.419-1.999,2.419l-1.713,2.57c-0.953,1.42-1.381,2.327-1.287,2.703c0.096,0.384-0.094,1.335-0.57,2.854
																c-0.477,1.526-0.428,2.669,0.142,3.429v0.287c0.762,3.234,2.283,5.853,4.567,7.851c2.284,1.992,4.858,2.991,7.71,2.991h1.429
																c12.375-1.526,23.223-3.613,32.548-6.279c49.87-12.751,93.649-35.782,131.334-69.094c14.274,1.523,28.074,2.283,41.396,2.283
																c46.442,0,89.271-8.135,128.479-24.414c39.208-16.276,70.233-38.444,93.072-66.517c22.843-28.072,34.263-58.67,34.263-91.789
																C511.626,186.154,500.207,155.555,477.364,127.481z M445.244,292.075c-19.896,22.456-46.733,40.303-80.517,53.529
																c-33.784,13.223-70.093,19.842-108.921,19.842c-11.609,0-23.98-0.76-37.113-2.286l-16.274-1.708l-12.277,10.852
																c-23.408,20.558-49.582,36.829-78.513,48.821c8.754-15.414,15.416-31.785,19.986-49.102l7.708-27.412l-24.838-14.27
																c-24.744-14.093-43.918-30.793-57.53-50.114c-13.61-19.315-20.412-39.638-20.412-60.954c0-26.077,9.945-50.343,29.834-72.803
																c19.895-22.458,46.729-40.303,80.515-53.531c33.786-13.229,70.089-19.849,108.92-19.849c38.828,0,75.13,6.617,108.914,19.845
																c33.783,13.229,60.62,31.073,80.517,53.531c19.89,22.46,29.834,46.727,29.834,72.802S465.133,269.615,445.244,292.075z"></path>
														</g>
													</svg>
												</span>
												<a href="single-post.html#comments">2</a>
											</span>

											<span class="post-meta-item">
												<span class="post-meta-icon">
													<svg version="1.1" \xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 487.1" style="enable-background:new 0 0 612 487.1;" xml:space="preserve">
														<g>
															<g>
																<path d="M601.5,216.3c-6.6-7.8-13.6-15-20.3-21.6c-38.8-38.3-80.5-70.2-126.6-94.1c-33-17.1-65.4-28.3-96.7-33.9
																	c-18.9-3.4-36.2-4.3-51.5-4.3c-16,0-33.7,0.8-52.5,4.3c-31.7,5.8-64.1,17.1-96.7,33.9c-44.8,23.1-86.8,54.8-126.6,94.1
																	c-7.7,7.6-14.4,14.6-20.3,21.6c-13.7,16.2-13.7,37.6,0,53.8c16.2,19.3,37.9,39.5,65.1,61.2c57.9,46.1,114.6,75.4,170.2,87.4
																	c19.6,4.2,39.9,6,60.8,6c20.3,0,40.3-1.8,59.8-6c56.2-12.1,113.1-41.2,170.8-87.4c29-23.2,50.1-43.9,64.5-61.2
																	C615.4,253.5,615.6,232.8,601.5,216.3z M573.6,246.2c-14.6,18-34.8,36.6-59.8,56.5c-52.4,41.9-104,69.1-155.2,79.8
																	c-18.9,3.9-36.2,5.3-52.2,5.3h-1c-16.3,0-33.3-1.5-51.5-5.3c-50.6-10.8-102.6-37.3-155.9-79.8c-25.1-20-44.9-38.9-59.2-56.5
																	c-2.3-1.7-2.3-3.7,0-6c1.7-2.3,4.6-5.7,8.6-10c4.2-4.4,7.3-7.6,9-9.6c38.6-37.9,77.9-66.5,117.7-86.4
																	c31.7-15.9,60.5-26.5,86.4-30.9c15-2.6,30.2-4,45.9-4c15,0,29.9,1.3,45.5,4c26.3,4.6,55.1,15.1,86.4,30.9
																	c40.5,20.4,79.4,48.9,117,86.4c8.6,8.6,14.7,15.2,18.3,19.6C575.4,242.5,575.3,244.6,573.6,246.2z"></path>
																<path d="M306.4,126.6c-32.2,0-60.2,11.3-83.1,34.2c-22.9,22.9-34.2,50.5-34.2,82.8c0,32.2,11.2,59.6,34.2,82.4
																	c22.9,22.7,50.9,33.9,83.1,33.9c32.2,0,59.5-11.3,82.1-33.9c22.9-22.9,34.2-50.2,34.2-82.4c0-32.2-11.4-59.7-34.2-82.8
																	C365.8,138,338.6,126.6,306.4,126.6z M362.6,300.1c-15.6,15.6-34.2,23.3-56.2,23.3c-22.3,0-41.2-8-56.8-23.6
																	c-15.6-15.6-23.6-34.6-23.6-56.2c0-22.3,8-40.9,23.6-56.5c15.6-15.6,34.6-23.6,56.8-23.6c22.3,0,40.8,8.1,56.2,23.6
																	c15.5,15.7,23.3,34.2,23.3,56.5C385.8,265.5,378.2,284.5,362.6,300.1z"></path>
															</g>
														</g>
													</svg>
												</span>
												<a href="single-post.html">77</a>
											</span>

										</span>

									</div>

								</div>

							</div>
							<!-- Post -->

							<!-- Post -->
							<div class="col-md-12 post">

								<div class="casaroyal-search-card">

									<div class="casaroyal-search-card-image casaroyal-post-card-image">

										<a href="single-post.html">
											<span></span>
											<span></span>
											<span></span>
											<div class="mask"></div>
											<img src="assets/images/posts/post-big-2.jpg" alt="13 Tips And Tricks For Selling Homes">
										</a>

									</div>

									<div class="casaroyal-search-card-body blog-card-body">

										<div class="casaroyal-categories-post">
											<a href="#" rel="category tag">Articles & Astuces</a>
										</div>

										<h2><a href="single-post.html/">Avantages et inconvénients d'une maison de campagne</a></h2>

										<p class="post-preview">Avec la maison de campagne à partager, les familles bénéficient de tous les avantages d'une sublime maison de campagne, sans en subir les désavantages : fini les corvées de ménage, les mensualités trop lourdes…</p>

										<span class="casaroyal-search-card-body-meta">

											<span class="post-meta-item">
												<span class="post-meta-icon">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 482.9 482.9" style="enable-background:new 0 0 482.9 482.9;" xml:space="preserve">
														<g>
															<g>
																<path d="M239.7,260.2c0.5,0,1,0,1.6,0c0.2,0,0.4,0,0.6,0c0.3,0,0.7,0,1,0c29.3-0.5,53-10.8,70.5-30.5
																	c38.5-43.4,32.1-117.8,31.4-124.9c-2.5-53.3-27.7-78.8-48.5-90.7C280.8,5.2,262.7,0.4,242.5,0h-0.7c-0.1,0-0.3,0-0.4,0h-0.6
																	c-11.1,0-32.9,1.8-53.8,13.7c-21,11.9-46.6,37.4-49.1,91.1c-0.7,7.1-7.1,81.5,31.4,124.9C186.7,249.4,210.4,259.7,239.7,260.2z
																	 M164.6,107.3c0-0.3,0.1-0.6,0.1-0.8c3.3-71.7,54.2-79.4,76-79.4h0.4c0.2,0,0.5,0,0.8,0c27,0.6,72.9,11.6,76,79.4
																	c0,0.3,0,0.6,0.1,0.8c0.1,0.7,7.1,68.7-24.7,104.5c-12.6,14.2-29.4,21.2-51.5,21.4c-0.2,0-0.3,0-0.5,0l0,0c-0.2,0-0.3,0-0.5,0
																	c-22-0.2-38.9-7.2-51.4-21.4C157.7,176.2,164.5,107.9,164.6,107.3z"></path>
																<path d="M446.8,383.6c0-0.1,0-0.2,0-0.3c0-0.8-0.1-1.6-0.1-2.5c-0.6-19.8-1.9-66.1-45.3-80.9c-0.3-0.1-0.7-0.2-1-0.3
																	c-45.1-11.5-82.6-37.5-83-37.8c-6.1-4.3-14.5-2.8-18.8,3.3c-4.3,6.1-2.8,14.5,3.3,18.8c1.7,1.2,41.5,28.9,91.3,41.7
																	c23.3,8.3,25.9,33.2,26.6,56c0,0.9,0,1.7,0.1,2.5c0.1,9-0.5,22.9-2.1,30.9c-16.2,9.2-79.7,41-176.3,41
																	c-96.2,0-160.1-31.9-176.4-41.1c-1.6-8-2.3-21.9-2.1-30.9c0-0.8,0.1-1.6,0.1-2.5c0.7-22.8,3.3-47.7,26.6-56
																	c49.8-12.8,89.6-40.6,91.3-41.7c6.1-4.3,7.6-12.7,3.3-18.8c-4.3-6.1-12.7-7.6-18.8-3.3c-0.4,0.3-37.7,26.3-83,37.8
																	c-0.4,0.1-0.7,0.2-1,0.3c-43.4,14.9-44.7,61.2-45.3,80.9c0,0.9,0,1.7-0.1,2.5c0,0.1,0,0.2,0,0.3c-0.1,5.2-0.2,31.9,5.1,45.3
																	c1,2.6,2.8,4.8,5.2,6.3c3,2,74.9,47.8,195.2,47.8s192.2-45.9,195.2-47.8c2.3-1.5,4.2-3.7,5.2-6.3
																	C447,415.5,446.9,388.8,446.8,383.6z"></path>
															</g>
														</g>
													</svg>
												</span>
												<a href="#" title="Posts par ACG_immobilier" rel="author">AFRIC CONSULTING GROUP</a>
											</span>

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
												<a href="single-post.html">12 Octobre 2021</a>
											</span>

											<span class="post-meta-item">
												<span class="post-meta-icon">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="511.626px" height="511.627px" viewBox="0 0 511.626 511.627" style="enable-background:new 0 0 511.626 511.627;" xml:space="preserve">
														<g>
															<path d="M477.364,127.481c-22.839-28.072-53.864-50.248-93.072-66.522c-39.208-16.274-82.036-24.41-128.479-24.41
																c-46.442,0-89.269,8.136-128.478,24.41c-39.209,16.274-70.233,38.446-93.074,66.522C11.419,155.555,0,186.15,0,219.269
																c0,28.549,8.61,55.299,25.837,80.232c17.227,24.934,40.778,45.874,70.664,62.813c-2.096,7.611-4.57,14.842-7.426,21.7
																c-2.855,6.851-5.424,12.467-7.708,16.847c-2.286,4.374-5.376,9.23-9.281,14.555c-3.899,5.332-6.849,9.093-8.848,11.283
																c-1.997,2.19-5.28,5.801-9.851,10.848c-4.565,5.041-7.517,8.33-8.848,9.853c-0.193,0.097-0.953,0.948-2.285,2.574
																c-1.331,1.615-1.999,2.419-1.999,2.419l-1.713,2.57c-0.953,1.42-1.381,2.327-1.287,2.703c0.096,0.384-0.094,1.335-0.57,2.854
																c-0.477,1.526-0.428,2.669,0.142,3.429v0.287c0.762,3.234,2.283,5.853,4.567,7.851c2.284,1.992,4.858,2.991,7.71,2.991h1.429
																c12.375-1.526,23.223-3.613,32.548-6.279c49.87-12.751,93.649-35.782,131.334-69.094c14.274,1.523,28.074,2.283,41.396,2.283
																c46.442,0,89.271-8.135,128.479-24.414c39.208-16.276,70.233-38.444,93.072-66.517c22.843-28.072,34.263-58.67,34.263-91.789
																C511.626,186.154,500.207,155.555,477.364,127.481z M445.244,292.075c-19.896,22.456-46.733,40.303-80.517,53.529
																c-33.784,13.223-70.093,19.842-108.921,19.842c-11.609,0-23.98-0.76-37.113-2.286l-16.274-1.708l-12.277,10.852
																c-23.408,20.558-49.582,36.829-78.513,48.821c8.754-15.414,15.416-31.785,19.986-49.102l7.708-27.412l-24.838-14.27
																c-24.744-14.093-43.918-30.793-57.53-50.114c-13.61-19.315-20.412-39.638-20.412-60.954c0-26.077,9.945-50.343,29.834-72.803
																c19.895-22.458,46.729-40.303,80.515-53.531c33.786-13.229,70.089-19.849,108.92-19.849c38.828,0,75.13,6.617,108.914,19.845
																c33.783,13.229,60.62,31.073,80.517,53.531c19.89,22.46,29.834,46.727,29.834,72.802S465.133,269.615,445.244,292.075z"></path>
														</g>
													</svg>
												</span>
												<a href="single-post.html#comments">2</a>
											</span>

											<span class="post-meta-item">
												<span class="post-meta-icon">
													<svg version="1.1" \xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 487.1" style="enable-background:new 0 0 612 487.1;" xml:space="preserve">
														<g>
															<g>
																<path d="M601.5,216.3c-6.6-7.8-13.6-15-20.3-21.6c-38.8-38.3-80.5-70.2-126.6-94.1c-33-17.1-65.4-28.3-96.7-33.9
																	c-18.9-3.4-36.2-4.3-51.5-4.3c-16,0-33.7,0.8-52.5,4.3c-31.7,5.8-64.1,17.1-96.7,33.9c-44.8,23.1-86.8,54.8-126.6,94.1
																	c-7.7,7.6-14.4,14.6-20.3,21.6c-13.7,16.2-13.7,37.6,0,53.8c16.2,19.3,37.9,39.5,65.1,61.2c57.9,46.1,114.6,75.4,170.2,87.4
																	c19.6,4.2,39.9,6,60.8,6c20.3,0,40.3-1.8,59.8-6c56.2-12.1,113.1-41.2,170.8-87.4c29-23.2,50.1-43.9,64.5-61.2
																	C615.4,253.5,615.6,232.8,601.5,216.3z M573.6,246.2c-14.6,18-34.8,36.6-59.8,56.5c-52.4,41.9-104,69.1-155.2,79.8
																	c-18.9,3.9-36.2,5.3-52.2,5.3h-1c-16.3,0-33.3-1.5-51.5-5.3c-50.6-10.8-102.6-37.3-155.9-79.8c-25.1-20-44.9-38.9-59.2-56.5
																	c-2.3-1.7-2.3-3.7,0-6c1.7-2.3,4.6-5.7,8.6-10c4.2-4.4,7.3-7.6,9-9.6c38.6-37.9,77.9-66.5,117.7-86.4
																	c31.7-15.9,60.5-26.5,86.4-30.9c15-2.6,30.2-4,45.9-4c15,0,29.9,1.3,45.5,4c26.3,4.6,55.1,15.1,86.4,30.9
																	c40.5,20.4,79.4,48.9,117,86.4c8.6,8.6,14.7,15.2,18.3,19.6C575.4,242.5,575.3,244.6,573.6,246.2z"></path>
																<path d="M306.4,126.6c-32.2,0-60.2,11.3-83.1,34.2c-22.9,22.9-34.2,50.5-34.2,82.8c0,32.2,11.2,59.6,34.2,82.4
																	c22.9,22.7,50.9,33.9,83.1,33.9c32.2,0,59.5-11.3,82.1-33.9c22.9-22.9,34.2-50.2,34.2-82.4c0-32.2-11.4-59.7-34.2-82.8
																	C365.8,138,338.6,126.6,306.4,126.6z M362.6,300.1c-15.6,15.6-34.2,23.3-56.2,23.3c-22.3,0-41.2-8-56.8-23.6
																	c-15.6-15.6-23.6-34.6-23.6-56.2c0-22.3,8-40.9,23.6-56.5c15.6-15.6,34.6-23.6,56.8-23.6c22.3,0,40.8,8.1,56.2,23.6
																	c15.5,15.7,23.3,34.2,23.3,56.5C385.8,265.5,378.2,284.5,362.6,300.1z"></path>
															</g>
														</g>
													</svg>
												</span>
												<a href="single-post.html">77</a>
											</span>

										</span>

									</div>

								</div>

							</div>
							<!-- Post -->

							<!-- Post -->
							<div class="col-md-12 post">

								<div class="casaroyal-search-card">

									<div class="casaroyal-search-card-image casaroyal-post-card-image">

										<a href="single-post.html">
											<span></span>
											<span></span>
											<span></span>
											<div class="mask"></div>
											<img src="assets/images/posts/post-big-3.jpg" alt="13 Tips And Tricks For Selling Homes">
										</a>

									</div>

									<div class="casaroyal-search-card-body blog-card-body">

										<div class="casaroyal-categories-post">
											<a href="#" rel="category tag">Articles & Astuces</a>
										</div>

										<h2><a href="single-post.html/">Acheter une maison</a></h2>

										<p class="post-preview">ACG_immobilier vous propose un large choix de biens immobiliers à l'achat : maison, appartement, terrain, stationnement, local commercial Achat d'une maison ou d'un appartement : de nombreux conseils pour bien acheter votre bien immobilier.…</p>

										<span class="casaroyal-search-card-body-meta">

											<span class="post-meta-item">
												<span class="post-meta-icon">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 482.9 482.9" style="enable-background:new 0 0 482.9 482.9;" xml:space="preserve">
														<g>
															<g>
																<path d="M239.7,260.2c0.5,0,1,0,1.6,0c0.2,0,0.4,0,0.6,0c0.3,0,0.7,0,1,0c29.3-0.5,53-10.8,70.5-30.5
																	c38.5-43.4,32.1-117.8,31.4-124.9c-2.5-53.3-27.7-78.8-48.5-90.7C280.8,5.2,262.7,0.4,242.5,0h-0.7c-0.1,0-0.3,0-0.4,0h-0.6
																	c-11.1,0-32.9,1.8-53.8,13.7c-21,11.9-46.6,37.4-49.1,91.1c-0.7,7.1-7.1,81.5,31.4,124.9C186.7,249.4,210.4,259.7,239.7,260.2z
																	 M164.6,107.3c0-0.3,0.1-0.6,0.1-0.8c3.3-71.7,54.2-79.4,76-79.4h0.4c0.2,0,0.5,0,0.8,0c27,0.6,72.9,11.6,76,79.4
																	c0,0.3,0,0.6,0.1,0.8c0.1,0.7,7.1,68.7-24.7,104.5c-12.6,14.2-29.4,21.2-51.5,21.4c-0.2,0-0.3,0-0.5,0l0,0c-0.2,0-0.3,0-0.5,0
																	c-22-0.2-38.9-7.2-51.4-21.4C157.7,176.2,164.5,107.9,164.6,107.3z"></path>
																<path d="M446.8,383.6c0-0.1,0-0.2,0-0.3c0-0.8-0.1-1.6-0.1-2.5c-0.6-19.8-1.9-66.1-45.3-80.9c-0.3-0.1-0.7-0.2-1-0.3
																	c-45.1-11.5-82.6-37.5-83-37.8c-6.1-4.3-14.5-2.8-18.8,3.3c-4.3,6.1-2.8,14.5,3.3,18.8c1.7,1.2,41.5,28.9,91.3,41.7
																	c23.3,8.3,25.9,33.2,26.6,56c0,0.9,0,1.7,0.1,2.5c0.1,9-0.5,22.9-2.1,30.9c-16.2,9.2-79.7,41-176.3,41
																	c-96.2,0-160.1-31.9-176.4-41.1c-1.6-8-2.3-21.9-2.1-30.9c0-0.8,0.1-1.6,0.1-2.5c0.7-22.8,3.3-47.7,26.6-56
																	c49.8-12.8,89.6-40.6,91.3-41.7c6.1-4.3,7.6-12.7,3.3-18.8c-4.3-6.1-12.7-7.6-18.8-3.3c-0.4,0.3-37.7,26.3-83,37.8
																	c-0.4,0.1-0.7,0.2-1,0.3c-43.4,14.9-44.7,61.2-45.3,80.9c0,0.9,0,1.7-0.1,2.5c0,0.1,0,0.2,0,0.3c-0.1,5.2-0.2,31.9,5.1,45.3
																	c1,2.6,2.8,4.8,5.2,6.3c3,2,74.9,47.8,195.2,47.8s192.2-45.9,195.2-47.8c2.3-1.5,4.2-3.7,5.2-6.3
																	C447,415.5,446.9,388.8,446.8,383.6z"></path>
															</g>
														</g>
													</svg>
												</span>
												<a href="#" title="Posts par ACG_immobilier" rel="author">AFRIC CONSULTING GROUP</a>
											</span>

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
												<a href="single-post.html">12 OctobrE 2021</a>
											</span>

											<span class="post-meta-item">
												<span class="post-meta-icon">
													<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="511.626px" height="511.627px" viewBox="0 0 511.626 511.627" style="enable-background:new 0 0 511.626 511.627;" xml:space="preserve">
														<g>
															<path d="M477.364,127.481c-22.839-28.072-53.864-50.248-93.072-66.522c-39.208-16.274-82.036-24.41-128.479-24.41
																c-46.442,0-89.269,8.136-128.478,24.41c-39.209,16.274-70.233,38.446-93.074,66.522C11.419,155.555,0,186.15,0,219.269
																c0,28.549,8.61,55.299,25.837,80.232c17.227,24.934,40.778,45.874,70.664,62.813c-2.096,7.611-4.57,14.842-7.426,21.7
																c-2.855,6.851-5.424,12.467-7.708,16.847c-2.286,4.374-5.376,9.23-9.281,14.555c-3.899,5.332-6.849,9.093-8.848,11.283
																c-1.997,2.19-5.28,5.801-9.851,10.848c-4.565,5.041-7.517,8.33-8.848,9.853c-0.193,0.097-0.953,0.948-2.285,2.574
																c-1.331,1.615-1.999,2.419-1.999,2.419l-1.713,2.57c-0.953,1.42-1.381,2.327-1.287,2.703c0.096,0.384-0.094,1.335-0.57,2.854
																c-0.477,1.526-0.428,2.669,0.142,3.429v0.287c0.762,3.234,2.283,5.853,4.567,7.851c2.284,1.992,4.858,2.991,7.71,2.991h1.429
																c12.375-1.526,23.223-3.613,32.548-6.279c49.87-12.751,93.649-35.782,131.334-69.094c14.274,1.523,28.074,2.283,41.396,2.283
																c46.442,0,89.271-8.135,128.479-24.414c39.208-16.276,70.233-38.444,93.072-66.517c22.843-28.072,34.263-58.67,34.263-91.789
																C511.626,186.154,500.207,155.555,477.364,127.481z M445.244,292.075c-19.896,22.456-46.733,40.303-80.517,53.529
																c-33.784,13.223-70.093,19.842-108.921,19.842c-11.609,0-23.98-0.76-37.113-2.286l-16.274-1.708l-12.277,10.852
																c-23.408,20.558-49.582,36.829-78.513,48.821c8.754-15.414,15.416-31.785,19.986-49.102l7.708-27.412l-24.838-14.27
																c-24.744-14.093-43.918-30.793-57.53-50.114c-13.61-19.315-20.412-39.638-20.412-60.954c0-26.077,9.945-50.343,29.834-72.803
																c19.895-22.458,46.729-40.303,80.515-53.531c33.786-13.229,70.089-19.849,108.92-19.849c38.828,0,75.13,6.617,108.914,19.845
																c33.783,13.229,60.62,31.073,80.517,53.531c19.89,22.46,29.834,46.727,29.834,72.802S465.133,269.615,445.244,292.075z"></path>
														</g>
													</svg>
												</span>
												<a href="single-post.html#comments">2</a>
											</span>

											<span class="post-meta-item">
												<span class="post-meta-icon">
													<svg version="1.1" \xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 487.1" style="enable-background:new 0 0 612 487.1;" xml:space="preserve">
														<g>
															<g>
																<path d="M601.5,216.3c-6.6-7.8-13.6-15-20.3-21.6c-38.8-38.3-80.5-70.2-126.6-94.1c-33-17.1-65.4-28.3-96.7-33.9
																	c-18.9-3.4-36.2-4.3-51.5-4.3c-16,0-33.7,0.8-52.5,4.3c-31.7,5.8-64.1,17.1-96.7,33.9c-44.8,23.1-86.8,54.8-126.6,94.1
																	c-7.7,7.6-14.4,14.6-20.3,21.6c-13.7,16.2-13.7,37.6,0,53.8c16.2,19.3,37.9,39.5,65.1,61.2c57.9,46.1,114.6,75.4,170.2,87.4
																	c19.6,4.2,39.9,6,60.8,6c20.3,0,40.3-1.8,59.8-6c56.2-12.1,113.1-41.2,170.8-87.4c29-23.2,50.1-43.9,64.5-61.2
																	C615.4,253.5,615.6,232.8,601.5,216.3z M573.6,246.2c-14.6,18-34.8,36.6-59.8,56.5c-52.4,41.9-104,69.1-155.2,79.8
																	c-18.9,3.9-36.2,5.3-52.2,5.3h-1c-16.3,0-33.3-1.5-51.5-5.3c-50.6-10.8-102.6-37.3-155.9-79.8c-25.1-20-44.9-38.9-59.2-56.5
																	c-2.3-1.7-2.3-3.7,0-6c1.7-2.3,4.6-5.7,8.6-10c4.2-4.4,7.3-7.6,9-9.6c38.6-37.9,77.9-66.5,117.7-86.4
																	c31.7-15.9,60.5-26.5,86.4-30.9c15-2.6,30.2-4,45.9-4c15,0,29.9,1.3,45.5,4c26.3,4.6,55.1,15.1,86.4,30.9
																	c40.5,20.4,79.4,48.9,117,86.4c8.6,8.6,14.7,15.2,18.3,19.6C575.4,242.5,575.3,244.6,573.6,246.2z"></path>
																<path d="M306.4,126.6c-32.2,0-60.2,11.3-83.1,34.2c-22.9,22.9-34.2,50.5-34.2,82.8c0,32.2,11.2,59.6,34.2,82.4
																	c22.9,22.7,50.9,33.9,83.1,33.9c32.2,0,59.5-11.3,82.1-33.9c22.9-22.9,34.2-50.2,34.2-82.4c0-32.2-11.4-59.7-34.2-82.8
																	C365.8,138,338.6,126.6,306.4,126.6z M362.6,300.1c-15.6,15.6-34.2,23.3-56.2,23.3c-22.3,0-41.2-8-56.8-23.6
																	c-15.6-15.6-23.6-34.6-23.6-56.2c0-22.3,8-40.9,23.6-56.5c15.6-15.6,34.6-23.6,56.8-23.6c22.3,0,40.8,8.1,56.2,23.6
																	c15.5,15.7,23.3,34.2,23.3,56.5C385.8,265.5,378.2,284.5,362.6,300.1z"></path>
															</g>
														</g>
													</svg>
												</span>
												<a href="single-post.html">77</a>
											</span>

										</span>

									</div>

								</div>

							</div>
							<!-- Post -->

                            <!-- Post -->
							{{--  @props(['post'])
                                <div class="s-hero__slide">
                                <div class="s-hero__slide-bg" style="background-image: url('storage/photos/{{ $post->user->id }}/{{ $post->image }}')"></div>
                                <div class="row s-hero__slide-content animate-this">
                                    <div class="column">
                                        <div class="s-hero__slide-meta">
                                            <span class="cat-links">
                                                @foreach($post->categories as $category)
                                                    <a href="#">{{ $category->title }}</a>
                                                @endforeach
                                            </span>
                                            <span class="byline">
                                                @lang('Posted By')
                                                <span class="author">
                                                    <a href="#">{{ $post->user->name }}</a>
                                                </span>
                                            </span>
                                        </div>
                                        <h1 class="s-hero__slide-text">
                                            <a href="#">{{ $post->title }}</a>
                                        </h1>
                                    </div>
                                </div>
                                </div>  --}}
							<!-- Post -->

						</div>
						<!-- Search Results Grid -->

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
