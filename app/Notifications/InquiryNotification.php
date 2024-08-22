<?php

namespace App\Notifications;


use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Http\Controllers\ContactController;

class InquiryNotification extends Notification
{

    public $first_name;
    public $email;
    public $phone;
  

    /**
     * Create a new notification instance.
     */
    public function __construct($first_name, $email, $phone)
    {
        $this->first_name = $first_name;
        $this->email = $email;
        $this->phone = $phone;
    }


    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */

    public function toMail($notifiable): MailMessage
    {

        return (new MailMessage)
                    ->subject('New Inquiry Received')
                    ->greeting('Hello Indeutsch,')
                    ->line('You have received a new inquiry with the following details:')
                    ->line('Name: ' . $this->first_name)
                    ->line('Email: ' . $this->email)
                    ->line('Phone Number: ' . $this->phone)
                    ->line('Thank you')
                    ->salutation('Best regards,')
                    ->salutation('Indeutsch');
    }
        

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'first_name' => $this->first_name,
            'email' => $this->email,
            'phone' => $this->phone,
        ];
    }
}
