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
        Schema::create('user_certifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('certification_id');
            $table->foreign('certification_id')->nullable()->references('id')->on('certifications')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->string('issue_date'); // Issue date of the certification
            $table->string('expiry_date')->nullable(); // Expiry date (optional)
            $table->string('certificationId')->nullable(); // Certification ID (optional)
            $table->string('certification_url')->nullable();
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
        Schema::dropIfExists('user_certifications');
    }
};
