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
        Schema::table('client_hires', function (Blueprint $table) {
            $table->integer('payment_option')->default(1)->comment('0:Hourly,1:Fixed')->after('contract_description');
            $table->bigInteger('fixed_price')->after('payment_option')->nullable();
            $table->bigInteger('hourly_price')->after('fixed_price')->nullable();
            $table->bigInteger('weekly_limit')->after('fixed_price')->nullable();
            $table->integer('fixedType')->default(0)->comment('0:default,1:full,2:milestone')->after('weekly_limit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client_hires', function (Blueprint $table) {
            //
        });
    }
};
