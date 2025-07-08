<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('penyewaans', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('email');
            $table->string('phone');
            $table->string('applicantType');
            $table->string('address');
            $table->string('institution');
            $table->string('faculty');
            $table->string('lab');
            $table->date('date');
            $table->time('time');
            $table->string('file'); // simpan path file
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penyewaans');
    }
};

