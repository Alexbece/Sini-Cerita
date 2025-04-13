<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChatMessage extends Model
{
    use HasFactory;

    protected $table = 'chat_messages';

    protected $fillable = [
        'sesi_chat_id',
        'user_id',
        'dokter_id',
        'message',
        'sender',
    ];

    public function sesiChat()
    {
        return $this->belongsTo(SesiChat::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dokter()
    {
        // ✅ override relasi dengan foreign table 'dokter' bukan 'dokters'
        return $this->belongsTo(Dokter::class, 'dokter_id', 'id');
    }
}
