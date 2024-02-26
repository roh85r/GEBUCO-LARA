<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operation', function (Blueprint $table) {
            $table->string('COPE', 2)->primary();
            $table->string('LIBOPE', 50);
            $table->string('CAD', 2);
            $table->string('CMAR', 2);
            $table->string('CFOUR', 4);
            $table->timestamps();

            // Ajout des clés étrangères
            $table->foreign('CAD')->references('CAD')->on('ad');
            $table->foreign('CMAR')->references('CMAR')->on('marches');
            $table->foreign('CFOUR')->references('CFOUR')->on('fournisseurs');

            // Ajoutez d'autres contraintes au besoin
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operations');
    }
};
