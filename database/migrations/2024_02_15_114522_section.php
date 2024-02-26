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
        Schema::create('sections', function (Blueprint $table) {
            $table->string('CSECT', 2)->primary();
            $table->string('LIBSECT', 50);
            $table->string('CCHAP', 2);
            $table->foreign('CCHAP')->references('CCHAP')->on('chapitres');
            // Ajoutez d'autres colonnes au besoin
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
        Schema::dropIfExists('sections');
    }
};
