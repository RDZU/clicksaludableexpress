<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable()->unique();
            $table->longText('description')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->string('tipo_presentacion')->nullable();
            $table->string('envase')->nullable();
            $table->string('cantidad')->nullable();
            $table->integer('largo')->nullable();
            $table->integer('ancho')->nullable();
            $table->string('peso')->nullable();
            $table->string('visible_home')->nullable();
            $table->string('descripcion_home')->nullable();
            $table->string('stock')->nullable();
            $table->integer('alto')->nullable();
            $table->string('image_frontal_link')->nullable();
            $table->string('image_frontal_title')->nullable();
            $table->string('image_frontal_alt')->nullable();
            $table->string('image_reverso_link')->nullable();
            $table->string('image_reverso_title')->nullable();
            $table->string('image_reverso_alt')->nullable();
            $table->string('photo_min_frontal_link')->nullable();
            $table->string('photo_min_reverso_link')->nullable();
            $table->string('slug')->nullable();
            $table->string('photo_link_reverso_title')->nullable();
            $table->string('photo_link_reverso_alt')->nullable();
            $table->string('photo_link_frontal_title')->nullable();
            $table->string('photo_link_frontal_alt')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
