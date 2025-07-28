<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class Facture extends Model
{
    //database/migrations/xxxx_xx_xx_create_factures_table.php
    public function up() {
        Schema::create('factures', function(Blueprint $table){
            $table->id();
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->date('date_facture');
            $table->decimal('montant_total_ttc',10,2);
            $table->enum('etat', ['brouillon', 'envoyee','payee'])->default('brouillon');
            $table->timestamps();
        });
    }
    public function client()  {
        return $this->belongTo(Client::class);
        
    }
    public function lignes()  {
        return $this->hasMany(LigneFacture::class);
    }
}
