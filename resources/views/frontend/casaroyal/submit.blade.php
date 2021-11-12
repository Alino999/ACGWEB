@extends('layouts.layout')

@section('content')


		<!-- Title Section -->
    	<div class="casaroyal-section">

			<div class="casaroyal-page-title property-banner has-image-bg paralax-background">

	            <div class="container">
	                <span>Soumettre l'annonce</span>
	            </div>

	            <div class="casaroyal-page-title-shadow"></div>
	            <div class="casaroyal-page-title-image-background" data-parallax="scroll" data-image-src="assets/images/newport-beach.jpg"></div>

            </div>
        </div>
        <!-- Title Section -->

		<!-- Content Section -->
		<div class="casaroyal-section page-wrapper">

			<div class="container">

				<form id="submit-listing-form" class="submit-listing-form clearfix" method="post">

	        		<div class="row">

	            		<div class="col-md-12">
	            			<h4 class="casaroyal-title-wrapper">
		            			Information Basique
		            		</h4>
	            		</div>

	            		<div class="col-md-12">

            				<label>*Titre (obligatoire)</label>
            				<input type="text" name="titre" id="casaroyal_property_title" value="">

            			</div>

            			<div class="col-md-4">

            				<label>Prix ​​de vente ou de location (chiffres seulement)</label>
            				<input class="numericonly" type="text" name="ft_property_price" id="ft_property_price" value="">
            				<p class="description">Exemple Valeur: 435000</p>

            			</div>

            			<div class="col-md-4">

            				<label>Monnaie</label>
            				<input type="text" name="ft_property_currency" id="ft_property_currency" value="">
            				<p class="description">Exemple: fcfa</p>

            			</div>

            			<div class="col-md-4">

            				<label>Préfixe de prix</label>
            				<input type="text" name="ft_property_price_prefix" id="ft_property_price_prefix" value="">
            				<p class="description">Exemple Valeur: De</p>

            			</div>

            			<div class="col-md-4">

            				<label>Prix ​​Postfix</label>
            				<input type="text" name="ft_property_price_postfix" id="ft_property_price_postfix" value="">
            				<p class="description">Exemple Valeur: Par mois</p>

            			</div>

            			<div class="col-md-4">

            				<label>Taille de la zone (chiffres uniquement)</label>
            				<input class="numericonly" type="text" name="ft_property_size" id="ft_property_size" value="">
            				<p class="description">Exemple Valeur: 25000</p>

            			</div>

            			<div class="col-md-4">

            				<label>Taille Postfix</label>
            				<input type="text" name="ft_property_size_postfix" id="ft_property_size_postfix" value="">
            				<p class="description">Exemple Valeur: Sq Ft</p>

            			</div>

            			<div class="col-md-4">

            				<label>Chambres</label>
            				<input class="numericonly" type="text" name="ft_property_bedrooms" id="ft_property_bedrooms" value="">
            				<p class="description">Exemple Valeur: 4</p>

            			</div>

            			<div class="col-md-4">

            				<label>Salles de bain</label>
            				<input class="numericonly" type="text" name="ft_property_bathrooms" id="ft_property_bathrooms" value="">
            				<p class="description">Exemple Valeur: 4</p>

            			</div>

            			<div class="col-md-4">

            				<label>Garages</label>
            				<input class="numericonly" type="text" name="ft_property_garage" id="ft_property_garage" value="">
            				<p class="description">Exemple Valeur: 2</p>

            			</div>

				        <div class="col-md-6">

	            			<label for="select-status">Type</label>
					        <span class="selectwrap">
					            <select name="casaroyal-property-type" id="select-property-type" class="search-select">
					            	<option value="32">Commercial</option>
					            	<option value="33">- Bureau</option>
					            	<option value="34">- Boutique</option>
					            	<option value="35">Copropriété</option>
					            	<option value="36">Residentiel</option>
					            	<option value="37">- Apartement</option>
					            	<option value="38">- Maison</option>
					            	<option value="39">- Tour Residentielle </option>
					            	<option value="40">- Maison des vaccances</option>
					            </select>
					        </span>

				        </div>

				        <div class="col-md-6">

	            			<label for="select-status">Statut</label>
					        <span class="selectwrap">
					            <select name="casaroyal-property-status" id="select-status" class="search-select">
					            	<option value="47">À Louer</option>
					            	<option value="48">À Vendre</option>
					            </select>
					        </span>

				        </div>

				        <div class="col-md-12">
	            			<h4 class="casaroyal-title-wrapper">
		            			Location
		            		</h4>
	            		</div>

	            		<div class="col-md-4">

            				<label>Ville</label>
            				<input type="text" name="ft_property_address_city" id="ft_property_address_city" value="">

            			</div>

            			<div class="col-md-4">

            				<label>Zone</label>
            				<input type="text" name="ft_property_address_neighborhood" id="ft_property_address_neighborhood" value="">

            			</div>

            			<div class="col-md-4">

            				<label>Zip</label>
            				<input type="text" name="ft_property_address_zip" id="ft_property_address_zip" value="">

            			</div>

            			<div class="col-md-6">

            				<label>Pays / État</label>
            				<input type="text" name="ft_property_address_state" id="ft_property_address_state" value="">

            			</div>

            			<div class="col-md-6">

            				<label>Pays</label>
            				<span class="selectwrap">
					            <select name="ft_property_address_country" id="ft_property_address_country" class="search-select">
					                <option value="Algeria">Algérie</option>
					                <option value="Angola">Angola</option>
					                <option value="Benin">Benin</option>
					                <option value="Burkina Faso">Burkina Faso</option>
					                <option value="Burundi">Burundi</option>
					                <option value="Cameroon">Cameroon</option>
					                <option value="Cape Verde">Cape Verde</option>
					                <option value="Central African Republic">Central African Republic</option>
					                <option value="Chad">TChad</option>
					                <option value="Congo">Congo</option>
					                <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
					                <option value="Cote d'ivoire">Cote d'Ivoire</option>
					                <option value="Djibouti">Djibouti</option>
					                <option value="Egypt">Egypt</option>
					                <option value="Ethiopia">Ethiopia</option>
					                <option value="Gabon">Gabon</option>
					                <option value="Gambia">Gambia</option>
					                <option value="Ghana">Ghana</option>
					                <option value="Guinea">Guinea</option>
					                <option value="Guinea-Bissau">Guinea-Bissau</option>
					                <option value="Kenya">Kenya</option>
					                <option value="Lesotho">Lesotho</option>
					                <option value="Liberia">Liberia</option>
					                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
					                <option value="Lithuania">Lithuania</option>
					                <option value="Madagascar">Madagascar</option>
					                <option value="Malawi">Malawi</option>
					                <option value="Malaysia">Malaysia</option>
					                <option value="Mali">Mali</option>
					                <option value="Malta">Malta</option>
					                <option value="Mauritania">Mauritania</option>
					                <option value="Mozambique">Mozambique</option>
					                <option value="Niger">Niger</option>
					                <option value="Nigeria">Nigeria</option>
					                <option value="Rwanda">Rwanda</option>
					                <option value="Senegal">Senegal</option>
					                <option value="Somalia">Somalia</option>
					                <option value="South Africa">South Africa</option>
					                <option value="Togo">Togo</option>
					                <option value="Zambia">Zambia</option>
					                <option value="Zimbabwe">Zimbabwe</option>
					            </select>
					        </span>

            			</div>

            			<div class="col-md-12">

            				<label>Adresse de la carte</label>
            				<input type="text" name="ft_property_address" id="ft_property_address" value="" class="ui-autocomplete-input" autocomplete="off">

            				<input type="hidden" id="casaroyal_property_latitude" name="casaroyal_property_latitude" value="">
							<input type="hidden" id="casaroyal_property_longitude" name="casaroyal_property_longitude" value="">

            			</div>

            			<div class="col-md-12">

            				<label>Emplacement de la propriété sur Google Map</label>
            				<div id="casaroyal_property_map"></div>
            				<p class="description">Faites glisser le marqueur Google Map pour indiquer l'emplacement de votre propriété. Vous pouvez également utiliser le champ d'adresse ci-dessus pour rechercher votre propriété.</p>

            			</div>

            			<div class="col-md-12">
	            			<h4 class="casaroyal-title-wrapper">
		            			Galerie d'images
		            		</h4>
	            		</div>

	            		<div class="col-md-12">

							<div id="casaroyal_upload_images">

		            			<ul class="row ui-sortable" id="up_images">


		            			</ul>

		            			<div class="btn uploadedImages" type="button">
		            				<i class="fa fa-picture-o"></i>
		            				Selectionner Images
		            				<input type="file" class="input-text casaroyal-file-upload" data-file_types="jpg|jpeg|gif|png" multiple="" name="post_gallery" id="post_gallery">
	                            </div>

	                            <input type="hidden" id="casaroyal_property_featured_image" name="casaroyal_property_featured_image" value="">

	                            <p class="casaroyal_image_gallery_legend">* Au moins 1 image est requise pour une soumission valide. La taille minimale est 930/580px.<br>
	                            ** Cliquez sur l'étoile sur l'image pour sélectionner la vedette.<br>
								*** Changer l'ordre des images avec Glisser &amp; Déposer.</p>

			            	</div>

	            		</div>

	            		<div class="col-md-12">
	            			<h4 class="casaroyal-title-wrapper">
		            			Caractéristiques de l'établissement
		            		</h4>
	            		</div>

	            		<div class="col-md-12">

	            			<div class="row">

		            			<div class="col-md-3">

		            				<input type="checkbox" name="casaroyal_features[]" value="16">
		            				<label for="casaroyal_property_map">2 Histoires</label>

		            			</div>

		            			<div class="col-md-3">

		            				<input type="checkbox" name="casaroyal_features[]" value="17">
		            				<label for="casaroyal_property_map">26′ Plafonds</label>

		            			</div>

		            			<div class="col-md-3">

		            				<input type="checkbox" name="casaroyal_features[]" value="18">
		            				<label for="casaroyal_property_map">Chauffage central</label>

		            			</div>

		            			<div class="col-md-3">

		            				<input type="checkbox" name="casaroyal_features[]" value="19">
		            				<label for="casaroyal_property_map">Éviers doubles</label>

		            			</div>

		            			<div class="col-md-3">

		            				<input type="checkbox" name="casaroyal_features[]" value="20">
		            				<label for="casaroyal_property_map">Gamme électrique</label>

		            			</div>

		            			<div class="col-md-3">

		            				<input type="checkbox" name="casaroyal_features[]" value="21">
		            				<label for="casaroyal_property_map">Sortie d'urgence</label>

		            			</div>

		            			<div class="col-md-3">

		            				<input type="checkbox" name="casaroyal_features[]" value="22">
		            				<label for="casaroyal_property_map">Alarme incendie</label>

		            			</div>

		            			<div class="col-md-3">

		            				<input type="checkbox" name="casaroyal_features[]" value="23">
		            				<label for="casaroyal_property_map">Cheminée</label>

		            			</div>

		            			<div class="col-md-3">

		            				<input type="checkbox" name="casaroyal_features[]" value="24">
		            				<label for="casaroyal_property_map">Salle de ciné</label>

		            			</div>

		            			<div class="col-md-3">

		            				<input type="checkbox" name="casaroyal_features[]" value="25">
		            				<label for="casaroyal_property_map">Volets anti-ouragan</label>

		            			</div>

		            			<div class="col-md-3">

		            				<input type="checkbox" name="casaroyal_features[]" value="26">
		            				<label for="casaroyal_property_map">Buanderie</label>

		            			</div>

		            			<div class="col-md-3">

		            				<input type="checkbox" name="casaroyal_features[]" value="27">
		            				<label for="casaroyal_property_map">Pelouse</label>

		            			</div>

		            			<div class="col-md-3">

		            				<input type="checkbox" name="casaroyal_features[]" value="28">
		            				<label for="casaroyal_property_map">Sols en marbre</label>

		            			</div>

		            			<div class="col-md-3">

		            				<input type="checkbox" name="casaroyal_features[]" value="29">
		            				<label for="casaroyal_property_map">À côté de la voie de bus</label>

		            			</div>

		            			<div class="col-md-3">

		            				<input type="checkbox" name="casaroyal_features[]" value="30">
		            				<label for="casaroyal_property_map">Piscine</label>

		            			</div>

		            			<div class="col-md-3">

		            				<input type="checkbox" name="casaroyal_features[]" value="31">
		            				<label for="casaroyal_property_map">Wifi</label>

		            			</div>

							</div>

						</div>

						<div class="col-md-12">
	            			<h4 class="casaroyal-title-wrapper">
		            			Commodités de la propriété
		            		</h4>
	            		</div>

	            		<div class="col-md-12">

		            		<div class="casaroyal_additional_details_wrapper">

								<div class="casaroyal_additional_details row">

									<div class="col-md-6">

										<label>Titre</label>
			            				<input type="text" name="detail-titles[]" value="">

									</div>

									<div class="col-md-6 close-holder">

										<label>Valeur</label>
			            				<input type="text" name="detail-values[]" value="">
			            				<i class="fa fa-plus-circle" aria-hidden="true"></i>

									</div>

								</div>

							</div>

							<span class="casaroyal_new_additional_detail"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>

		            	</div>

		            	<div class="col-md-12">
		            		<div class="submit-login-block">

		            			<i class="casaroyal-loading fa fa-spinner fa-spin fa-fw"></i>

		            			<div class="row div-to-load">

		            				<div class="col-md-12">

		            					<p>Vous êtes actuellement connecté en tant que <strong>utilidateur</strong>. <a id="casaroyal-signout" href="#">Se déconnecter</a></p>

										<div class="custom-checkbox pull-left">
					                      	<label>
					                        	<input type="checkbox" class="property_submit_agree" name="property_submit_agree">
					                        	J'ai lu et je suis d'accord avec la <a href="#">Politique de confidentialité</a>
					                        </label>
					                    </div>

									</div>

									<div class="col-md-12">

										<a id="casaroyal_submit_property_loggedout" href="#" class="btn btn-default">Soumettre la propriété</a>

									</div>

								</div>

		            		</div>
	            		</div>

		            </div>

		        </form>

		   	</div>

		</div>
		<!-- Content Section -->


        @endsection
