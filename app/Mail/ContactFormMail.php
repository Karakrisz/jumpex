<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; 

    /**
     * Create a new message instance.
     *
     * @param  array  $data  Az űrlap adatai
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
        return $this->subject('Új Kapcsolatfelvételi Üzenet')
                    ->markdown('emails.contact.form')
                    ->with([
                        'data' => $this->data,
                        'url' => 'https://www.jumpex.hu',
                        'color' => 'primary', 
                    ]);
    }
    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Új Kapcsolatfelvételi Űrlap Üzenet',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'emails.contact.form',
            with: [
                'data' => $this->data, 
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}