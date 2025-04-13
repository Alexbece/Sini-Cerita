<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SessionEnded implements ShouldBroadcastNow
{
    public $userId;
    public $dokterId;

    public function __construct($userId, $dokterId)
    {
        $this->userId = $userId;
        $this->dokterId = $dokterId;
    }

    public function broadcastOn()
    {
        return new PrivateChannel("chat.{$this->userId}.{$this->dokterId}");
    }

    public function broadcastAs()
    {
        return 'session-ended';
    }
}