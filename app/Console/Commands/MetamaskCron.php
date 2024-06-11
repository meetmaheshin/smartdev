<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\UserBalanceHistory;
use Web3\Web3;

class MetamaskCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'metamask:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $web3 = new Web3(env('BSC_RPC_URL'));
        $eth = $web3->eth;
        
        $history = UserBalanceHistory::where([['status','=','0'],['transaction_hash','<>','']])->get();

        if(count($history)>0){
            foreach($history as $histories){
                $hash = $histories->transaction_hash;
                \Log::info('Cron Job Mid'.$hash);

                $eth->getTransactionReceipt($hash, function ($err, $transaction) {
				
                    if ($err !== null) {
                        
                    }
                    if ($transaction) {        
                        if ($transaction->status == '0x1') {
                            $transHash = $transaction->transactionHash;
                            UserBalanceHistory::where('transaction_hash', $transHash)->update([
                                'status' => '1'
                            ]);
                        }
                    }
                });
            }
        }        
    }
}
