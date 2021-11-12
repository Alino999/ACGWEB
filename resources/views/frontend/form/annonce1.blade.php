@extends('layouts.layout')
@section('content')
<div class="casaroyal-section page-wrapper">
    <div class="container">
            <form id="submit-listing-form" class="submit-listing-form clearfix" action="{{url('anonnce')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="casaroyal-title-wrapper">
                            Information Basique
                        </h4>
                    </div>

                    <div class="col-md-12">

                        <label>*Titre (obligatoire)</label>
                        <input type="text" name="titre"  value="">

                    </div>

                    <div class="col-md-4">

                        <label>Prix ​​de vente ou de location (chiffres seulement)</label>
                        <input class="numericonly" type="text" name="vente_location" id="ft_property_price" value="">
                        <p class="description">Exemple Valeur: 435000</p>

                    </div>

                    <div class="col-md-4">

                        <label>Monnaie</label>
                        <input type="text" name="monaie" id="ft_property_currency" value="">
                        <p class="description">Exemple: fcfa</p>

                    </div>

                    <div class="col-md-4">

                        <label>Préfixe de prix</label>
                        <input type="text" name="prefix_prix" id="ft_property_price_prefix" value="">
                        <p class="description">Exemple Valeur: De</p>

                    </div>

                    <div class="col-md-4">

                        <label>Prix ​​Postfix</label>
                        <input type="text" name="postfix_prix" id="ft_property_price_postfix" value="">
                        <p class="description">Exemple Valeur: Par mois</p>

                    </div>

                    <div class="col-md-4">

                        <label>Taille de la zone (chiffres uniquement)</label>
                        <input class="numericonly" type="text" name="taille_zone" id="ft_property_size" value="">
                        <p class="description">Exemple Valeur: 25000</p>

                    </div>

                    <div class="col-md-4">

                        <label>Taille Postfix</label>
                        <input type="text" name="taille_postfix" id="ft_property_size_postfix" value="">
                        <p class="description">Exemple Valeur: Sq Ft</p>

                    </div>

                    <div class="col-md-4">

                        <label>Chambres</label>
                        <input class="numericonly" type="text" name="chambre" id="ft_property_bedrooms" value="">
                        <p class="description">Exemple Valeur: 4</p>

                    </div>

                    <div class="col-md-4">

                        <label>Salles de bain</label>
                        <input class="numericonly" type="text" name="salle_bain" id="ft_property_bathrooms" value="">
                        <p class="description">Exemple Valeur: 4</p>

                    </div>

                    <div class="col-md-4">

                        <label>Garages</label>
                        <input class="numericonly" type="text" name="garage" id="ft_property_garage" value="">
                        <p class="description">Exemple Valeur: 2</p>

                    </div>

                    <div class="col-md-6">

                        <label for="select-status">Type</label>
                        <span class="selectwrap">
                            <select name="propriete" id="select-property-type" class="search-select">
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
                            <select name="statut" id="select-status" class="search-select">
                                <option value="47">À Louer</option>
                                <option value="48">À Vendre</option>
                            </select>
                        </span>

                    </div>

                    <div class="col-md-12">

                        <button type="submit" class="btn btn-default">Soumettre la propriété</button>

                    </div>
                </div>
            </form>
    </div>
</div>
@endsection
