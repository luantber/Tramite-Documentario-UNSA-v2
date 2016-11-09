<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public $nombre;
    public $email;
    public $empleado;
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.hola',['nombre'=>$this->nombre,'email'=>$this->email,'empleado'=>$this->empleado])
                        ->from('cs.tramite.documentario@gmail.com','Tramite Documentario')
                        ->subject('Activar su cuenta');

    }
}
