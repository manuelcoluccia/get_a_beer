<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $bag;

    public function __construct($bag)
    {
        $this->bag = $bag;    
    }

    public function build()
    {   
        return $this->from('amministrazione@am.it')
        ->view('contact.mail');

    }
}
