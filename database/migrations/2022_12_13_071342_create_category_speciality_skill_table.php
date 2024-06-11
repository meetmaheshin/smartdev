<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_speciality_skill', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('specialty_id');
            $table->unsignedBigInteger('skill_id');

            // foreign keys
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('specialty_id')->references('id')->on('specialties');
            $table->foreign('skill_id')->references('id')->on('skills');

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
        Schema::dropIfExists('category_speciality_skill');
    }
};
