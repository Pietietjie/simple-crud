<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('people_interests_pivot', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('person_id')->nullable();
            $table->index('person_id');
            $table->foreign('person_id')->references('id')->on('people');

            $table->unsignedBigInteger('interest_id')->nullable();
            $table->index('interest_id');
            $table->foreign('interest_id')->references('id')->on('interests');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('person_interests_pivot');
    }
};
