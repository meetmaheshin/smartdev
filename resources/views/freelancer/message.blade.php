@extends('layouts.app')
@section('before_styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/message_box.css')}}">
@endsection
@section('content')
<section class="message_container_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 user_list_block">
                <div class="lefi_list_box h-100">
                    <div class=" flex flex-column">
                        @if(count($messages)>0)
                        <div class="search py-4 text-center position-relative px-3">
                            <i class="fa fa-search position-absolute text-muted"></i>
                            <input type="text" id="messageSearchBox" class="font_14 color_black w-100" placeholder="search" />
                            <input type="hidden" id="receiverId" value="{{$receiverId}}">
                            <input type="hidden" id="conversationId" value="{{$conversationId}}">
                            <input type="hidden" id="projectId" value="{{$projectId}}">

                        </div>

                        <div class="flex-grow-1">
                            <div class="user_lists">
                                <ul class="list-unstyled px-3" id="user_list_real">
                                    @foreach($messages as $key=> $userLists)
                                    @if($userLists->listData)
                                    <li class="cursor_pointer rounded position-relative p-3 d-flex border_bottom current_user users_list_{{$key}}" data-project_id="{{$userLists->project->id}}" data-conversation="{{$userLists->id}}" data-image="{{$userLists->listData->profile_photo_path}}" data-id="{{$userLists->listData->id}}" data-username="{{$userLists->listData->firstname}} {{$userLists->listData->lastname}}">
                                        <div>
                                            <div class="user_img pe-2 position-relative">
                                                <img class="rounded-circle" src="{{ !empty($userLists->listData->profile_photo_path) ? asset('/storage/images/client_profile/'.$userLists->listData->profile_photo_path)   : asset('images/user_default.jpeg') }}" alt="avatar">
                                                <div class="status font_12  position-absolute chatboxicon status_{{$userLists->listData->id}} user-icon-{{$userLists->listData->id}}"></div>
                                            </div>
                                        </div>

                                        <div class="about">
                                            <div class="name font_16 color_black font_weight_600 user_name text-break pe-4" data-project_id="{{$userLists->project->id}}" data-conversation="{{$userLists->id}}" data-image="{{$userLists->listData->profile_photo_path}}" data-id="{{$userLists->listData->id}}" data-username="{{$userLists->listData->firstname}} {{$userLists->listData->lastname}}">{{$userLists->listData->firstname}} {{$userLists->listData->lastname}}</div>
                                            <div class="name font_14 text-muted font-weight-light text-break">{{$userLists->project->title}}</div>
                                            <span class="unread_msg badge rounded-pill {{$userLists->unread_msg_count != 0 ?  'notifi_count' : ''}}" id="unread-messages-{{$userLists->listData->id}}-{{$userLists->id}}">{{$userLists->unread_msg_count != 0 ?  $userLists->unread_msg_count : ''}}</sapn>
                                                <!-- <div class="status font_12 color_grey">
                                                    <i class="fa fa-circle {{$userLists->listData->chat_status==1 ? 'online' : 'smart_text'}} icon-{{$userLists->listData->id}}" data-title="Away">
                                                        <span class="ms-1">{{$userLists->listData->chat_status==1 ? 'online' : 'away'}}</span>
                                                    </i>

                                                </div> -->
                                        </div>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        @else
                        <div class="self_user py-4 text-center h-100 d-flex justify-content-center align-items-center">
                            <p>Your chat rooms will appear here.</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="message_container_box position-relative">
                    @if(count($messages)>0)
                   
                    <div class="message_content_header d-flex align-items-center p-4">
                        <div class="chat-about d-flex align-items-center">
                            <div class="user_img pe-2 position-relative">
                                <img class="rounded-circle user_image" src="" alt="avatar">
                                <div class="status font_12  position-absolute chatboxicon userstatus"></div>
                            </div>
                            <div>
                                <div class="chat-with font_14 color_green font_weight_500 room-title clickable"></div>
                                <div class="chat-num-messages font_12 color_grey"></div>
                            </div>
                        </div>
                    </div>
                    <div class="message_content p-4">
                        <!-- message Display -->
                        <ul class="list-unstyled messages_content" id="messages_content">
                        </ul>
                    </div>
                    <form onSubmit="return sendMessage()" enctype="multipart/form-data" id="messageForm" class="position-absolute chat_input_box mb-2">
                        <div class="type_text_box text-end p-4 position-relative">
                            <div class="textbox_container">
                                <div id="selected_img" class="img-thumbs-hidden"></div>
                                <textarea oninput="auto_grow(this)" name="message-to-send" id="message-to-send" placeholder="Type your message" rows="1" spellcheck="false"></textarea>
                            </div>
                            <div class="image-upload">
                                <label for="file">
                                    <i class="fas fa-file"></i>
                                </label>

                                <input type="file" onchange="Filevalidation()" id="file" name="file[]" multiple>
                            </div>

                            <button type="submit" class=""><i class="fa fa-paper-plane font_14" aria-hidden="true"></i>
                            </button>
                        </div>
                    </form>
                    @else
                    <div class="no-message-content d-flex justify-content-center align-items-center h-100">
                        <div class="no_msg_tx">
                            <img src="{{asset('images/no-msg.png')}}" width="250" alt="">
                            <p class="m-0">Once you connect with a freelancer, your messages will be displayed here.</p>
                            <p> To get started, search for freelancers or post a job.</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')

