<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

// Email pour le client

class NotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(public string $email,public string $surname,public string $lastname,public string $city,public string $residentialAddress,public string $phone1,
    public $phone2,public string $cniNumber,public string $lieuCreationCni,public string $birthday,public string $profession,public string $toContactName,
    public string $toContactPhone,public string $toContactAddress,public string $segment,public string $delivery_address,public $uin,public $delivery,public $total_order,public $deliveryAmount,
    public $niuAmount,public $segmentAmount)
    {
        //
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Notification Nouvelle Commande De Carte Visa Prépayée (LTC GROUP)',
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
            markdown: 'emails.notification',
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
