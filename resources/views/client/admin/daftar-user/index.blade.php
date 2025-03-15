@extends('client.admin.layouts.admin')

@section('title', 'Admin - Daftar User')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <ul>
            <li>
                <p href="" class="cursor-pointer text-hitam-800">Beranda</p>
            </li>
            <li class="breadcrumbs-separator rtl:-rotate-[40deg] text-hitam-800">/</li>
            <li aria-current="page" class="text-hitam-800">Daftar User</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="flex flex-col justify-between gap-3 pb-8">
        <h1 class="px-12 text-4xl font-semibold mb-7 text-hitam-800">Daftar User</h1>
        <div class="px-12">
            <div class="w-full overflow-x-auto rounded-lg border-[1px]">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Nomor Telepon</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($daftarUser as $user)
                            <tr>
                                <td class="text-nowrap">{{ $user->nama_lengkap }}</td>
                                <td>{{ $user->no_telp ? $user->no_telp : '-' }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="flex items-center gap-2">
                                    <form action="{{ route('user.delete', $user->id) }}" method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button
                                            class="w-10 h-10 text-white border-none btn btn-sm bg-error hover:bg-error/80"><span
                                                class="size-5 icon-[material-symbols--delete]"></span></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="w-full px-12">
            {!! $daftarUser->links() !!}
        </div>        
    </div>
@endsection
