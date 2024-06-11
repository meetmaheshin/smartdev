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
        DB::unprepared("CREATE TRIGGER after_user_balance_histories_update
        AFTER UPDATE
        ON user_balance_histories FOR EACH ROW
        BEGIN
            DECLARE oldRoviBalance DOUBLE;
            DECLARE oldDevBalance DOUBLE;
            DECLARE oldUSDTBalance DOUBLE;
            DECLARE msg VARCHAR(255);
        
            IF (NEW.status = 2 AND NEW.action = 'credit') THEN
                        update user_balances u set u.rovi_balance = u.rovi_balance + NEW.rovi_amount,u.dev3_balance = u.dev3_balance + NEW.dev3_amount,u.usdt_balance = u.usdt_balance + NEW.usdt_amount where u.user_id = NEW.user_id;
            END IF;
            IF (NEW.status = 2 AND NEW.action = 'debit') THEN
                    update user_balances u set u.rovi_balance = u.rovi_balance - NEW.rovi_amount,u.dev3_balance = u.dev3_balance - NEW.dev3_amount,u.usdt_balance = u.usdt_balance - NEW.usdt_amount  where u.user_id = NEW.user_id;
        
                     select rovi_balance, dev3_balance, usdt_balance  INTO oldRoviBalance, oldDevBalance, oldUSDTBalance from user_balances where user_id = NEW.user_id;
                    IF( oldRoviBalance < 0 OR  oldDevBalance < 0 OR oldUSDTBalance < 0 ) THEN
                        set msg = 'MyTriggerError: Trying to debit value for user when rovi Balance is lower than existing RoviBalance.';
                        signal sqlstate '45000' set message_text = msg;
                    END IF;
            END IF;
        END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER `after_user_balance_histories_update`');

    }
};
