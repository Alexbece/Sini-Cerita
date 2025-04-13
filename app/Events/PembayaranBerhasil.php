<?php

namespace App\Events;

use App\Models\Pembayaran;
use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\PrivateChannel;

class PembayaranBerhasil implements ShouldBroadcast
{
    use Dispatchable, SerializesModels;

    public $pembayaran;

    public function __construct(Pembayaran $pembayaran)
    {
        $this->pembayaran = $pembayaran;
    }

    public function broadcastOn(): Channel
    {
        return new PrivateChannel('dokter.' . $this->pembayaran->dokter_id);
    }

    public function broadcastAs(): string
    {
        return 'pembayaran-berhasil';
    }

    public function broadcastWith(): array
    {
        return [
            'user_id' => $this->pembayaran->user_id,
            'dokter_id' => $this->pembayaran->dokter_id,
            'pembayaran_id' => $this->pembayaran->id,
            'user_name' => $this->pembayaran->user->name ?? '',
            'status' => $this->pembayaran->status,
        ];
    }
}
