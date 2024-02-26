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
        Schema::create('pcra', function (Blueprint $table) {
            $table->string('CPC', 4)->primary();
            $table->string('CPC_FK', 4);
            $table->foreign('CPC_FK')->references('CPC')->on('pc');
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
        Schema::dropIfExists('pcra');
    }
};
