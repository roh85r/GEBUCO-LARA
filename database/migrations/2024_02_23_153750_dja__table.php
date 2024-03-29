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
        Schema::create('djafirst_table', function (Blueprint $table) {
            $table->id() ;
            $table->string('column_name') ;
            $table->timestamps() ;
        }) ;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
{
    Schema::dropIfExists('djafirst_table') ;
}

    }
};
