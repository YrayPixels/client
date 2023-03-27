<?php

namespace App\Mail;

use App\Models\Dealer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class register_dealer extends Mailable
{
    use Queueable, SerializesModels;

    public $dealer;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Dealer $dealer)
    {
        $this->dealer = $dealer;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('jeffrey@example.com', 'Jeffrey Way'),
            subject: 'Dealer Confirmation',
        );
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.email.confirm_dealer');
    }
}
