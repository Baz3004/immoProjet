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
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->integer('surface');
            $table->integer('chambre');
            $table->integer('piece');
            $table->integer('prix');
            $table->string('travaux_prevoir')->nullable();
            $table->string('ville');
            $table->string('commune')->nullable();
            $table->string('quartier');
            $table->string('avenue');
            $table->integer('numero');
            $table->string('etat');
            $table->unsignedBigInteger('cat_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biens');
    }
};
