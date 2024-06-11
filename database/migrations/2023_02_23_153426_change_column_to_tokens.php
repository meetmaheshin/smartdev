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
            $table->bigInteger('rovi_amount')->default(0)->change();
            $table->bigInteger('dev3_amount')->default(0)->change();
            $table->bigInteger('usdt_amount')->default(0)->change();

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
