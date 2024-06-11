@extends('layouts.app')
@section('content')
<div class="container mt-5 min_60vh">
    <h4 class="font_26 color_black font_weight_600 mb-5 ps-3">Notifications</h4>
    <div class="row my-4">
        <div class="up-card col-md-12">
            <h4 class="font_24 color_black font_weight_600 mb-4">Today</h4>
            <ul class="list-unstyled mt-3 listing_notification">
                @forelse($todayNotification as $key => $notification)
                <li class="border_bottom px-4 py-3">
                    <div class="d-flex align-items-center">
                        <div class="me-3"><i class="fas fa-rocket"></i></div>
                        <div class="d-block d-md-flex flex-grow-1">
                            <div class="w-100">
                                <div class="d-flex justify-content-between align-items-center mr-10 text-break font_14">
                                    @switch($notification->type)
                                    @case('App\Notifications\NewJobPosted')
                                    <div class="flex-grow-1">You posted the job "{{ $notification->data['title'] }}" in {{ auth()->user()->fullname }}
                                        <div class="text-muted font_14">{{(TimeChange($notification->created_at))}}</div>
                                    </div>
                                    <div class="mw-150 text-center"><a class="empty_btn font_weight_600 read_noti" data-id="{{$notification->id}}" href="{{$notification->data['url']}}">{{$notification->data['button']}}</a></div>
                                    @break
                                    @case('App\Notifications\SendInvitation')
                                    <div class="flex-grow-1">You have received an invitation to interview for the job "{{ $notification->data['title'] }}"<div class="text-muted font_14">{{(TimeChange($notification->created_at))}}</div>
                                    </div>
                                    <div class="mw-150 text-center"><a class="empty_btn font_weight_600 read_noti" data-id="{{$notification->id}}" href="{{$notification->data['url']}}">{{$notification->data['button']}}</a></div>
                                    @break
                                    @case('App\Notifications\FinishedWork')
                                    <div class="flex-grow-1">Your milestone work has finished "{{ $notification->data['title'] }}"<div class="text-muted font_14">{{(TimeChange($notification->created_at))}}</div>
                                    </div>
                                    <div class="mw-150 text-center"><a class="empty_btn font_weight_600 read_noti"  data-id="{{$notification->id}}" href="{{$notification->data['url']}}">{{$notification->data['button']}}</a></div>
                                    @break
                                    @case('App\Notifications\PaymentReceived')
                                    <div class="flex-grow-1">Your milestone has Ended and payment received "{{ $notification->data['title'] }}"<div class="text-muted font_14">{{(TimeChange($notification->created_at))}}</div>
                                    </div>
                                    <div class="mw-150 text-center"><a class="empty_btn font_weight_600 read_noti" data-id="{{$notification->id}}" href="{{$notification->data['url']}}">{{$notification->data['button']}}</a></div>
                                    @break
                                    @case('App\Notifications\AcceptInterview')
                                    @if ($notification->data['status'] == 2)
                                    <div class="flex-grow-1">{{ $notification->data['freelancer_id'] }} declined your invitation to interview for the job "{{ $notification->data['title'] }}"<div class="text-muted font_14">{{(TimeChange($notification->created_at))}}</div>
                                    </div>
                                    @elseif ($notification->data['status'] == 1)
                                    <div class="flex-grow-1">{{ $notification->data['freelancer_id'] }} accepted your invitation to interview for the job "{{ $notification->data['title'] }}"<div class="text-muted font_14">{{(TimeChange($notification->created_at))}}</div>
                                    </div>
                                    @endif
                                    <div class="mw-150 text-center"><a class="empty_btn font_weight_600 read_noti" data-id="{{$notification->id}}" href="{{$notification->data['url']}}">{{$notification->data['button']}}</a></div>

                                    @break
                                    @default
                                    <!-- Do nothing -->
                                    @endswitch

                                </div>
                                <!-- <div class="text-muted font_14">{{($notification->created_at)}}</div> -->
                            </div>
                        </div>
                        <div class="ms-3">
                            <i class="cursor_pointer fas fa-times notificatin_delete" data-id="{{$notification->id}}"></i>
                        </div>
                    </div>
                </li>
                @empty
                <span> No new notifications. </span>
                @endforelse
            </ul>
        </div>
    </div>
    @if(count($notificationList)>0)
    <div class="row my-4">
        <div class="up-card col-md-12">
            <h4 class="font_24 color_black font_weight_600 mb-4">Earlier</h4>
            <ul class="list-unstyled mt-3 listing_notification">
                @foreach($notificationList as $notifications)
                <li class="border_bottom px-4 py-3">
                    <div class="d-flex align-items-center">
                        <div class="me-3"><i class="fas fa-rocket"></i></div>
                        <div class="d-block d-md-flex flex-grow-1">
                            <div class="w-100">
                                <div class="d-flex justify-content-between mr-10 align-items-center text-break font_14">
                                    @switch(@$notifications->type)
                                    @case('App\Notifications\NewJobPosted')
                                    <div class="flex-grow-1">You posted the job "{{ $notifications->data['title'] }}" in {{ auth()->user()->fullname }}
                                        <div class="text-muted font_14">{{$notifications->created_at}}</div>
                                    </div>
                                    <div class="mw-150 text-center"><a class="empty_btn font_weight_600 read_noti"  data-id="{{ $notifications->id }}"  href="{{$notifications->data['url']}}">{{$notifications->data['button']}}</a></div>
                                    @break
                                    @case('App\Notifications\SendInvitation')
                                    <div class="flex-grow-1">You have received an invitation to interview for the job "{{ $notifications->data['title'] }}"
                                        <div class="text-muted font_14">{{$notifications->created_at}}</div>
                                    </div>
                                    <div class="mw-150 text-center"><a class="empty_btn font_weight_600 read_noti" data-id="{{ $notifications->id }}"  href="{{$notifications->data['url']}}">{{$notifications->data['button']}}</a></div>
                                    @break
                                    @case('App\Notifications\FinishedWork')
                                    <div class="flex-grow-1">Your milestone work has finished "{{ $notifications->data['title'] }}"
                                        <div class="text-muted font_14">{{$notifications->created_at}}</div>
                                    </div>
                                    <div class="mw-150 text-center"><a class="empty_btn font_weight_600 read_noti" data-id="{{ $notifications->id }}"  href="{{$notifications->data['url']}}">{{$notifications->data['button']}}</a></div>

                                    @break
                                    @case('App\Notifications\PaymentReceived')
                                    <div class="flex-grow-1">Your milestone has Ended and payment received "{{ $notifications->data['title'] }}"
                                        <div class="text-muted font_14">{{$notifications->created_at}}</div>
                                    </div>
                                    <div class="mw-150 text-center"><a class="empty_btn font_weight_600 read_noti" data-id="{{ $notifications->id }}"  href="{{$notifications->data['url']}}">{{$notifications->data['button']}}</a></div>

                                    @break
                                    @case('App\Notifications\AcceptInterview')
                                    @if ($notifications->data['status'] == 2)
                                    <div class="flex-grow-1">{{ $notifications->data['freelancer_id'] }} declined your invitation to interview for the job "{{ $notifications->data['title'] }}"
                                        <div class="text-muted font_14">{{$notifications->created_at}}</div>
                                    </div>
                                    @elseif ($notifications->data['status'] == 1)
                                    <div class="flex-grow-1">{{ $notifications->data['freelancer_id'] }} accepted your invitation to interview for the job "{{ $notifications->data['title'] }}"
                                        <div class="text-muted font_14">{{$notifications->created_at}}</div>
                                    </div>
                                    @endif
                                    <div class="mw-150 text-center"><a class="empty_btn font_weight_600 read_noti" data-id="{{ $notifications->id }}" href="{{$notifications->data['url']}}">{{$notifications->data['button']}}</a></div>
                                    @break
                                    @default
                                    <!-- Do nothing -->
                                    @endswitch
                                </div>
                                <!-- <div class="text-muted font_14">{{$notifications->created_at}}</div> -->
                            </div>
                        </div>
                        <div class="ms-3">
                            <i class="cursor_pointer fas fa-times notificatin_delete" data-id="{{$notifications->id}}"></i>
                        </div>
                    </div>
                </li>
                @endforeach
                <div class="customPagination">
                    {{$notificationList->links('pagination::bootstrap-4')}}
                </div>
            </ul>
        </div>
    </div>
    @endif
</div>
@endsection