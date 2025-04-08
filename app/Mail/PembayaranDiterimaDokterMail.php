<?php

namespace App\Mail;

use App\Models\Pembayaran;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PembayaranDiterimaDokterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pembayaran;

    public function __construct(Pembayaran $pembayaran)
    {
        $this->pembayaran = $pembayaran;
    }

    public function build()
    {
        return $this->subject('Pasien Baru Telah Membayar Konsultasi')
            ->view('client.dokter.emails.newpasien');
    }
}
