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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Nom_complet_docteur');
            $table->string('Nom_specialite');
            $table->string('ordre');
            $table->Date('date');
            $table->integer('IPP');
            $table->string('Nom_complet_Pation');
            $table->string('Type_Paiment');
            $table->string('TA');
            $table->string('Type_observation');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
