<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\AUA\ArchitectProfile;

class PaymentRequired extends Mailable
{
    use Queueable, SerializesModels;



    public $architectprofile;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ArchitectProfile $architectprofile)
    {
        $this->architectprofile=$architectprofile;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.subscription.paymentrequested');
    }
}
