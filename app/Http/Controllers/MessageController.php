<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\PrivateMessageEvent;

class MessageController extends Controller
{
    public function conversation($userId) {
        $users = User::where('id', '!=', Auth::id())->get();
        $friendInfo = User::findOrFail($userId);
        $myInfo = User::find(Auth::id());

        $this->data['users'] = $users;
        $this->data['friendInfo'] = $friendInfo;
        $this->data['myInfo'] = $myInfo;
        $this->data['users'] = $users;

        return view('message.conversation', $this->data);
    }
}
