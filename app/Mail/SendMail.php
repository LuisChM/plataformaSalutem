<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\Console\Input\Input;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
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
        $data = $this->data;

        if( Input::file($this->data['archivo']) ) {
            $path = Input::file($this->data['archivo'])->getRealPath();
        } else {
return $this->from('nutricionsalutemcr@gmail.com')
            ->subject('Salutem')
            ->view('dynamic_email_template')
            ->with('data', $this->data)
            ->attach($this->data['archivo']->getRealPath(null),[
                 'as'=>'archivo.'.$this->data['archivo']->getClientOriginalExtension(),
                 'mime' => $data['archivo']->getMimeType()
            ]);        }
        
        
    }
}

?>
