<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details=$details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Prueba de correo')->view('TestEmail');
    }
    }

/*   


    public $details;

    use Queueable, SerializesModels;

public function __contruct($details){
$this->details=$details;

}


public function build(){
    return $this->subject('Prueba de correo')->view('TestEmail');
}
*/