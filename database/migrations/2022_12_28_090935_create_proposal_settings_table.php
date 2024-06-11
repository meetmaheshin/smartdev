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
        Schema::create('proposal_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->enum('milestoneMode',['milestone','default'])->default('milestone');
            $table->enum('duration_dropdown',['more_than_6','month_3_to_6','month_1_to_3','less_1'])->nullable();
            $table->text('cover_letter');
            $table->integer('earned_amount');
            $table->integer('charged_amount');
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
        Schema::dropIfExists('proposal_settings');
    }
};
