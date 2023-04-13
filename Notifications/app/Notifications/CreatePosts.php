<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CreatePosts extends Notification
{
    use Queueable;
    public $post_id;
    public $user_name;
    /**
     * Create a new notification instance.
     */
    public function __construct($post_id, $user_name)
    {
        //
        $this->user_name = $user_name;
        $this->post_id = $post_id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['Database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
           'user_name' =>$this->user_name,
            'post_id' =>$this->post_id,
        ];
    }
}
