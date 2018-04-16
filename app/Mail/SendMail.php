<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->name = $data['name'];
        $this->phone = $data['phone'];
        $this->text = $data['text'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))
                    ->view('frontend.email.email')
                    ->with([
                      'name' => $this->name,
                      'phone' => $this->phone,
                      'text' => $this->text
                    ])
                    ->subject('Сообщение от клиента с сайта: www.ugstroy.kz');
    }
}
