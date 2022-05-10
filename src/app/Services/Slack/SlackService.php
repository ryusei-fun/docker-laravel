<?php

namespace App\Services\Slack;

use Illuminate\Notifications\Notifiable;
use App\Notifications\SlackNotification;

class SlackService
{
    use Notifiable;

    public function send($username)
    {
        $this->notify(new SlackNotification($username));
    }

    /**
     * 通知先のSlackURLを取得してきて返す
     * 
     * @param mixed $notification
     * @return String
     */
    public function routeNotificationForSlack($notification)
    {
        return config('slack.public_url');
    }
}
