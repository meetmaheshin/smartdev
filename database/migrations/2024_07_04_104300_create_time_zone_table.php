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
        Schema::create('timezones', function (Blueprint $table) {
            $table->string('zone_name',35);
            $table->char('country_code',2);
            $table->string('abbreviation',6);
            $table->decimal('time_start', 11, 0);
            $table->integer('gmt_offset');
            $table->char('dst', 1);
            $table->index('zone_name', 'idx_zone_name');
            $table->index('country_code', 'idx_country_code');
            $table->index('time_start', 'idx_time_start');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('time_zone');
    }
};
