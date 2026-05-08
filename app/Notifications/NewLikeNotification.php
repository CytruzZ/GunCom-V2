<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use App\Models\User;

class NewLikeNotification extends Notification
{
    use Queueable;

    public $causer;
    public $message;
    public $url;

    /**
     * Create a new notification instance.
     */
    public function __construct(User $causer, $message, $url)
    {
        $this->causer = $causer;
        $this->message = $message;
        $this->url = $url;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'causer_id' => $this->causer->id,
            'causer_name' => $this->causer->name,
            'causer_avatar' => $this->causer->profile_picture,
            'message' => $this->message,
            'url' => $this->url,
        ];
    }
}
