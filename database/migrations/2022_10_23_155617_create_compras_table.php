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
        Schema::create('compras', function (Blueprint $table) {
            $table->id('idcompra');
            $table->bigInteger('CIF')->unsigned();
            $table->foreign('CIF')->references('CIF')->on('estancos');
            $table->bigInteger('idcigarro')->unsigned();
            $table->foreign('idcigarro')->references('idcigarro')->on('cigarrillos');
            $table->string('cantidad');
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
        Schema::dropIfExists('compras');
    }
};
