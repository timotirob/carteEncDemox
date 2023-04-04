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
        Schema::create('etudiants_adresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_Etudiant');
            $table->string('adresse');
            $table->string('CP');
            $table->string('Ville');
            $table->string('Pays');
            $table->timestamps();

            $table->foreign('id_Etudiant')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants_adresses');
    }
};
