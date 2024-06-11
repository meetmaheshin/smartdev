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
        Schema::table('proposal_settings', function (Blueprint $table) {
            \DB::statement("ALTER TABLE `proposal_settings` CHANGE `status` `status` INT NOT NULL DEFAULT '0' COMMENT '0:default,1:accept interview,2:decline interview,3:hired by client'; ");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proposal_settings', function (Blueprint $table) {
            //
        });
    }
};
