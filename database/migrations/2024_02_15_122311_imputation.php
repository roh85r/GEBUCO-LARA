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
        Schema::create('imputations', function (Blueprint $table) {
            $table->string('CEXE', 2);
            $table->string('CCHAP', 50);
            $table->string('DOTINT');
            $table->string('LFR');
            $table->string('MTREGL');
            $table->string('MTREST');
            $table->primary(['CEXE', 'CCHAP']);
            $table->foreign('CEXE')->references('CEXE')->on('exercices');
            // Ajoutez d'autres clés étrangères au besoin
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
        Schema::dropIfExists('imputation');
    }
};
