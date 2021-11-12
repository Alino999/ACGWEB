@extends('layouts.layout')
@section('content')
<div class="casaroyal-section page-wrapper">
    <div class="container">
            <form id="submit-listing-form" class="submit-listing-form clearfix" action="{{url('anonnce2')}}" method="post">
                @csrf
                <div class="row">
                    <div class="casaroyal-section page-wrapper">
                        <div class="container">
                                <form id="submit-listing-form" class="submit-listing-form clearfix" action="" method="post">
                                    @csrf
                                    <div class="col-md-12">
                                        <h4 class="casaroyal-title-wrapper">
                                            Location
                                        </h4>
                                    </div>

                                    <div class="col-md-4">

                                        <label>Ville</label>
                                        <input type="text" name="ville" id="ft_property_address_city" value="">

                                    </div>

                                    <div class="col-md-4">

                                        <label>Zone</label>
                                        <input type="text" name="zone" id="ft_property_address_neighborhood" value="">

                                    </div>

                                    <div class="col-md-4">

                                        <label>Zip</label>
                                        <input type="text" name="zip" id="ft_property_address_zip" value="">

                                    </div>

                                    <div class="col-md-6">

                                        <label>Pays / État</label>
                                        <input type="text" name="etat" id="ft_property_address_state" value="">

                                    </div>

                                    <div class="col-md-6">

                                        <label>Pays</label>
                                        <span class="selectwrap">
                                            <select name="pays" id="ft_property_address_country" class="search-select">
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
                                        <input type="text" name="adresse" id="ft_property_address" value="" class="ui-autocomplete-input" autocomplete="off">

                                        <input type="hidden" id="casaroyal_property_latitude" name="casaroyal_property_latitude" value="">
                                        <input type="hidden" id="casaroyal_property_longitude" name="casaroyal_property_longitude" value="">

                                    </div>

                                    <div class="col-md-12">

                                        <label>Emplacement de la propriété sur Google Map</label>
                                        <div id="casaroyal_property_map"></div>
                                        <p class="description">Faites glisser le marqueur Google Map pour indiquer l'emplacement de votre propriété. Vous pouvez également utiliser le champ d'adresse ci-dessus pour rechercher votre propriété.</p>

                                    </div>
                                </form>
                        </div>
                    </div>
                    <div class="col-md-12">

                        <button type="submit" class="btn btn-default">Soumettre la propriété</button>

                    </div>
                </div>
            </form>
    </div>
</div>
@endsection
