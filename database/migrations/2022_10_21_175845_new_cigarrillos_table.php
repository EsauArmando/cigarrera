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
        Schema::create('cigarrillos', function (Blueprint $table) {
            $table->id('idcigarro');
            $table->string('marca');
            $table->string('filtro');
            $table->bigInteger('idfabricante')->unsigned();
            $table->foreign('idfabricante')->references('idfabricante')->on('fabricantes');
            $table->decimal('precio',8,2);
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
        Schema::dropIfExists('cigarrillos');
    }
};
