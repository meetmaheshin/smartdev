@forelse($messages as $key=> $userLists)
<li class="cursor_pointer position-relative p-3 rounded d-flex current_user users_list_{{$key}} {{session()->get('user_id') == $userLists->listData->id && session()->get('conversation') == $userLists->id ? 'active' : ''}}" data-image="{{$userLists->listData->profile_photo_path}}" data-project_id="{{$userLists->project->id}}" data-conversation="{{$userLists->id}}" data-id="{{$userLists->listData->id}}" data-username="{{$userLists->listData->full_name}}">
    <div>
        <div class="user_img pe-2 position-relative">
            <img class="rounded-circle" src="{!! !empty($userLists->listData->profile_photo_path) ? asset('/storage/images/client_profile/'.$userLists->listData->profile_photo_path)   : asset('images/user_default.jpeg') !!}" alt="avatar">
            <div class="status font_12  position-absolute chatboxicon">
                <i class='fa fa-circle {{$userLists->listData->chat_status==1 ? "online" : "smart_text"}} icon-{{$userLists->listData->id}}'></i>
                <div class='user-icon-{{$userLists->listData->id}}' id='status_show text-success' title='{{$userLists->listData->chat_status==1 ? "Online" : "Away"}}'></div>
            </div>
        </div>
    </div>
    <div class="about w-100">
        <div class="name font_16 color_black font_weight_600 user_name text-break pe-4" data-image="{{$userLists->listData->profile_photo_path}}"  data-project_id="{{$userLists->project->id}}" data-conversation="{{$userLists->id}}" data-id="{{$userLists->listData->id}}" data-username="{{$userLists->listData->full_name}}">{{$userLists->listData->full_name}}</div>
        <div class="name font_14 text-muted font-weight-light  text-break">{{$userLists->project->title}}</div>
        <span class="unread_msg badge rounded-pill {{$userLists->unread_msg_count != 0 ?  'notifi_count' : ''}}" id="unread-messages-{{$userLists->listData->id}}-{{$userLists->id}}">{{$userLists->unread_msg_count != 0 ?  $userLists->unread_msg_count : ''}}</span>

        <!-- <div class="status font_12 color_grey">
            <i class="fa fa-circle {{$userLists->listData->chat_status==1 ? 'online' : 'smart_text'}} icon-{{$userLists->listData->id}}" data-title="Away">
                <span class="ms-1">{{$userLists->listData->chat_status==1 ? 'online' : 'away'}}</span></i>
            <div class="user-icon-{{$userLists->listData->id}}" id="status_show text-success" title="Away">

            </div>
        </div> -->
    </div>
</li>
@empty
<li class="pb-3 d-flex align-items-center users_list_0">
    <div class="user_img pe-2"><img class="rounded-circle" src="{!! asset('images/user_default.jpeg') !!}" alt="avatar"></div>
    <div class="about w-100">
        <div class="name font_14 color_black font_weight_500">No User Found</div>
        <div class="status font_12 color_grey">
        </div>
    </div>
</li>
@endforelse