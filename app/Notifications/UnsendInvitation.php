<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UnsendInvitation extends Notification
{
    use Queueable;
    private $projectData;


    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($projectData)
    {
        $this->projectData = $projectData;
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
            'posted_id' => $this->projectData['id'],
            'title' => $this->projectData['title'],
            'button' =>'View',
            'url' => route('proposal.interview',['id'=>$this->projectData['id']])
        ];
    }
}
