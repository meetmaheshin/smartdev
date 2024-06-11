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
        Schema::create('client_company_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('company_name');
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('website');
            $table->integer('industry_id')->nullable();
            $table->enum('people',['Its just me','2-9 employees','10-99 employees','100-1000 employees','More than 1000 employees'])->nullable();
            $table->string('tagline');
            $table->string('description');
            $table->string('firstname');
            $table->string('phone');
            $table->integer('vat_id');
            $table->integer('time_zone');
            $table->unsignedBigInteger('country')->nullable();
            $table->foreign('country')->references('id')->on('countries')->onDelete('cascade');
            $table->string('address');
            $table->string('city');
            $table->string('zip_code');
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
        Schema::dropIfExists('client_company_details');
    }
};
