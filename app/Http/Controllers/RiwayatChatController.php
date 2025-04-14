<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SesiChat;
use Illuminate\Support\Facades\Auth;

class RiwayatChatController extends Controller
{
    public function show($id)
    {
        $chat = SesiChat::with(['user', 'messages'])->where('id', $id)
            ->where('dokter_id', Auth::guard('dokter')->id())
            ->where('status', 'selesai')
            ->firstOrFail();

        return view('dokter.riwayat.show', compact('chat'));
    }
}
