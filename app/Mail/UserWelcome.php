<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserWelcome extends Mailable
{
    use Queueable, SerializesModels;

    public $user; // TODO email

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user) // TODO  email
    {
        $this->user = $user; // TODO email
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('eduer@eduer.com')
            ->view('mails.welcome') // TODO email
            ->with([
                'user' => $this->user  // TODO email
            ]);
    }
}
