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
        Schema::create('rejets', function (Blueprint $table) {
            $table->string('CREJ', 2)->primary();
            $table->string('LIBBREJ', 50);
            $table->string('CENG', 2);
            $table->timestamps();

            // Définition de la clé étrangère
            $table->foreign('CENG')->references('CENG')->on('enfoncs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rejets');
    }
};
