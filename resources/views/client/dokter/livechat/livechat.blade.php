@extends('layouts.app')

@section('data-page', 'livechat')
@section('data-user-id', $user->id)
@section('data-dokter-id', $dokter->id)

@section('app-content')
    <div class="container py-8 mx-auto">
        <div class="p-6 bg-white rounded-lg shadow">
            <h2 class="mb-4 text-xl font-semibold">
                @if (auth()->guard('dokter')->check())
                    Pasien: {{ $user->nama_lengkap }}
                @else
                    Dr. {{ $dokter->nama_lengkap }}
                @endif
            </h2>


            {{-- Chat box --}}
            <div id="chat-box" class="flex flex-col p-4 mb-4 space-y-2 overflow-y-auto bg-gray-100 border rounded h-96">
                {{-- Bubble chat akan muncul di sini via JS --}}
            </div>

            {{-- Form chat --}}
            <form id="chat-form" class="flex flex-col gap-2">
                @csrf
                <input type="hidden" name="sesi_chat_id" value="{{ $chat->id }}">
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <input type="hidden" name="dokter_id" value="{{ $dokter->id }}">
                <input type="hidden" name="sender" value="dokter">

                <div class="flex gap-2">
                    <input id="message-input"
                        class="flex-1 p-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-300"
                        type="text" name="message" placeholder="Ketik pesan..." required autocomplete="off">
                    <button type="submit" class="px-4 py-2 text-white transition bg-blue-600 rounded hover:bg-blue-700">
                        Kirim
                    </button>
                </div>
            </form>

            {{-- Tombol akhiri sesi --}}
            <form method="POST" id="end-session-form" action="{{ route('dokter.endChat', $chat->id) }}" class="mt-4 text-right">
                @csrf
                <button type="submit" class="px-4 py-2 text-white transition bg-red-500 rounded hover:bg-red-600">
                    Akhiri Sesi Chat
                </button>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const userId = {{ $user->id }};
            const dokterId = {{ $dokter->id }};
            const sender = "dokter"; // POV Dokter
            const chatBox = document.getElementById('chat-box');

            // Pusher setup
            const pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
                cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
                forceTLS: true,
                authEndpoint: '/broadcasting/auth',
                auth: {
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content')
                    }
                }
            });

            const channel = pusher.subscribe(`private-chat.${userId}.${dokterId}`);

            channel.bind('session-ended', function(data) {
                alert("Sesi live chat telah diakhiri.");
                window.location.href =
                    "{{ auth()->guard('dokter')->check() ? route('dokter.dashboard') : route('app-index') }}";
            });

            channel.bind('pusher:subscription_succeeded', function() {
                console.log(`✅ Berhasil subscribe ke channel private-chat.${userId}.${dokterId}`);
            });

            channel.bind('pusher:subscription_error', function(error) {
                console.error('❌ Gagal subscribe:', error);
            });

            // Terima pesan masuk
            channel.bind('chat-message-sent', function(data) {
                console.log('📩 Pesan masuk:', data);

                // Skip kalau pesan dari dokter sendiri (sudah ditampilkan sebelumnya)
                if (data.sender === 'dokter') return;

                const bubble = document.createElement('div');
                bubble.classList.add('flex', 'justify-start', 'mb-2');
                bubble.innerHTML = `
                    <div class="max-w-xs px-4 py-2 text-black bg-gray-200 rounded-xl">
                        <strong>Pasien:</strong>
                        <div class="message-text">${data.message}</div>
                    </div>
                `;
                chatBox.appendChild(bubble);
                chatBox.scrollTop = chatBox.scrollHeight;
            });

            // Kirim pesan
            document.getElementById('chat-form').addEventListener('submit', function(e) {
                e.preventDefault();
                const form = e.target;
                const message = form.message.value.trim();
                if (!message) return;

                // Optimistic UI (tampilkan duluan)
                const bubble = document.createElement('div');
                bubble.classList.add('flex', 'justify-end', 'mb-2');
                bubble.innerHTML = `
                    <div class="max-w-xs px-4 py-2 text-white bg-blue-500 rounded-xl">
                        <strong>Anda:</strong>
                        <div class="message-text">${message}</div>
                    </div>
                `;
                chatBox.appendChild(bubble);
                chatBox.scrollTop = chatBox.scrollHeight;

                const formData = new FormData(form);

                axios.post('{{ route('chat.send') }}', formData, {
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                .getAttribute('content')
                        }
                    })
                    .then(response => {
                        console.log('✅ Pesan berhasil dikirim:', response.data);
                    })
                    .catch(error => {
                        console.error('❌ Gagal mengirim pesan:', error);
                        alert('Pesan gagal dikirim.');
                        bubble.remove();
                    });

                form.reset();
            });
        });
    </script>
@endpush
