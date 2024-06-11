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
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('city_id')->change();

            Schema::table('users', function (Blueprint $table) {
                //If the id column exists on tests table
               if (Schema::hasColumn('users', 'state_id')){
   
                   //drop the id column
                   Schema::table('users', function (Blueprint $table) {
                       $table->dropColumn('state_id');
                   });
                }
            });
            $table->bigInteger('state_id')->nullable()->after('country_id');





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
