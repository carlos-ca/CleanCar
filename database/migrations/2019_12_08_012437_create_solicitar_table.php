
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


class CreateSolicitarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('servicio')->nullable();
            $table->string('f_servicio')->nullable();
            $table->string('marca')->nullable();
            $table->string('precio')->nullable();
            $table->string('matricula')->nullable();
            $table->string('direccion')->nullable();
            $table->string('colonia')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitars');
    }
}
