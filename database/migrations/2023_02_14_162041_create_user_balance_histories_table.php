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
        Schema::create('user_balance_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('project_id')->nullable();
            $table->foreign('project_id')->nullable()->references('id')->on('projects')->onDelete('cascade');
            $table->bigInteger('rovi_amount')->nullable();
            $table->bigInteger('dev3_amount')->nullable();
            $table->bigInteger('usdt_amount')->nullable();
            $table->integer('transaction_action')->nullable()->comment('1:LOAD_ROVI,2:LOAD_DEV3,3:LOAD_USDT,4:DEDUCT_ROVI_ON_BIDDING,5:DEDUCT_DEV3_ON_BIDDING,6:DEDUCT_USDT_ON_BIDDING');
            $table->enum('action',['debit','credit'])->nullable();
            $table->string('transaction_hash',255)->nullable();
            $table->string('from_wallet',255)->nullable();
            $table->string('to_wallet',255)->nullable();
            $table->enum('status',['0','1'])->nullable()->comment('0:false,1:true');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_balance_histories');
    }
};
