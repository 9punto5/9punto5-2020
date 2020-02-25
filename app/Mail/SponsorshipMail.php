<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SponsorshipMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $email;

    /**
     * Create a new message instance.
     *
     * @param string $name
     * @param string $email
     */
    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.sponsorship', [
            'name' => $this->name,
            'email' => $this->email
        ]);
    }
}
