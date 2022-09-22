<?php

namespace Yomi\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    public $name;
    public $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message,$name,$url)
    {
        $this->message = $message;
        $this->name    = $name;
        $this->url     = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::contact.mail')->with([
            'message' => $this->message,
            'name'    => $this->name,
            'url'     => $this->url
        ]);
    }
}
