<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductos extends Migration
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
            $table->string('nombreproducto');
            $table->string('descripcionproducto');
            $table->string('costoproducto');
            $table->string('cantidadproducto');
            
            $table->timestamps();
        });
    }


    
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
