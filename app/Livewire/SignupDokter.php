<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Dokter;
use Illuminate\Support\Facades\Hash;

class SignupDokter extends Component

{
    public $currentStep = 1;
    public $nama_lengkap, $tanggal_lahir, $jenis_kelamin, $alamat, $email, $no_telp, $password, $foto_profil, $foto_wajah, $foto_ktp, $foto_strpk, $no_strpk, $strpk_expired, $foto_sippk, $no_sippk;
    public $successMessage = '';

    // STEP 1 BIODATA
    public function firstStepSubmit()
    {
        $this->validate([
            'nama_lengkap' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:laki_laki,perempuan',
            'alamat' => 'required|string|max:255',
            'email' => 'required|email|unique:dokter,email',
            'no_telp' => 'required|string|max:20',
            'password' => 'required|min:6',
            'foto_profil' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'foto_wajah' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'foto_ktp' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $this->currentStep = 2;
    }

    // STEP 2 DOKUMEN KEDOKTERAN
    public function secondStepSubmit()
    {
        $this->validate([
            'foto_strpk' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'no_strpk' => 'required|string|unique:dokter,no_strpk',
            'strpk_expired' => 'required|date',
            'foto_sippk' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'no_sippk' => 'required|string|unique:dokter,no_sippk',
        ]);

        $this->currentStep = 3;
    }

    // SUBMIT FORM
    public function submitForm()
    {

        Dokter::create([
            'nama_lengkap' => $this->nama_lengkap,
            'tanggal_lahir' => $this->tanggal_lahir,
            'jenis_kelamin' => $this->jenis_kelamin,
            'alamat' => $this->alamat,
            'email' => $this->email,
            'no_telp' => $this->no_telp,
            'password' => Hash::make($this->password),
            'foto_profil' => $this->foto_profil->store('img/dokter', 'public'),
            'foto_wajah' => $this->foto_wajah->store('img/dokter', 'public'),
            'foto_ktp' => $this->foto_ktp->store('img/dokter', 'public'),
            'foto_strpk' => $this->foto_strpk->store('img/dokter', 'public'),
            'no_strpk' => $this->no_strpk,
            'strpk_expired' => $this->strpk_expired,
            'foto_sippk' => $this->foto_sippk->store('img/dokter', 'public'),
            'no_sippk' => $this->no_sippk,
        ]);

        $this->successMessage = 'Pendaftaran Berhasil!';
        $this->clearForm();
        $this->currentStep = 1;
    }

    /** 
     * Kembali ke Step Sebelumnya 
     */
    public function back($step)
    {
        $this->currentStep = $step;
    }

    /** 
     * Reset Form setelah Submit 
     */
    public function clearForm()
    {
        $this->nama_lengkap = '';
        $this->tanggal_lahir = '';
        $this->jenis_kelamin = '';
        $this->alamat = '';
        $this->email = '';
        $this->no_telp = '';
        $this->password = '';
        $this->foto_profil = null;
        $this->foto_wajah = null;
        $this->foto_ktp = null;
        $this->foto_strpk = null;
        $this->no_strpk = '';
        $this->strpk_expired = '';
        $this->foto_sippk = null;
        $this->no_sippk = '';
    }

    public function render()
    {
        return view('livewire.signup-dokter');
    }
}
