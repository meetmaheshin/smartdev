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
        Schema::table('project_milestone', function (Blueprint $table) {
            \DB::statement("ALTER TABLE `project_milestones` CHANGE `status` `status` INT NOT NULL DEFAULT '0' COMMENT '0:await_payment,1:await_delivery,2:complete,3:approved_work';");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_milestone', function (Blueprint $table) {
            //
        });
    }
};
