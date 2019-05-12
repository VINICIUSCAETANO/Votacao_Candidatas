<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votos', function (Blueprint $table) {
            $table->increments('idVoter');
            $table->string('nomeVoter', 100);
            $table->string('emailVoter', 100)->unique();
            $table->integer('candidata_id')->unsigned();
            $table->timestamps();
        });
    
        Schema::table('votos', function($table) {
            $table->foreign('candidata_id')->references('id')->on('candidatas')->onDelete('cascade');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votos');
    }
}
