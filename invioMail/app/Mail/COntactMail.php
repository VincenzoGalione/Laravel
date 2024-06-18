<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class COntactMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $username, $usermail, $usermessage;  //! $message è una variabile riservata
    //! automaticamente disponibili sulla vista della mail


    /**
     * Create a new message instance.
     */
    public function __construct( $name,  $mail, $message)
    {
       $this->username = $name;
       $this->usermail = $mail;
       $this->usermessage = $message;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope //bussta della lettera
    {
        return new Envelope(
            subject: 'Grazie di averci contattato',
            from: new address('ristorante@noreply.com'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content //contenuto
    {
        return new Content(
            view: 'mail.contact-mail',
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
