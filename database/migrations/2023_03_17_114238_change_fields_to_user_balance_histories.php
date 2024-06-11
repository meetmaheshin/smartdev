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
        Schema::table('user_balance_histories', function (Blueprint $table) {
            \DB::statement("ALTER TABLE `user_balance_histories` CHANGE `rovi_amount` `rovi_amount` DECIMAL(38,18) NULL DEFAULT '0', CHANGE `dev3_amount` `dev3_amount` DECIMAL(38,18) NULL DEFAULT '0', CHANGE `usdt_amount` `usdt_amount` DECIMAL(38,18) NULL DEFAULT '0';");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_balance_histories', function (Blueprint $table) {
            //
        });
    }
};
