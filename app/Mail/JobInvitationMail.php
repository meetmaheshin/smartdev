<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class JobInvitationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $jobDetails;

    /**
     * Create a new message instance.
     */
    public function __construct($jobDetails)
    {
        $this->jobDetails = $jobDetails;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->view('emails.job-invitation')
                    ->subject('You have been invited to submit a proposal!')
                    ->with('jobDetails', $this->jobDetails);
    }
}
