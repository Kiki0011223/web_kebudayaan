<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    protected $order;

    // Konstruktor untuk menerima data order
    public function __construct($order)
    {
        $this->order = $order;  // Menyimpan data order yang diterima
    }

    // Menentukan bagaimana email akan dibangun
    public function build()
    {
        // Menggunakan view dan mengirimkan data order ke view
        return $this->view('emails.order_confirmation')
                    ->with(['order' => $this->order])
                    ->subject('Konfirmasi Pemesanan Tiket');
    }
}
