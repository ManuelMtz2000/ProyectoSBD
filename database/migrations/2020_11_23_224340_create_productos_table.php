<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
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
            $table->string("nombreProducto",20);
            $table->decimal("precioProducto",7,2);
            $table->integer("medidaProducto");
            $table->integer("piezasProducto");
            $table->float("grosorProducto",4,2);
            $table->string("colorProducto",15);
            $table->string("formaProducto",20);
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
        Schema::dropIfExists('productos');
    }
}
