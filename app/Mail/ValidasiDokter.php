<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
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
        $this->status_validasi_data = $status_validasi_data; // Sesuai dengan parameter yang diterima
    }


    public function build()
    {
        if ($this->dokter->status_validasi_data == 'approved') {
            return $this->subject('Pendaftaran Anda telah disetujui!')
                ->view('emails.dokter_approved') // Pastikan path konsisten
                ->with([
                    'nama' => $this->dokter->nama_lengkap,
                    'login_url' => route('login'),
                ]);
        } else {
            return $this->subject('Pendaftaran Anda Ditolak')
                ->view('emails.dokter_rejected')
                ->with([
                    'nama' => $this->dokter->nama_lengkap,
                    'register_url' => route('register'),
                ]);
        }
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Validasi Dokter',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
