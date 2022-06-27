<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('azienda', 100);
            $table->string('stazione_partenza', 200);
            $table->string('stazione_arrivo', 200);
            $table->time('orario_partenza', 0);
            $table->time('orario_arrivo', 0);
            $table->mediumInteger('codice_treno')->unsigned();
            $table->smallInteger('numero_carrozze')->unsigned();
            $table->boolean('in_orario')->default(1);
            $table->boolean('is_cancellato')->default(0);

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
        Schema::dropIfExists('trains');
    }
}
