<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoumettreAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soumettre_annonces', function (Blueprint $table) {
            $table->id();
            $table -> string('titre')->nullable();
            $table -> string('vente_location')->nullable();
            $table -> string('monaie')->nullable();
            $table -> string('prefix_prix')->nullable();
            $table -> string('postfix_prix')->nullable();
            $table -> string('taille_zone')->nullable();
            $table -> string('taille_postfix')->nullable();
            $table -> string('chambre')->nullable();
            $table -> string('garage')->nullable();
            $table -> string('propriete')->nullable();
            $table -> string('statut')->nullable();
            $table -> string('ville')->nullable();
            $table -> string('zone')->nullable();
            $table -> string('zip')->nullable();
            $table -> string('etat')->nullable();
            $table -> string('pays')->nullable();
            $table -> string('adresse')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soumettre_annonces');
    }
}
