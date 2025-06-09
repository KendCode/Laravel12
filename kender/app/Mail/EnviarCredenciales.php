<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnviarCredenciales extends Mailable
{
    use Queueable, SerializesModels;

    public $usuario;
    public $password;

    public function __construct($usuario, $password)
    {
        $this->usuario = $usuario;
        $this->password = $password;
    }

    public function build()
    {
        return $this->subject('Credenciales de acceso')
                    ->view('emails.credenciales'); // Asegúrate que esta vista exista
    }
}
