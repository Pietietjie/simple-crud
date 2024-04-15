<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('language_id')->nullable();
            $table->index('language_id');
            $table->foreign('language_id')->references('id')->on('languages');

            $table->string('first_name');
            $table->string('last_name');
            $table->string('sa_id_num', 13);
            $table->string('mobile_number', 10);
            $table->string('email');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
