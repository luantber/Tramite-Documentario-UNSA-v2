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
    public $asunto;
    public $mensaje;
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if (isset($this->asunto) and isset($this->mensaje))
        {
            return $this->view('emails.'.$this->mensaje,['nombre'=>$this->nombre,'email'=>$this->email,'empleado'=>$this->empleado])
                        ->from('cs.tramite.documentario@gmail.com','Tramite Documentario')
                        ->subject($this->asunto);
        }
        else
        {
            return $this->view('emails.hola',['nombre'=>$this->nombre,'email'=>$this->email,'empleado'=>$this->empleado])
                        ->from('cs.tramite.documentario@gmail.com','Tramite Documentario')
                        ->subject("Registro Tramite Documentario");
        }

    }
}
