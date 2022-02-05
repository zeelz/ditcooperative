<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewRegistration extends Mailable
{
    use Queueable, SerializesModels;

    public $new_member_data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($md)
    {
        $this->new_member_data = $md;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.newreg'); #no need to pass here, make it public and it will be available in the view file
    }
}
