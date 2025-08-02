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
         Schema::create('clients', function(Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable;
            $table->string('email')->nullable;
            $table->string('telephone')->nullable;
            $table->text('adresse')->nullable;
            $table->string('ville')->default('Oujda');
            $table->string('pays')->default('Maroc');
            $table->string('code_postal')->nullable;
            $table->string('idf')->nullable;
            $table->string('ice')->nullable;
            $table->boolean('is_client')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
