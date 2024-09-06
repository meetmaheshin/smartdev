<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class CustomVerifyEmail extends VerifyEmail
{
    protected $user;

    // Override the constructor to pass the user object
    public function __construct($user)
    {
        $this->user = $user;
    }

    // Override the buildMailMessage method to customize the email
    protected function buildMailMessage($url)
    {
        $mailMessage = (new MailMessage)
            ->subject(Lang::get('Verify Email Address'))
            ->line(Lang::get('Please click the button below to verify your email address.'))
            ->action(Lang::get('Verify Email Address'), $url);

        // Custom message based on user role
        if ($this->user->is_admin == 0) {
            $mailMessage->line('Thank you for registering as a freelancer! We look forward to connecting you with exciting projects.');
        } elseif ($this->user->is_admin == 1) {
            $mailMessage->line('Thank you for registering as a client! We look forward to helping you find the perfect freelancer for your projects.');
        }

        $mailMessage->line(Lang::get('If you did not create an account, no further action is required.'));

        return $mailMessage;
    }
}
