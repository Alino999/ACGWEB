<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoumettreAnnonce;

class SoumettreAnnonceController extends Controller
{
    public function index(){
        return view('frontend.form.annonce1');
    }
    public function store1(Request $request){
        $data=request()->validate([
            'titre'     => ['required'] ,
            'vente_location'=>  ['required'] ,
            'monaie'=> ['required'] ,
            'prefix_prix'=> ['required'] ,
            'postfix_prix'=> ['required'] ,
            'taille_zone'=> ['required'] ,
            'taille_postfix'=> ['required'] ,
            'chambre'=> ['required'] ,
            'garage'=> ['required'] ,
            'propriete'=> ['required'] ,
            'statut'=> ['required'] ,
          ]);
          $annonce = new SoumettreAnnonce();
          $annonce -> titre = $data['titre'];
          $annonce -> vente_location = $data['vente_location'];
          $annonce -> monaie = $data['monaie'];
          $annonce -> prefix_prix = $data['prefix_prix'];
          $annonce -> postfix_prix = $data['postfix_prix'];
          $annonce -> taille_zone = $data['taille_zone'];
          $annonce -> taille_postfix = $data['taille_postfix'];
          $annonce -> chambre = $data['chambre'];
          $annonce -> garage = $data['garage'];
          $annonce -> propriete = $data['propriete'];
          $annonce -> statut = $data['statut'];

          $annonce -> save();
          $request->session()->flash('status','Annonce soumis avec succès avec succès!!!');
          return view('frontend.form.annonce2');
    }

    public function store2(Request $request){
        $data=request()->validate([
            'ville'     => ['required'] ,
            'zone'=>  ['required'] ,
            'zip'=> ['required'] ,
            'etat'=> ['required'] ,
            'pays'=> ['required'] ,
            'adresse'=> ['required'] ,
          ]);
          $annonce = new SoumettreAnnonce();
          $annonce -> ville = $data['ville'];
          $annonce -> zone = $data['zone'];
          $annonce -> zip = $data['zip'];
          $annonce -> etat = $data['etat'];
          $annonce -> pays = $data['pays'];
          $annonce -> adresse = $data['adresse'];

          $annonce -> save();
          $request->session()->flash('status','Annonce soumis avec succès avec succès!!!');
          return view('frontend.form.validation');
    }
}
