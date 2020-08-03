<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowNotifications extends Component
{
    public $notification;
    public function mount($notification)
    {
        $this->notification = $notification;
    }
    public function readed()
    {
        $this->notification->markAsRead();
    }
    public function render()
    {
        return view('livewire.show-notifications');
    }
}
