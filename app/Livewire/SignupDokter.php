<?php

namespace App\Livewire;

use App\Models\Dokter;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class SignupDokter extends Component
{
    use WithFileUploads;

    public $currentStep = 1;
    public $nama_lengkap, $tanggal_lahir, $jenis_kelamin, $alamat, $email, $no_telp, $password;
    public $foto_profil, $foto_wajah, $foto_ktp, $foto_ijazah, $foto_strpk, $no_strpk, $foto_sippk, $no_sippk, $harga_layanan;
    public $successMessage = '';

    public function render()
    {
        return view('livewire.signup-dokter');
    }

    protected $messages = [
        'nama_lengkap.required'  => 'Nama lengkap wajib diisi!',
        'tanggal_lahir.required' => 'Tanggal lahir wajib diisi!',
        'tanggal_lahir.date'     => 'Format tanggal tidak valid!',
        'jenis_kelamin.required' => 'Jenis kelamin wajib diisi!',
        'alamat.required'        => 'Alamat wajib diisi!',
        'email.required'         => 'Email wajib diisi!',
        'email.email'            => 'Format email tidak valid!',
        'email.unique'           => 'Email sudah terdaftar!',
        'no_telp.required'       => 'Nomor telepon wajib diisi!',
        'no_telp.regex'          => 'Nomor telepon hanya boleh berisi angka, spasi, tanda plus, tanda kurung, atau tanda hubung.',
        'password.required'      => 'Password wajib diisi!',
        'password.min'           => 'Password minimal 6 karakter!',
        'foto_profil.required'   => 'Foto profil wajib diunggah!',
        'foto_wajah.required'    => 'Foto wajah wajib diunggah!',
        'foto_ktp.required'      => 'Foto KTP wajib diunggah!',
        'foto_ijazah.required'   => 'Foto Ijazah terakhir wajib diunggah!',
        'foto_strpk.required'    => 'Foto STRPK wajib diunggah!',
        'no_strpk.required'      => 'Nomor STRPK wajib diisi!',
        'foto_sippk.required'    => 'Foto SIPPK wajib diunggah!',
        'no_sippk.required'      => 'Nomor SIPPK wajib diisi!',
    ];

    public function firstStepSubmit()
    {
        $this->resetErrorBag();
        $this->validate(
            [
                'nama_lengkap'  => 'required',
                'tanggal_lahir' => 'required|date',
                'jenis_kelamin' => 'required|in:Pria,Wanita',
                'alamat'        => 'required',
                'email'         => 'required|email|unique:dokter,email',
                'no_telp'       => ['required', 'regex:/^[0-9]+$/'],
                'password'      => 'required|min:6',
                'foto_profil'   => 'required|image|mimes:jpg,jpeg,png|max:2048',
                'foto_wajah'    => 'required|image|mimes:jpg,jpeg,png|max:2048',
                'foto_ktp'      => 'required|image|mimes:jpg,jpeg,png|max:2048',
            ]
        );

        $this->currentStep = 2;
    }


    public function secondStepSubmit()
    {
        $this->validate([
            'foto_ijazah'   => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'foto_strpk'    => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'no_strpk'      => 'required|unique:dokter,no_strpk',
            'foto_sippk'    => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'no_sippk'      => 'required|unique:dokter,no_sippk',
            'harga_layanan' => 'required',
        ]);

        $this->currentStep = 3;
    }

    public function submitForm()
    {
        // Simpan file ke storage/public/dokter dan ambil path-nya
        $path_foto_ijazah = $this->foto_ijazah->store('dokter/foto_ijazah', 'public');
        $path_foto_profil = $this->foto_profil->store('dokter/foto_profil', 'public');
        $path_foto_wajah = $this->foto_wajah->store('dokter/foto_wajah', 'public');
        $path_foto_ktp = $this->foto_ktp->store('dokter/foto_ktp', 'public');
        $path_foto_strpk = $this->foto_strpk->store('dokter/foto_strpk', 'public');
        $path_foto_sippk = $this->foto_sippk->store('dokter/foto_sippk', 'public');

        Dokter::create([
            'nama_lengkap'  => $this->nama_lengkap,
            'tanggal_lahir' => $this->tanggal_lahir,
            'jenis_kelamin' => $this->jenis_kelamin,
            'alamat'        => $this->alamat,
            'email'         => $this->email,
            'no_telp'       => $this->no_telp,
            'password'      => Hash::make($this->password), // Hash password
            'foto_profil'   => $path_foto_profil,
            'foto_wajah'    => $path_foto_wajah,
            'foto_ktp'      => $path_foto_ktp,
            'foto_ijazah'   => $path_foto_ijazah,
            'foto_strpk'    => $path_foto_strpk,
            'no_strpk'      => $this->no_strpk,
            'foto_sippk'    => $path_foto_sippk,
            'no_sippk'      => $this->no_sippk,
            'harga_layanan'      => $this->harga_layanan,
            'role_id'       => 2,
        ]);

        $this->successMessage = 'Selamat! Akun Anda telah berhasil terdaftar di aplikasi kami.
                                Mohon bersabar sementara kami memproses validasi akun Anda. Kami akan segera mengirimkan email
                                konfirmasi setelah akun Anda berhasil diverifikasi oleh tim kami. Pastikan untuk memeriksa kotak
                                masuk secara berkala. Terima kasih atas kesabaran Anda! 😊';
        $this->currentStep = 4;
    }

    public function back($step)
    {
        $this->currentStep = $step;
    }

    public function clearForm()
    {
        $this->reset([
            'nama_lengkap',
            'tanggal_lahir',
            'jenis_kelamin',
            'alamat',
            'email',
            'no_telp',
            'password',
            'foto_profil',
            'foto_wajah',
            'foto_ktp',
            'foto_ijazah',
            'foto_strpk',
            'no_strpk',
            'foto_sippk',
            'no_sippk',
            'harga_layanan',
            'successMessage',
            'currentStep'
        ]);
        $this->currentStep = 1;
    }
}
