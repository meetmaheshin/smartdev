<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PaymentReceived extends Notification
{
    use Queueable;
    private $postedData;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($postedData)
    {
        $this->postedData = $postedData ; 
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }
 
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'posted_id' => $this->postedData['id'],
            'title' => $this->postedData['description'],
            'button'=>'Contract',
            'url'=>route('home')
        ];
    }
}
