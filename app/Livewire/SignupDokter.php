<?php

namespace App\Livewire;

use App\Models\Dokter;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;


class SignupDokter extends Component
{
    use WithFileUploads;
    public $currentStep = 1;
    public $nama_lengkap, $tanggal_lahir, $jenis_kelamin,
        $alamat, $email, $no_telp, $password, $foto_profil, $foto_wajah, $foto_ktp, $foto_strpk, $no_strpk, $foto_sippk, $no_sippk;
    public $successMessage = '';

    public function render()
    {
        return view('livewire.signup-dokter');
    }

    public function firstStepSubmit()
    {

        $this->validate([
            'nama_lengkap'  => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required|in:pria,wanita',
            'alamat'        => 'required',
            'email'         => 'required|unique:dokter,email',
            'no_telp'       => 'required',
            'password'      => 'required|min:6',
            'foto_profil'   => 'required|image|mimes:jpg,jpeg|max:2048',
            'foto_wajah'    => 'required|image|mimes:jpg,jpeg|max:2048',
            'foto_ktp'      => 'required|image|mimes:jpg,jpeg|max:2048',

        ]);

        $this->currentStep = 2;
        $this->foto_profil->store('foto_profil', 'public');
        $this->foto_wajah->store('foto_wajah', 'public');
        $this->foto_ktp->store('foto_ktp', 'public');
    }

    public function secondStepSubmit()
    {
        $this->validate([
            'foto_strpk'    => 'required|image|mimes:jpg,jpeg|max:2048',
            'no_strpk'      => 'required',
            'foto_sippk'    => 'required|image|mimes:jpg,jpeg|max:2048',
            'no_sippk'      => 'required',
        ]);

        $this->currentStep = 3;
        $this->foto_strpk->store('foto_strpk', 'public');
        $this->foto_sippk->store('foto_sippk', 'public');
    }

    public function submitForm()
    {
        Dokter::create([
            'nama_lengkap'  => $this->nama_lengkap,
            'tanggal_lahir' => $this->tanggal_lahir,
            'jenis_kelamin' => $this->jenis_kelamin,
            'alamat'        => $this->alamat,
            'email'         => $this->email,
            'no_telp'       => $this->no_telp,
            'password'      => $this->password,
            'foto_profil'   => $this->foto_profil,
            'foto_wajah'    => $this->foto_wajah,
            'foto_ktp'      => $this->foto_ktp,
            'foto_strpk'    => $this->foto_strpk,
            'no_strpk'      => $this->no_strpk,
            'foto_sippk'    => $this->foto_sippk,
            'no_sippk'      => $this->no_sippk,
        ]);

        $this->successMessage = 'Daftar Berhasil';
        $this->clearForm();
        $this->currentStep = 1;
    }

    public function back($step)
    {
        $this->currentStep = $step;
    }

    public function clearForm()
    {

        $this->nama_lengkap  = '';
        $this->tanggal_lahir = '';
        $this->jenis_kelamin = '';
        $this->alamat        = '';
        $this->email         = '';
        $this->no_telp       = '';
        $this->password      = '';
        $this->foto_profil   = '';
        $this->foto_wajah    = '';
        $this->foto_ktp      = '';
        $this->foto_strpk    = '';
        $this->no_strpk      = '';
        $this->foto_sippk    = '';
        $this->no_sippk      = '';
    }
}
