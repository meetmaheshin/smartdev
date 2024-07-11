<?php

namespace App\Http\Controllers\Freelancer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Conservation;
use App\Models\Message;
use App\Models\User;
use App\Models\ProposalSetting;
use App\Http\Traits\FileUploadTrait;
use Auth, File, DB, Image;



class MessageController extends Controller
{
    use FileUploadTrait;
    public $conservation;
    public $receiverId;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
        $this->conservation = new Conservation;
        $this->message = new Message;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $title = 'Messages - '.config('app.name');

        // Retrieve conversation IDs where the authenticated user is either the sender or receiver
        $conversations = Conservation::where('sender_id', auth()->user()->id)->orWhere('receiver_id', auth()->user()->id)->pluck('id');
        // Retrieve messages with related conversation, sender, and receiver, ordered by created_at in descending order, and unique by conservation_id
        $messagess = Message::with('conversation', 'conversation.sender', 'conversation.receiver')->whereIn('conservation_id', $conversations)->orderBy('created_at', 'DESC')->get()->unique('conservation_id');
        // Initialize an empty array to store messages
        $messages = [];
        foreach ($messagess as $msg) {
            $listData = null;
            if ($msg->conversation->sender->id === auth()->id()) {
                $listData = $msg->conversation->receiver;
            } else if ($msg->conversation->receiver->id === auth()->id()) {
                $listData = $msg->conversation->sender;
            }

            if ($listData) {
                $msg->conversation['listData'] = $listData;
                $msg->conversation['unread_msg_count'] = $msg->where(['conservation_id'=>$msg->conversation->id,'is_read'=>'0'])->where('sender_id','!=',auth()->id())->count();
                $messages[] = $msg->conversation;
            }
        }
        // Retrieve last conversation, receiver ID, conversation ID, and last date
        $conversationfirst =  Message::with('conversation', 'conversation.sender', 'conversation.receiver')->whereIn('conservation_id', $conversations)->orderBy('created_at', 'DESC')->first();
        $lastDate = !empty($conversationfirst) ? date('Y-m-d', strtotime($conversationfirst->created_at)) : '';
        $receiverId = $conversationId = $projectId='';

