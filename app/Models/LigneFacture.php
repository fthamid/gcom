<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class LigneFacture extends Model
{
    //lignes_facture 
    public function up() {
        Schema::create('ligne_factures', function(Blueprint $table){
            $table->id();
            $table->foreignId('facture_id')->constrained()->onDelete('cascade');
            $table->foreignId('produit_id')->constrained()->onDelete('cascade');
            $table->integer('quantite');
            $table->decimal('prix_unitaire_ttc',10,2);
            $table->decimal('montant__ttc',10,2);
            $table->timestamps();
    });
    }
}
