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
            $table->integer('finish_project')->default(0)->comment('0:default,1:endProject')->after('accept_offer');
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
