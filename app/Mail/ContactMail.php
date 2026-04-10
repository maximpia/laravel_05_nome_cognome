<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
 /* use Symfony\Component\Mime\Address; */ 
use Illuminate\Mail\Mailables\Address; 

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;


    public $name,$email,$usermessage,$tel;

    /**
     * Create a new message instance.
     */
    public function __construct($name,$email,$usermessage,$tel)

    {
        $this->name= $name;
        
        $this->email= $email;
        
        $this->usermessage= $usermessage;
        $this->tel= $tel;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Grazie per averci contattato',
            from: new Address($this->email,$this->name),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'Mail.contact-mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
