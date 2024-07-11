<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectMilestone;
use App\Models\ClientHire;


class TransactionHistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
        $this->pageCount = config('constants.pagination');
    }

    public function index(Request $request) {
        $title = 'Transaction History - '.config('app.name');

        $history = ProjectMilestone::with(['clientHire.projects','clientHire.freelancer','clientHire.clients'])
                                    ->whereHas('clientHire',function($q) {
                                        $q->where('client_id',auth()->user()->id)
                                          ->orWhere('freelancer_id',auth()->user()->id);
                                    })->where('status','!=',0)->paginate($this->pageCount);
        return view('reports.transaction_history',compact('history','title'));
    }
}
