<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre')->nullable();
            $table->string('precio')->nullable();
            $table->string('piezas')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('productos');
    }
}
