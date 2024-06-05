<?php

namespace App\Livewire;

use App\Events\MessageSendEvent;
use App\Events\SendMessageEvent;
use App\Models\Message;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;

class ChatComponent extends Component
{
    public $user;
    public $sender_id;
    public $receiver_id;
    public $message = '';
    public $messages = [];


    public function mount($user_uuid)
    {
        $this->user = User::where('uuid', $user_uuid)->first();
        $this->sender_id = auth()->user()->id;
        $this->receiver_id = $this->user->id;


        $messages = Message::where(function ($query) {
            $query->where('sender_id', auth()->user()->id)
                ->where('receiver_id', $this->user->id);

        })->orWhere(function ($query) {
            $query->where('sender_id', $this->user->id)
                ->where('receiver_id', auth()->user()->id);

        })->with('sender:id,username,profile', 'receiver:id,username,profile')
            ->get();

        foreach ($messages as $message) {
            $this->chatMessage($message);
        }
    }


    public function sendMessage()
    {
        $message = new Message();
        $message->sender_id = $this->sender_id;
        $message->receiver_id = $this->receiver_id;
        $message->message = $this->message;
        $message->save();

        $this->chatMessage($message);
        broadcast(new MessageSendEvent($message))->toOthers();

        unset($this->message);
    }


    #[On('echo-private:chat-channel.{sender_id},MessageSendEvent')]
    public function listenForMessage($event)
    {
        $chatMessage = Message::whereId($event['message']['id'])
            ->with('sender:id,username,profile', 'receiver:id,username,profile')
            ->first();
        $this->chatMessage($chatMessage);
    }


    public function chatMessage($message)
    {
        $this->messages[] = [
            'id' => $message->id,
            'message' => $message->message,
            'sender' => $message->sender->username,
            'receiver' => $message->receiver->username,
        ];
    }


    public function render()
    {
        return view('livewire.chat-component', ['user' => $this->user]);
    }
}
