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
        Schema::create('casals', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('nom');
            $table->date('data_inici');
            $table->date('data_final');
            $table->bigInteger('n_places');
            $table->bigInteger('id_ciutat')->nullable();
            $table->timestamps();
            $table->foreign('id_ciutat')->references('id')->on('ciutats');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casals');
    }
};
