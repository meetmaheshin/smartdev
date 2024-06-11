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
        Schema::table('conservations', function (Blueprint $table) {
            $table->enum('is_reverted', ['0', '1'])->default('0')->comment('0: not reverted, 1: reverted');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('conservations', function (Blueprint $table) {
            //
        });
    }
};
