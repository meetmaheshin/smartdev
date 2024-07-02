<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendProposalEmail;

class SendProposal extends Notification
{
    use Queueable;  
    protected $sender;
    protected $proposalSetting;
    protected $proposalDetails;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($sender, $proposalSetting, $proposalDetails)
    {
        $this->sender = $sender;
        $this->proposalSetting = $proposalSetting;
        $this->proposalDetails = $proposalDetails;
    }
    

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // dd($notifiable);

        $url = url('/client/projects/proposals/'.$this->proposalSetting->project_id.'?view=nav-review-proposal'); // Example URL
        if ($this->proposalSetting->duration_dropdown == "more_than_6") {
            $Duration = "More Than 6";
        } else if ($this->proposalSetting->duration_dropdown == "month_3_to_6") {
            $Duration = "Month 3 to 6";
        } else if ($this->proposalSetting->duration_dropdown == "month_1_to_3") {
            $Duration = "Month 1 to 3";
        } else if ($this->proposalSetting->duration_dropdown == "less_1") {
            $Duration = "Less than a month";
        }
        return (new MailMessage)
            ->subject('New Proposal Submission for Your Project')
            ->view('emails.proposal', [
                'proposalSetting' => $this->proposalSetting,
                'proposalDetails' => $this->proposalDetails,
                'url' => $url,
                'Duration'=>$Duration
            ]);
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
            //
        ];
    }
}
