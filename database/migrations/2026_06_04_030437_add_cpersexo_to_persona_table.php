<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('persona', function (Blueprint $table) {
            $table->char('cPerSexo', 15)->nullable()->default('Masculino')->after('dPerFecNac');
        });
    }

    public function down()
    {
        Schema::table('persona', function (Blueprint $table) {
            $table->dropColumn('cPerSexo');
        });
    }
};
