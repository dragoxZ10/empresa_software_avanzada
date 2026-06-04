<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->bigIncrements('nPerCodigo'); // nPerCodigo bigint(20) UNSIGNED
            $table->char('cPerApellido', 50)->index(); // Índice BTREE
            $table->char('cPerNombre', 50)->index(); // Índice BTREE
            $table->string('cPerDireccion', 100)->nullable(); // Si NULL
            $table->date('dPerFecNac')->nullable(); // Si NULL
            $table->integer('nPerEdad')->nullable(); // Si NULL
            $table->decimal('nPerSueldo', 6, 2); 
            $table->string('cPerRnd', 50);
            $table->char('nPerEstado', 1)->default('1'); // predeterminado 1
            $table->rememberToken(); // remember_token varchar(100)
            $table->timestamps(); // created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('persona');
    }
};
