<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       Schema::create('factures', function(Blueprint $table){
            $table->id();
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->date('date_facture');
            $table->decimal('montant_total_ttc',10,2);
            $table->enum('etat', ['brouillon', 'envoyee','payee'])->default('brouillon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};
