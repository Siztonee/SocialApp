<?php

namespace App\Livewire;

use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Notifications extends Component
{
    public $notifications;

    public function mount()
    {
        $this->notifications = Notification::where('user_id', Auth::id())->with('sender')->get();
    }

    public function render()
    {
        return view('livewire.notifications');
    }
}
