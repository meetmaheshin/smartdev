@extends('layouts.app')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('css/transaction_history.css')}}">
<section class="container min_60vh mt-5">
    <h4 class="font_weight_600 mb-4">Transaction history</h4>
    <div class="up-card">
        @if(count($history)>0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Description</th>
                    <th scope="col">{{ auth()->user()->is_admin==1 ? 'Web3 Professional': 'Client' }}</th>
                    <th scope="col" class="text-center">Amount/Balance</th>
                    <th scope="col" class="text-center">Status</th>

                </tr>
            </thead>
            <tbody>
                @foreach($history as $key=>$histories)
                <tr>
                    <td>{{ DateYearChange($histories->updated_at) }}</td>
                    <td>{{ $histories->clientHire->payment_option == 0 ? 'Hourly' : (($histories->clientHire->payment_option == 1 && $histories->clientHire->fixedType == 1) ? 'Fixed Price' : 'Milestone Mode')}}</td>
                    <td>{{ $histories->clientHire->contract_title}}</br>{{ $histories->description}}</td>
                    <td>{{ auth()->user()->is_admin== 1 ? $histories->clientHire->freelancer->FullName: $histories->clientHire->clients->FullName }}</td>
                    <td class="text-center">${{$histories->deposit_amount}}</td>
                    <td class="text-center font_weight_700">
                        <span class="badge {{ $histories->status == 0 ? 'text-bg-secondary' : ($histories->status == 1 ? 'text-bg-info' : ($histories->status == 2 ? 'text-bg-primary' : ($histories->status == 3 ? 'text-bg-success' : '-')))}}">{{ $histories->status == 0 ? 'Await Payment' : ($histories->status == 1 ? 'Escrow Funding' : ($histories->status == 2 ? 'Pay to Web3 Professional' : ($histories->status == 3 ? 'Approved Work and Paid' : '-')))}}</span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="customPagination">
            {{$history->links('pagination::bootstrap-4')}}
        </div>
        @else
        <div class="d-flex justify-content-center align-items-center">
            <div class="text-center text-muted">
                <h4>No transactions</h4>
                <p>We don't see any records from your history.</p>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection