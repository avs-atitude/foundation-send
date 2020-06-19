<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PublishMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->to('alexandre.souza@uotz.com.br', 'Alexandre')
        ->from(env('MAIL_FROM_ADDRESS'), env("MAIL_FROM_NAME"))
        ->subject('Link de Recuperação de senha')
        ->with([
            'name' => 'Alexandre'
        ])
        ->view("publish");
    }
}
