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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->enum('status',['short','long'])->default('short');
            $table->string('title')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->nullable()->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('specialty_id')->nullable();
            $table->foreign('specialty_id')->nullable()->references('id')->on('specialties')->onDelete('cascade');
            $table->enum('type',['large','medium','small'])->nullable();
            $table->enum('duration',['more_than_6','month_3_to_6','month_1_to_3','less_1'])->nullable();
            $table->enum('level',['entry','intermediate','expert','small'])->nullable();
            $table->enum('budget',['hourly','project'])->nullable();
            $table->integer('hourly_from')->length(11)->nullable();
            $table->integer('hourly_to')->length(11)->nullable();
            $table->integer('project_budget')->length(11)->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('projects');
    }
};
