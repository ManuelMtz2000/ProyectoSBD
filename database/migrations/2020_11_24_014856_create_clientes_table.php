<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string("nombre_comercialCliente",25)->nullable();
            $table->string("nombreCliente",20);
            $table->string("direccionCliente",20);
            $table->string("apellidomCliente",15);
            $table->string("apellidopCliente",15);
            $table->string("emailCliente",25)->nullable();
            $table->integer("telefonoCliente")->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
