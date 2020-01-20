<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = 'oyebamijitobi@gmail.com';
        $subject ="Congratulations";
        $name = $this->data['name'];
        $name = (string)$name;

        return $this->view('email.password')
            ->from($address, $name)
            ->subject($subject)
            ->with('data',[ 'name'=>$name,'password'=>$this->data['password']]);
    }
}
