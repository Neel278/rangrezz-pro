<?php

namespace App\Events;

use App\Chatting;
use App\Paintings;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewMessage implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Chatting $message)
    {
        $this->message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PresenceChannel('painting.' . $this->message->painting->id . '.messages');
    }
    // public function broadcastWith()
    // {
    //     return [
    //         'message' => $this->message->message,
    //         'created_at' => $this->message->created_at->toFormattedDateString(),
    //         'user' => [
    //             'name' => $this->message->user->name,
    //             'avatar' => 'http://lorempixel/50/50',
    //         ]
    //     ];
    // }
}
