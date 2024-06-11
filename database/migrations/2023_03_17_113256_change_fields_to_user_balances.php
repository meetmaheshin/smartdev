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
        Schema::table('user_balances', function (Blueprint $table) {
            \DB::statement("ALTER TABLE `user_balances` CHANGE `rovi_balance` `rovi_balance` DECIMAL(38,18) NULL DEFAULT '0', CHANGE `dev3_balance` `dev3_balance` DECIMAL(38,18) NULL DEFAULT '0', CHANGE `usdt_balance` `usdt_balance` DECIMAL(38,18) NULL DEFAULT '0';");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_balances', function (Blueprint $table) {
            //
        });
    }
};
