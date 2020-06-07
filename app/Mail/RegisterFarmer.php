<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterFarmer extends Mailable
{
    use Queueable, SerializesModels;
    public $code;
    public $farmer;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($code,$farmer)
    {
        $this->code=$code;
        $this->farmer=$farmer;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'oyebamijitobi@gmail.com';
        $subject ="Welcome";
       $name='Farmcorps';

        $link='https://farmcorps.net/farmers/register/ref/'.$this->code;

        return $this->view('email.reg_farmers')
            ->from($address, $name)
            ->subject($subject)
            ->with('data',[ 'link'=>$link]);
    }
}
