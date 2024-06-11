<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AcceptInterview extends Notification
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
        $this->postedData = $postedData;
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
            'status'=>$this->postedData['status'],
            'freelancer_id'=>$this->postedData->getInvitedUser['firstname'],
            'posted_id' => $this->postedData['id'],
            'title' => $this->postedData->projects['title'],
            'button' =>'View Job',
            'url'=>route('project.proposal.view',['proposalId'=>$this->postedData['project_id'],'view=nav-invite-freelancers'])
        ];
    }
}
