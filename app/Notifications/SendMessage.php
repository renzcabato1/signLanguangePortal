<?php

namespace App\Notifications;
use Illuminate\Support\HtmlString;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SendMessage extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    protected $message;
    public function __construct($message)
    {
        //
        $this->name = $message->name;
        $this->subject = $message->subject;
        $this->message = $message->message;
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
        return (new MailMessage)
                    ->subject('Contact Us')
                    ->greeting('Dear '.$this->name.',')
                    ->line('Your message has been received.')
                    ->line('Subject : '.$this->subject)
                    ->line(new HtmlString('Message : '.$this->message.'<br>'))
                    ->line(new HtmlString('<h4>This is an auto generated email please do not reply!<br>Thank you for using our application!</h4>'));
                    // ->line(new HtmlString('<h6>Thank you for using our application!</h6>'));
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
