<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBitacorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->id();
            $table->string("direccionBitacora",25);
            $table->integer("numeroBitacora");
            $table->string("coloniaBitacora",15);
            $table->string("cruza1Bitacora",25);
            $table->string("cruza2Bitacora",25);
            $table->integer("telefonoBitacora");
            $table->time("horaBitacora");
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
        Schema::dropIfExists('bitacoras');
    }
}