        if (!empty($conversationfirst)) {
            if ($conversationfirst->conversation->sender->id === auth()->id()) {
                $conversationId = $conversationfirst->conversation->id;
                $receiverId = $conversationfirst->conversation->receiver->id;
                $projectId = $conversationfirst->conversation->project->id;

            } else if ($conversationfirst->conversation->receiver->id === auth()->id()) {
                $conversationId = $conversationfirst->conversation->id;
                $receiverId = $conversationfirst->conversation->sender->id;
                $projectId = $conversationfirst->conversation->project->id;

            }
        }
        return view('freelancer.message', compact('messages', 'receiverId', 'conversationId', 'lastDate','projectId','title'));
    }


    public function store(Request $request)
    {

        if ($request->file('file')) {
            foreach ($request->file('file') as $fkey => $fvalue) {
                $type = $fvalue->getClientOriginalExtension();
                $extensions = array('jpg', 'JPG', 'jpe', 'jpeg', 'JPEG', 'jfif', 'png', 'PNG', 'bmp', 'dib', 'gif');
                if (in_array($type, $extensions)) {
                    $fileName = $this->UploadFunction($fvalue, $fkey, 'Message', 2);
                    $arr[] = $this->SaveMessage($request, '2', $fileName);
                } else {
                    $fileName = $this->UploadFunction($fvalue, $fkey, 'Message', 3);
                    $arr[] = $this->SaveMessage($request, '3', $fileName);
                }
            }
            $messageData['image'] = $arr;
        }
        if (!empty($request->message)) {
            $messageData['text'] = $this->SaveMessage($request, '1');
        }

        return response()->json(['response' => 'true', 'msg' => $messageData]);
    }

    public function SaveMessage($data, $type = '1', $fileName = '') {
        $conversations = Conservation::where('id', $data->conversationId)->update(['is_reverted' => 1]);
        // Create a new message
        $message = new Message([
            'sender_id' => $data->sender_id,
            'conservation_id' => $data->conversationId,
            'message' => $fileName ? $fileName : $data->message,
            'type' => $type
        ]);

        // Save the message
        $message->save();
        return $message->message;
    }
    public function getMessages(Request $request)
    {
        // Store user_id and conversation in session
        $request->session()->put('user_id', $request->user_id);
        $request->session()->put('conversation', $request->conversation);

        // Retrieve conversation by ID
        $conversations =  Conservation::find($request->conversation);
        // Retrieve count of users based on sender_id and receiver_id from conversation
        $usersCount = User::whereIn('id', [$conversations->sender_id, $conversations->receiver_id])->count();
        $messages = Message::where('conservation_id', $request->conversation)->orderBy('created_at', 'ASC')->get();
        $html = "";
        $dateArr = [];
        if (count($messages) > 0) {
            foreach ($messages as $key => $mess) {
                $formattedTime = date('h:i A', strtotime($mess->created_at));
                $class = '';
                $message = '';

                if ($mess->type == '1') {
                    $message = $mess->message;
                } else if ($mess->type == '2') {
                    $class = 'image_container';
                    $imagePath = asset('/storage/images/Message/' . $mess->message);
                    $message =  "<a href='$imagePath' target='_blank'><img src='" . $imagePath . "' width='100px'/></a>";
                } else {
                    $class = 'image_container';
                    $extensionFileName = $this->GetFileExtension($mess->message);
                    $imagePath = asset('/storage/images/Message/' . $mess->message);
                    $imageUrl = asset('/images/dummyIcon/' . $extensionFileName['name']);
                    $ename = $extensionFileName['name'];
                    $einame = $extensionFileName['imageName'];
                    $message =  "<a href='$imagePath'  target='_blank'><img src='" . $imageUrl . "' width='30'/>" . $einame . "</a>";
                }

                $dateText = '';
                $messCreatedAt = date('d-m-Y', strtotime($mess->created_at));
                $today = date('d-m-Y');
                $yesterday = date('d-m-Y', strtotime("-1 days"));

                if ($messCreatedAt == $today) {
                    $dateText = 'Today';
                } else if ($messCreatedAt == $yesterday) {
                    $dateText = 'Yesterday';
                } else if ($messCreatedAt < $yesterday) {
                    $dateText = $messCreatedAt;
                }
                if (!in_array($dateText, $dateArr)) {
                    $html .= "<li class='headingLine d-flex py-3 text-center'><hr class='w-100 mx-auto my-2'><h6 class='d-inline-block mx-3'>$dateText</h6><hr class='w-100 mx-auto my-2'></li>";
                }
                $dateArr[] = $dateText;


                if ($mess->sender_id != auth()->id()) {
                    $html .=  "<li class='one_msg'>
                        <div class='message-data font_12 color_grey my-2 ps-4'>
                        <span class='message-data-name'><i class='me'></i></span> 
                        <span class='message-data-time'>" . $formattedTime . "</span> &nbsp; &nbsp;
                        </div>
                        <div class='message my-message text-break" . $class . "'>" . $message . "</div>
                        </li>";
                } else {
                    $html .=  "<li class='clearfix one_msg'>
                        <div class='message-data text-end font_12 color_grey my-2'>
                            <span class='message-data-time'>" . $formattedTime . "</span> &nbsp; &nbsp;
                            <span class='message-data-name'></span> <i class='me'></i>
                        </div>
                        <div class='message other-message float-end font_14 text-break" . $class . "'>" . $message . "</div>
                    </li>";
                }
            }
        }
        return response()->json(['response' => 'true', 'html' => $html, 'conv' => $conversations, 'usersCount' => $usersCount]);
    }

    public function updateReadMessage(Request $request) {

        // \DB::connection()->enableQueryLog();
        $updateMessageRead = Message::where(['conservation_id' => $request->conversationId, 'sender_id' => $request->receiver_id])->update(['is_read' => '1']);

        // $queries = \DB::getQueryLog();

        // dd($queries);


        $conversations = Conservation::where('sender_id', auth()->user()->id)->orWhere('receiver_id', auth()->user()->id)->pluck('id');
        $unreadMessageCount =  $this->message->getUnreadMessages($conversations);
        $individualUnreadMessageCount =  $this->message->getIndividualUnreadMessages($request->conversationId);


        // Retrieve messages with related conversation, sender, and receiver, ordered by created_at in descending order, and unique by conservation_id
        $messagess = Message::with('conversation', 'conversation.sender', 'conversation.receiver')->whereIn('conservation_id', $conversations)->orderBy('created_at', 'DESC')->get()->unique('conservation_id');
        $array = [];
        foreach ($messagess as $msg) {
            $listData = null;
            if ($msg->conversation->sender->id === auth()->id()) {
                $listData = $msg->conversation->receiver;
            } 
            
            else if ($msg->conversation->receiver->id === auth()->id()) {
                $listData = $msg->conversation->sender;
            }

            if ($listData) {
                $msg->conversation['listData'] = $listData;
                $msg->conversation['unread_msg_count'] = $msg->where('conservation_id',$msg->conversation->id)->where('sender_id',$msg->conversation->receiver->id)->where('is_read','0')->count();
                $array[] = $msg->conversation;
            }
        }
        // dd($array);
       
        return response()->json(['response' => true, 'unreadMessageCount' => $unreadMessageCount,'individualUnreadMessageCount'=>$individualUnreadMessageCount]);
    }

    public function GetFileExtension($file)
    {
        $fileNameParts = explode('.', $file);
        $ext = end($fileNameParts);
        $name = '';
        $imageName = '';
        $data = [];
        switch ($ext) {
            case 'pdf':
                $name = 'pdf-icon.png';
                $imageName = 'Pdf File';

                break;

            case 'mov':
                $name = 'video-icon.png';
                $imageName = 'Video File';
                break;

            case 'mp4':
                $name = 'video-icon.png';
                $imageName = 'Video File';
                break;

            case '3gp':
                $name = 'video-icon.png';
                $imageName = 'Video File';
                break;

            case 'ogg':
                $name = 'video-icon.png';
                $imageName = 'Video File';
                break;

            case 'zip':
                $name = 'zip-icon.png';
                $imageName = 'Zip File';
                break;

            default:
                $name = 'txt-icon.png';
                $imageName = 'Text File';
                break;
        }
        $data['name'] = $name;
        $data['imageName'] = $imageName;
        return $data;
    }
    public function getUserList(Request $request) {
        $messagess = Message::with('conversation', 'conversation.sender', 'conversation.receiver', 'conversation.project')->orderBy('created_at', 'DESC')
            ->whereHas('conversation.sender', function ($query) use ($request) {
                $query->where('firstname', 'LIKE', '%' . $request->name . '%')->orWhere('lastname', 'LIKE', '%' . $request->name . '%')->where('id', '!=', auth()->id());
            })->orWhereHas('conversation.receiver', function ($query) use ($request) {
                $query->where('firstname', 'LIKE', '%' . $request->name . '%')->orWhere('lastname', 'LIKE', '%' . $request->name . '%')->where('id', '!=', auth()->id());
            })
            ->get()->unique('conservation_id');

        $messages = [];
        foreach ($messagess as $msg) {
            if ($msg->conversation->sender->id === auth()->id()) {
                $msg->conversation['listData'] = $msg->conversation->receiver;
                $msg->conversation['unread_msg_count'] = $msg->where(['conservation_id'=>$msg->conversation->id,'is_read'=>'0'])->where('sender_id','!=',auth()->id())->count();

                $messages[] = $msg->conversation;
            } else if ($msg->conversation->receiver->id === auth()->id()) {
                $msg->conversation['listData'] = $msg->conversation->sender;
                $msg->conversation['unread_msg_count'] = $msg->where(['conservation_id'=>$msg->conversation->id,'is_read'=>'0'])->where('sender_id','!=',auth()->id())->count();
                $messages[] = $msg->conversation;
            }

        }

        // $messages = [];
        // foreach ($messagess as $msg) {
        //     if ($msg->conversation->sender->id === auth()->id()) {
        //         $listData = $msg->conversation->receiver;
        //         $messages[] = $msg->conversation;
        //     } else if ($msg->conversation->receiver->id === auth()->id()) {
        //         $listData = $msg->conversation->sender;
        //         $messages[] = $msg->conversation;
        //     }
        // }

        // if ($listData) {
        //     $msg->conversation['listData'] = $listData;
        //     // $msg->conversation['unread_msg_count'] = $msg->where(['conservation_id'=>$msg->conversation->id,'is_read'=>'0'])->where('sender_id','!=',auth()->id())->count();
        //     $messages[] = $msg->conversation;
        // }

        // dd($messages);


        $html = view('freelancer.message_user_list', compact('messages'))->render();
        return response()->json(['response' => 'true', 'html' => $html]);
    }
    public function UpdateUserStatus(Request $request) {
        $chat_status = $request->status == 1 ? 1 : 0;
        User::where('id', $request->user_id)->update(['chat_status' => $chat_status]);
        $receiverData = User::find($request->receiverId);
        $userStatus = "<i class='fa fa-circle " . ($receiverData && $receiverData->chat_status == 1 ? "online" : "smart_text") . " icon-$request->receiverId'></i><div class='user-icon-$request->receiverId' id='status_show text-success' title='" . ($receiverData && $receiverData->chat_status == 1 ? "Online" : "Away") . "'>";
        return $userStatus;
    }

    public function Urlfreelancer_message(Request $request){
        $receiverId = $request->user_id;
        $conId = $request->conversationId;
        $projectId = $request->projectId;
        $senderId = auth()->user()->id;

        $proposal = ProposalSetting::where(['project_id'=>$projectId,'receiver_id'=>$receiverId,'user_id'=>$senderId,'proposal_proposed_by'=>0])->first();

        if($proposal){
            return response()->json(['response' => 'true', 'url' => 'freelancer/freelance_job_proposal/'.$proposal->id]);

        }else{
            return response()->json(['response' => 'true', 'url' => 'freelancer/proposals/interview/uid/'.$projectId]);

        }

        
    }
}
