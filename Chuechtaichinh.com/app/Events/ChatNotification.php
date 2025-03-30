<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\ChatMessage;

class ChatNotification implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public $typeMessage;
    public $roomId;
    public $userId;
    public $partnerId;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($message, $typeMessage, $roomId, $userId, $partnerId)
    {
        $this->message = $message;
        $this->typeMessage = $typeMessage;
        $this->roomId = $roomId;
        $this->userId = $userId;
        $this->partnerId = $partnerId;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('chatNotification.'.$this->userId);
    }
    public function broadcastAs(){
        return 'chatNotification';
    }
}
