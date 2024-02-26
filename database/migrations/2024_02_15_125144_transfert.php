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
        Schema::create('transferts', function (Blueprint $table) {
            $table->string('CTRANS', 2);
            $table->string('CEXE', 50);
            $table->string('CCHAP', 2);
            $table->string('MTRANS');
            $table->primary('CTRANS');
            $table->foreign('CEXE')->references('CEXE')->on('exercices');
            $table->foreign('CCHAP')->references('CCHAP')->on('chapitres');
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
        Schema::dropIfExists('transferts');
    }
};
