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
        Schema::table('client_company_details', function (Blueprint $table) {
            $table->string('website')->nullable()->after('profile_photo_path');
            $table->text('description')->nullable()->after('tagline');
            $table->bigInteger('phone')->nullable()->after('firstname');
            $table->string('time_zone')->nullable()->after('phone');
            $table->bigInteger('state_id')->nullable()->after('country');
            $table->bigInteger('city_id')->nullable()->after('state_id');
            $table->text('address')->nullable()->after('city_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('client_company_details', function (Blueprint $table) {
            //
        });
    }
};
