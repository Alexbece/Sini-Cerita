<?php

namespace App\Events;

use App\Models\ChatMessage;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\InteractsWithSockets;

class ChatMessageSent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public ChatMessage $message;

    public function __construct(ChatMessage $message)
    {
        $this->message = $message;
    }

    public function broadcastOn(): PrivateChannel
    {
        return new PrivateChannel('chat.' . $this->message->user_id . '.' . $this->message->dokter_id);
    }

    public function broadcastAs(): string
    {
        return 'chat-message-sent';
    }

    public function broadcastWith(): array
    {
        return [
            'id' => $this->message->id,
            'user_id' => $this->message->user_id,
            'dokter_id' => $this->message->dokter_id,
            'message' => $this->message->message,
            'sender' => $this->message->sender,
            'created_at' => $this->message->created_at->toDateTimeString(),
        ];
    }
}
