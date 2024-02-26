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
        Schema::create('pc', function (Blueprint $table) {
            $table->string('CPC', 2)->primary();
            $table->string('LIBPC', 50);
            $table->string('CHABI', 2);
            $table->foreign('CHABI')->references('CHABI')->on('habilitations');
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
        Schema::dropIfExists('pc');
    }
};
