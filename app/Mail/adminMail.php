<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class adminMail extends Mailable
{
    use Queueable, SerializesModels;
    public $pediatre;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pediatre)
    {
        //
        $this->pediatre=$pediatre;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('pediatrie13dz@gmail.com')
            ->view('admin.mail');
    }
}
