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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->integer('preciounitario');
            $table->integer('cantidad');
            $table->integer('oferta');
            $table->string('imagen');
            $table->integer('activo');
            $table->unsignedBigInteger('idcategoria');
            $table->unsignedBigInteger('idvendedor');
            $table->timestamps();

            $table->foreign('idvendedor')->references('id')->on('users');

            $table->foreign('idcategoria')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
