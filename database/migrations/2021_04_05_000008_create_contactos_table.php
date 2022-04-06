<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactosTable extends Migration
{
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('telefono')->nullable();
            $table->string('info_conocer')->nullable();
            $table->string('consulta')->nullable();
            $table->longText('descripcion_consulta')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
