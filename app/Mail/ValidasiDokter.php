<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ValidasiDokter extends Mailable
{
    use Queueable, SerializesModels;
    public  $dokter, $status_validasi_data;
    /**
     * Create a new message instance.
     */
    public function __construct($dokter, $status_validasi_data)
    {
        $this->dokter = $dokter;
        $this->status_validasi_data = $status_validasi_data;
    }


    public function build()
    {
        if ($this->dokter->status_validasi_data == 'approved') {
            return $this->subject('Pendaftaran Anda telah disetujui!')
                ->view('client.admin.konselor.verifikasi-konselor.email-content.dokter_approved')
                ->with([
                    'nama' => $this->dokter->nama_lengkap,
                    'login_url' => route('login-dokter'),
                ]);
        } else {
            return $this->subject('Pendaftaran Anda Ditolak')
                ->view('client.admin.konselor.verifikasi-konselor.email-content.dokter_rejected')
                ->with([
                    'nama' => $this->dokter->nama_lengkap,
                    'register_url' => route('signup-dokter'),
                ]);
        }
    }
}
