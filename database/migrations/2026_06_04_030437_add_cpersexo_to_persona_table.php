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
        Schema::table('persona', function (Blueprint $table) {
            // Char(15), Nulo, Predeterminado 'Masculino', después de 'nPerEdad'
            $table->char('cPerSexo', 15)->nullable()->default('Masculino')->after('nPerEdad');
        });
    }

    public function down()
    {
        Schema::table('persona', function (Blueprint $table) {
            // Revierte el cambio eliminando la columna si hacemos rollback
            $table->dropColumn('cPerSexo');
        });
    }
};
