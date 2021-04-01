<?php

namespace App\Http\Controllers;
use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Events\PrivateMessageEvent;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $users = User::where('id', '!=', Auth::id())->get();
         $this->data['users'] = $users;
         return view('message.home', $this->data); */


         $id=Auth::id();
         $users = DB::table('users')
        ->Join('user_messages',function($join) {
                            $join->on('users.id','=','user_messages.sender_id')
                                ->orWhere('users.id','`user_messages.receiver_id`');
                        })
        ->where('user_messages.receiver_id', $id)
        ->orWhere('user_messages.sender_id', $id)
        ->select('users.name', 'users.*')->distinct()
        ->get();

       /*  $currentUserId = Auth::user()->id;
        $unviewedMessagesCount = Message::where('status', '0')
        ->Join('user_messages',function($join) {
            $join->on('users.id','=','user_messages.sender_id')
                ->orWhere('users.id','`user_messages.receiver_id`');
            })
        ->where('user_messages.receiver_id', $id)
        ->orWhere('user_messages.sender_id', $id)            
        ->count();
        */

        //$unviewedCustomersMessagesCount = Message::where('status', '0')->where('user_messages.receiver_id', $id)->count();
        $this->data['users'] = $users;
        return view('message.home',  $this->data);
    
    }

    public function conversation($userId) 
    {
        $users = User::where('id', '!=', Auth::id())->get();
        $friendInfo = User::findOrFail($userId);
        $myInfo = User::find(Auth::id());
        $this->data['users'] = $users;
        $this->data['friendInfo'] = $friendInfo;
        $this->data['myInfo'] = $myInfo;
        $this->data['users'] = $users;

        $checkchat = DB::table('user_messages')
        ->Join('messages',function($join) {
                            $join->on('messages.id','=','user_messages.message_id')
                                ->orWhere('user_messages.message_id', '=','messages.id');
                        })
        ->where('user_messages.receiver_id', Auth::id())
        ->orWhere('user_messages.sender_id', $userId )
        ->where('user_messages.receiver_id',$userId)
        ->orWhere('user_messages.sender_id',Auth::id())
        ->select('user_messages.message_id','user_messages.sender_id','user_messages.receiver_id','messages.message','messages.created_at')
        ->orderBy('messages.created_at','DESC')
        ->get();

        return view('message.conversation', $this->data)->with('message',$checkchat);;
    }


    public function sendMessage(Request $request) 
    {
        $request->validate([
           'message' => 'required',
           'receiver_id' => 'required'
        ]);

        $sender_id = Auth::id();
        $receiver_id = $request->receiver_id;

        $message = new Message();
        $message->message = $request->message;

        if ($message->save()) {
            try {
                $message->users()->attach($sender_id, ['receiver_id' => $receiver_id]);
                $sender = User::where('id', '=', $sender_id)->first();

                $data = [];
                $data['sender_id'] = $sender_id;
                $data['sender_name'] = $sender->name;
                $data['receiver_id'] = $receiver_id;
                $data['content'] = $message->message;
                $data['created_at'] = $message->created_at;
                $data['message_id'] = $message->id;

                event(new PrivateMessageEvent($data));

                return response()->json([
                   'data' => $data,
                   'success' => true,
                    'message' => 'Message sent successfully'
                ]);
            } catch (\Exception $e) {
                $message->delete();
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
