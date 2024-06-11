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
        Schema::create('client_hires', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->nullable()->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('freelancer_id');
            $table->foreign('freelancer_id')->nullable()->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('project_id');
            $table->foreign('project_id')->nullable()->references('id')->on('projects')->onDelete('cascade');

            $table->string('contract_title')->nullable();
            $table->text('contract_description')->nullable();
            
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
        Schema::dropIfExists('client_hires');
    }
};
