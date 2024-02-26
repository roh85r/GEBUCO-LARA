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
        Schema::create('ad', function (Blueprint $table) {
            $table->string('CAD', 2)->primary();
            $table->string('LIBAD', 50);
            $table->string('CCHAP', 2);
            $table->string('CEXE', 2);
            $table->string('CPC', 4);
            $table->timestamps();

            // Ajout des clés étrangères
            $table->foreign('CCHAP')->references('CCHAP')->on('chapitres');
            $table->foreign('CEXE')->references('CEXE')->on('exercices');
            $table->foreign('CPC')->references('CPC')->on('pc');

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
        Schema::dropIfExists('ad');
    }
};
