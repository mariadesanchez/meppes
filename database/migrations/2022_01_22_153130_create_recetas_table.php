<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas', function (Blueprint $table) {
            $table->id();
            $table->date('FechaPrescripcion');
            $table->date('FechaVencimiento');
            $table->string('CodigoAutorizacion');
            $table->biginteger('Farmacia_id');
            $table->biginteger('Afiliado_id');
            $table->string('NombreApellido');
            $table->string('Activo');
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
        Schema::dropIfExists('recetas');
    }
}