<script>
    function auto_grow(element) {
        element.style.height = "5px";
        element.style.height = (element.scrollHeight) + "px";
        if (element.scrollHeight >= "100") {
            element.style.overflow = "auto";
        } else {
            element.style.overflow = "hidden";
        }
    }
    
    let today = new Date().toISOString().slice(0, 10)
    var sender_id = "<?php echo auth()->user()->id; ?>";
    var sender_name = "<?php echo auth()->user()->firstname; ?>";
    var lastmessageDate = "<?= $lastDate ?>";
    var countMessage = '<?php echo count($messages) ?>';
    const time = new Date();
    const formattedTime = time.toLocaleString("en-US", {
        hour: "numeric",
        minute: "numeric"
    });
    var receiver = $('#receiverId').val();
    var conversationId = $('#conversationId').val();
    var projectId = $('#projectId').val();
   
    socket.once('connect', function() {
        socket.emit('join', {
            id: sender_id
        });
    });
    setTimeout(() => {
        $('.users_list_0 .user_name,.users_list_0 .current_user').trigger('click');
    }, 500);

    // USER IS ONLINE
    // socket.on("online", (userId) => {
    //     console.log(userId, "Is Online!"); // update online status
    // });

    socket.on('updateUserStatus', function(data) {
        let $userStatusIcon = $('#status_show');
        $userStatusIcon.removeClass('online');
        $userStatusIcon.attr('title', 'Away')
        $userStatusIcon.html('Away')

        $.each(data.users, function(key, value) {
            if (value != null && value != 0) {
                console.log("key1",'user-icon-'+key);

                let $userIcon = $('.user-icon-' + key);
                $userIcon.addClass('online');
                $('.icon-' + key).addClass('online');
                $userIcon.attr('title', 'Online')
            } else {
                console.log("key",'user-icon-'+key);
                let $userIcon = $('.user-icon-' + key);
                $userIcon.addClass('offline');
                $('.icon-' + key).addClass('offline');
                $userIcon.attr('title', 'Away')
            }
        });
        updateUserStatus(data.chatStatus, data.user_id);
    });

    $(document).on('click', '.user_name,.current_user', function() {
        var receiver_id = $(this).attr('data-id');
        var user_name = $(this).attr('data-username');
        var user_image = $(this).attr('data-image');
        console.log("user_image",user_image);
        var conversationId = $(this).attr('data-conversation');
        var projectId = $(this).attr('data-project_id');
        $('.room-title').text(user_name);
        $('.user_image').attr('src','/storage/images/client_profile/'+user_image);

        socket.emit('user_connected', {
            sender_id,
            receiver_id,
            user_name
        });
        // Client-side for the recipient user

        chat_show(conversationId, receiver_id);
        read_message(conversationId, receiver_id,sender_id,projectId);
        $('#conversationId').val(conversationId);
        receiver = $('#receiverId').val(receiver_id);
        $('.current_user').removeClass('active');
        $(this).addClass('active');        
    });

    socket.on("user_connected", function(data) {
        receiver = $('#receiverId').val();
        conversationId = $('#conversationId').val();
    });

    socket.on("new_message", function(data, unreadCount,getTotalUnreadCount) {
        if (data.sender_id == receiver) {
            if(getTotalUnreadCount > 0){
                $('.notifi_count_'+data.receiver_id).html(getTotalUnreadCount);
            }
            if(data.conversationId == conversationId){
                var messageText = '';
                if (data.type == 1) {
                    messageText = data.message;
                } else {
                    baseurl = "<?= url('/') ?>";
                    if (data.type == 2) {
                        url = baseurl + '/storage/images/Message/' + data.message;
                        messageText = '<a class="test1" href="' + url + '" target="_blank"><img width="100px" src="' + baseurl + '/storage/images/Message/' + data.message + '" /></a>';
                    } else {
                        extension = data.message.split('.').pop();
                        extensionname = getFileType(extension);
                        url = baseurl + '/storage/images/Message/' + data.message;
                        imageUrl = baseurl + '/images/dummyIcon/' + extensionname.name;
                        messageText = '<a class="test1" href="' + url + '" target="_blank"><img src="' + imageUrl + '" width="30" /> ' + extensionname.imageName + '</a>';
                    }
                }
                var html = "";
                if (lastmessageDate != today) {
                    lastmessageDate = today;
                    html += "<li class='headingLine d-flex py-3 text-center'><hr class='w-100 mx-auto my-2'><h6 class='d-inline-block mx-3'>Today</h6><hr class='w-100 mx-auto my-2'></li>";
                }
                if (data.type == 1) {
                    html += "<li>\
                            <div class='message-data font_12 color_grey my-2 ps-4'>\
                                <span class='message-data-name'><i class='me'></i></span> \
                                <span class='message-data-time'>" + formattedTime + "</span> &nbsp; &nbsp;\
                            </div>\
                            <div class='message my-message'>" + messageText + "</div>\
                        </li>"
                } else {
                    html += "<li>\
                            <div class='message-data font_12 color_grey my-2 ps-4'>\
                                <span class='message-data-name'><i class='me'></i></span> \
                                <span class='message-data-time'>" + formattedTime + "</span> &nbsp; &nbsp;\
                            </div>\
                            <div class='message my-message image_container'>" + messageText + "</div>\
                        </li>"
                }
                $('.messages_content').append(html);
                $(".message_content").animate({
                    scrollTop: $(
                        '.message_content').get(0).scrollHeight
                }, 100);
            }
            read_message(data.conversationId, data.receiver_id,data.sender_id);
        }
    });
    $(document).keypress(function(e) {
        if (e.which == 13 && !e.shiftKey) { // Make sure shift key is not pressed
            e.preventDefault(); // Prevent default behavior of adding new line
            sendMessage(); // Call your function
        }
    });

    function sendMessage() {
        var message = $('#message-to-send').val().trim();
        $('#selected_img').empty().addClass('img-thumbs-hidden');
        if ($('#file')[0].files.length === 0 && message === '') {
            return false;
        } else {
            var formData = new FormData($("form#messageForm")[0]);
            formData.append('receiver_id', receiver);
            formData.append('sender_id', sender_id);
            formData.append('message', message);
            formData.append('conversationId', conversationId);
            $.ajax({
                url: "{{route('store_messages')}}",
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    socketCall(data);
                    $('#file').val('');
                    $('#message-to-send').val('');
                    user_list();
                    read_message(conversationId, receiver,sender_id);
                },
                error: function(err) {
                    alert('Size is too big, contact admin');
                }
            });

            return false;

        }
    }

    function socketCall(data) {
        var message = $('#message-to-send').val();
        len_files = $("#file").prop("files").length;
        if (len_files > 0) {
            imageArr = data.msg.image;
            for (var i = 0; i < len_files; i++) {
                var file_data = $("#file").prop("files")[i];
                const acceptedImageTypes = ['image/gif', 'image/jpeg', 'image/png'];
                var filetype = 2;
                if (acceptedImageTypes.includes(file_data.type)) {
                    var imagemessage = '<a href="' + window.URL.createObjectURL(file_data) + '" target="_blank" > <img src="' + window.URL.createObjectURL(file_data) + '" width="100" /> </a>';
                } else {
                    baseurl = "<?= url('/') ?>";
                    extension = file_data.type.split('/').pop();
                    extensionname = getFileType(extension);
                    imageUrl = baseurl + '/images/dummyIcon/' + extensionname.name;
                    var imagemessage = '<a href="' + window.URL.createObjectURL(file_data) + '" target="_blank" alt="' + file_data.name + '" > <img src="' + imageUrl + '" width="30" /> ' + extensionname.imageName + '</a>';
                    filetype = 3;
                }
                socket.emit("send_message", {
                    sender_id: sender_id,
                    receiver_id: receiver,
                    message: imageArr[i],
                    type: filetype,
                    conversationId: conversationId,
                });
                AppendHtml(imagemessage, filetype);

            }
        }
        if (message != '') {
            type = 1;
            socket.emit("send_message", {
                sender_id: sender_id,
                receiver_id: receiver,
                message: message,
                type: 1,
                conversationId: conversationId,
            });
            AppendHtml(message, type);

        }
    }

    function AppendHtml(message, type) {
        var html = "";
        if (lastmessageDate != today) {
            lastmessageDate = today;
            html += "<li class='headingLine d-flex py-3 text-center'><hr class='w-100 mx-auto my-2'><h6 class='d-inline-block mx-3'>Today</h6><hr class='w-100 mx-auto my-2'></li>";
        }
        if (type == '2' || type == '3') {
            html += "<li class='clearfix'>\
                            <div class='message-data text-end font_12 color_grey my-2'>\
                                <span class='message-data-time'>" + formattedTime + "</span> &nbsp; &nbsp;\
                                <span class='message-data-name'></span> <i class='me'></i>\
                            </div>\
                            <div class='message other-message image_container float-end font_14'>" + message + "</div>\
                        </li>";
        } else {
            html += "<li class='clearfix'>\
                            <div class='message-data text-end font_12 color_grey my-2'>\
                                <span class='message-data-time'>" + formattedTime + "</span> &nbsp; &nbsp;\
                                <span class='message-data-name'></span> <i class='me'></i>\
                            </div>\
                            <div class='message other-message float-end font_14'>" + message + "</div>\
                        </li>";
        }



        $('.messages_content').append(html);
        $('#message-to-send').val('');
        $(".message_content").animate({
            scrollTop: $(
                '.message_content').get(0).scrollHeight
        }, 100);
    }


    function chat_show(conversationId, receiver_id) {
        $('#message-to-send').val('');

        document.getElementById('messages_content').innerHTML = "";
        $.ajax({
            type: "POST",
            url: '{{route("get_messages")}}',
            data: {
                'conversation': conversationId,
                'user_id': receiver_id,
                "_token": "{{ csrf_token() }}",
            },
            success: function(data) {
                $("#messages_content").html(data.html);
                if (data.usersCount < 2) {
                    $('#message-to-send').attr('placeholder', 'You cant reply to this user anymore');
                    $('#message-to-send').attr('disabled', 'disabled');
                    $('#message-to-send').css('background', 'black');
                    $('#message-to-send').css('color', 'white');
                    $('#file').css('visibility', 'hidden');

                } else {
                    $('#message-to-send').attr('placeholder', 'send message');
                    $('#message-to-send').removeAttr('disabled');
                    $('#message-to-send').css('background', '');
                    $('#message-to-send').css('color', '');
                    $('#file').css('visibility', 'visible');

                }
                const array = [data.conv.sender_id, data.conv.receiver_id];
                senderId = <?= auth()->id() ?>;
                const index = array.indexOf(senderId);
                if (index > -1) { // only splice array when item is found
                    array.splice(index, 1); // 2nd parameter means remove one item only
                }
                $('.message_content').scrollTop($('.message_content')[0].scrollHeight);
            },
        });
    }

    //for display user list
    function user_list() {
        $("#user_list_real").html('');
        $.ajax({
            url: "{{route('user_list')}}",
            type: "POST",
            data: {
                'name': ''
            },
            success: function(data) {
                $("#user_list_real").html(data.html);
            }
        });
    }

    function read_message(conversationId, receiver_id,senderid) {
        $.ajax({
            type: "POST",
            url: '{{route("read_message")}}',
            data: {
                'conversationId': conversationId,
                'receiver_id': receiver_id,
                'sender_id': senderid,
                "_token": "{{ csrf_token() }}",
            },
            success: function(data) {   
                if (data.response == true) {
                    if (senderid == receiver) {
                        $('.notifi_count_'+receiver_id).html(data.unreadMessageCount);
                        if(data.individualUnreadMessageCount > 0){
                            $(`#unread-messages-${receiver}-${conversationId}`).addClass('notifi_count');
                            $(`#unread-messages-${receiver}-${conversationId}`).text(data.individualUnreadMessageCount);
                        }
                    }else{
                        $('.notifi_count_'+senderid).html(data.unreadMessageCount);
                            if(data.individualUnreadMessageCount > 0){
                                $(`#unread-messages-${receiver_id}-${conversationId}`).addClass('notifi_count');
                                $(`#unread-messages-${receiver_id}-${conversationId}`).text(data.individualUnreadMessageCount);
                            }else{
                                $(`#unread-messages-${receiver_id}-${conversationId}`).removeClass('notifi_count');
                                $(`#unread-messages-${receiver_id}-${conversationId}`).text('');
                            }
                                //  $.each( data.array, function( key, value ) {
                                //     console.log("------",value.receiver_id);
                                //     $(`#unread-messages-${value.receiver_id }-${value.id}`).text(value.unread_msg_count);
                                //     // $(`#unread-messages-${receiver }-${value.conv_id}`).text(value.count);
                                // });


                            }
                }
            },
        });
    }

    $('#messageSearchBox').on('keyup', function(e) {
        if (this.value.length >= 1) {
            $.ajax({
                url: "{{route('user_list')}}",
                type: "POST",
                data: {
                    'name': this.value
                },
                success: function(data) {
                    $("#user_list_real").html(data.html);
                }
            })

        }
    });

    function updateUserStatus(status, user_id) {
        $.ajax({
            url: "{{route('update_user_status')}}",
            type: "post",
            data: {
                'status': status,
                'user_id': user_id,
                'receiverId': receiver
            },
            success: function(data) {
                $('.userstatus').html(data);
                $('.status_'+receiver).html(data);
            }
        });
    }
    if (countMessage > 0) {
        var input = document.getElementById('messageSearchBox');

        input.onkeydown = function(e) {
            var key = event.keyCode || event.charCode;
            if (key == 8 || key == 46) {
                if ($("#messageSearchBox").val().trim().length == 0 || $("#messageSearchBox").val().trim().length == 1) {
                    user_list();
                }
            }
        };
    }

    function getFileType(extension) {
        name = '';
        imageName = '';
        data = [];
        switch (extension) {
            case 'pdf':
                name = 'pdf-icon.png';
                imageName = 'Pdf File';

                break;

            case 'mov':
                name = 'video-icon.png';
                imageName = 'Video File';
                break;

            case 'mp4':
                name = 'video-icon.png';
                imageName = 'Video File';
                break;

            case '3gp':
                name = 'video-icon.png';
                imageName = 'Video File';
                break;

            case 'ogg':
                name = 'video-icon.png';
                imageName = 'Video File';
                break;

            case 'zip':
                name = 'zip-icon.png';
                imageName = 'Zip File';
                break;

            default:
                name = 'txt-icon.png';
                imageName = 'Text File';
                break;
        }
        data['name'] = name;
        data['imageName'] = imageName;
        return data;
    }




    if (countMessage > 0) {
        var imgUpload = document.getElementById('file'),
            imgPreview = document.getElementById('selected_img'),
            totalFiles, previewTitle, previewTitleText, img;
        imgUpload.addEventListener('change', previewImgs, true);

        function previewImgs(event) {
            totalFiles = imgUpload.files.length;
            if (!!totalFiles) {
                imgPreview.classList.remove('img-thumbs-hidden');
            }
            for (var i = 0; i < totalFiles; i++) {
                wrapper = document.createElement('div');
                wrapper.classList.add('col-2');
                wrapper.classList.add('wrapper-thumb-list');
                removeBtn = document.createElement("span");
                closeBtn = document.createElement("i");
                removeBtn.appendChild(closeBtn);
                removeBtn.classList.add('remove-btn');
                closeBtn.classList.add('fa');
                closeBtn.classList.add('fa-times');
                img = document.createElement('img');
                img.src = URL.createObjectURL(event.target.files[i]);
                img.classList.add('img-preview-thumb');
                wrapper.appendChild(img);
                wrapper.appendChild(removeBtn);
                imgPreview.appendChild(wrapper);

                $('.remove-btn').click(function() {
                    $(this).parent('.wrapper-thumb-list').remove();
                    if ($('#selected_img').is(':empty')) {
                        imgPreview.classList.add('img-thumbs-hidden');
                    }
                });
            }
        }
        setTimeout(() => {
            $('.message_content').scrollTop($('.message_content')[0].scrollHeight);
        }, 2000);
    }


</script>
@endsection