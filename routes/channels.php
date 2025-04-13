<?php

use App\Models\SesiChat;
use Illuminate\Support\Facades\Broadcast;
use App\Http\Middleware\BroadcastGuardMiddleware;
use App\Http\Middleware\AuthenticateUserOrDokter;

Broadcast::routes([
    'middleware' => [
        'web',
        BroadcastGuardMiddleware::class,
        AuthenticateUserOrDokter::class,
    ],
]);

Broadcast::channel('chat.{userId}.{dokterId}', function ($user, $userId, $dokterId) {
    if (auth()->guard('web')->check() && $user->id == $userId) {
        return true;
    }

    if (auth()->guard('dokter')->check() && $user->id == $dokterId) {
        return true;
    }

    return false;
}, ['guards' => ['web', 'dokter']]);



Broadcast::channel('chat-session.{chatId}', function ($user, $chatId) {
    $chat = SesiChat::find($chatId);

    if (!$chat)
        return false;

    if (auth()->guard('web')->check() && $user->id === $chat->user_id) {
        return true;
    }

    $dokter = auth()->guard('dokter')->user();
    if ($dokter && $dokter->id === $chat->dokter_id) {
        return true;
    }

    return false;
});

