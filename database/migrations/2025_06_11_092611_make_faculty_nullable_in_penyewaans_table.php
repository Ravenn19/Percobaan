<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('penyewaans', function (Blueprint $table) {
            $table->string('faculty')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('penyewaans', function (Blueprint $table) {
            $table->string('faculty')->nullable(false)->change();
        });
    }
};

