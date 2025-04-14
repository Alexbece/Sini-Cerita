<?php

namespace App\Models;
use App\Models\User;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SesiChat extends Model
{
    use HasFactory;

    protected $casts = [
        'waktu_mulai' => 'datetime',
        'waktu_berakhir' => 'datetime',
    ];

    protected $table = 'sesi_chats';

    protected $fillable = [
        'user_id',
        'dokter_id',
        'waktu_mulai',
        'waktu_berakhir',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }

    public function messages()
    {
        return $this->hasMany(ChatMessage::class, 'sesi_chat_id');
    }

}
