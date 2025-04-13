@extends('client.dokter.layout')
@section('title', 'Detail Konsultasi')

@section('dokter-content')
    <h1 class="text-2xl font-bold mb-4">Detail Konsultasi</h1>

    <div class="bg-white p-6 rounded-lg shadow">
        <p><strong>Pasien:</strong> {{ $chat->user->nama_lengkap }}</p>
        <p><strong>Email:</strong> {{ $chat->user->email }}</p>
        <p><strong>Waktu Mulai:</strong> {{ $chat->waktu_mulai }}</p>
        <p><strong>Waktu Berakhir:</strong> {{ $chat->waktu_berakhir ?? '-' }}</p>
    </div>

    <h2 class="text-xl font-semibold mt-6 mb-2">Riwayat Chat</h2>
    <div class="space-y-2">
        @foreach ($chat->messages as $message)
            <div class="flex {{ $message->sender == 'dokter' ? 'justify-end' : 'justify-start' }}">
                <div
                    class="max-w-md p-4 mb-2 rounded shadow
                {{ $message->sender == 'dokter' ? 'bg-blue-100 text-right' : 'bg-gray-100 text-left' }}">

                    <p class="text-sm font-semibold">
                        {{ $message->sender == 'dokter' ? 'Dokter' : 'Pasien' }}:
                    </p>

                    <p class="text-gray-700">{{ $message->message }}</p>
                    <p class="text-xs text-gray-500 mt-1">
                        {{ $message->created_at->format('d M Y H:i') }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
