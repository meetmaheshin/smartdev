<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function getUser() {
        return $this->belongsTo(User::class, 'user_id')->withTrashed();
    }

    public function checkUniqueness($name, $address, $network, $userId) {
        $walletData = $this->where('name', $name)->where('network', $network)->where('user_id', '!=', $userId)->first();
        $walletaddress = $this->where('wallet_address', $address)->where('network', $network)->where('user_id', '!=', $userId)->first();
        if ($walletData) {
            return "Wallet Name should be unique";
        }
        if ($walletaddress) {
            return "Wallet Address should be unique";
        }
        return null;
    }
}
