<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApoderadosMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Código de verificación terraVida";   
    public $id; 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($cod)
    {
        $this->id = $cod;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {  
        $cod = $this->id;      
        return $this->view('emails.test',compact('cod'));
    }
}
