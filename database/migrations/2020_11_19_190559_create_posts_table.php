<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alicuotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->string('cod_MnzV')->nullable();
            $table->string('cedula')->nullable();
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->integer('cuotas_totales')->nullable();
            $table->double('valor_total')->nullable();
            $table->integer('cuotas_pagadas')->nullable();
            $table->double('valor_pagado')->nullable();
            $table->integer('cuotas_adeudadas')->nullable();
            $table->double('valor_adeudado')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
