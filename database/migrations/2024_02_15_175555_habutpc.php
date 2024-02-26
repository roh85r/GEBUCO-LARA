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
        Schema::create('habutpcs', function (Blueprint $table) {
            $table->string('CHAB', 2);
            $table->string('CUT', 50);
            $table->string('CPC', 4);
            $table->timestamps();

            // Définition des clés primaires
            $table->primary(['CHAB', 'CUT', 'CPC']);

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
        Schema::dropIfExists('habutpcs');
    }
};
