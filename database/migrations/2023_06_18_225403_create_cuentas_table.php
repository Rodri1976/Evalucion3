<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->id();
            //$table->engine="InnoDB";
            //$table->bigIncrements('id');
            $table->string('user',20)->unique();
            $table->string('password',100);
            $table->string('nombre',20);
            $table->string('apellido',20);
            $table->integer('perfil_id')->unsigned();
            $table->timestamps();

           
            $table->foreign('perfil_id')->references('id')->on('perfiles');
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuentas');
    }
};
