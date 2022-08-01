<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InfoOrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $order = $this->data;
        $companyEmail = env('MAIL_FROM_ADDRESS');
        $emailSubject = 'Email de detection de nouvelles commandes de '.env('APP_NAME');
        return $this->from($companyEmail)
            ->view('mail.Info_order_mail', compact('order'))
            ->subject($emailSubject);
    }
}
