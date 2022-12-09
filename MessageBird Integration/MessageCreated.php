<?php

namespace App\Notifications\Customers;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use NotificationChannels\Messagebird\MessagebirdChannel;
use NotificationChannels\Messagebird\MessagebirdMessage;

class MessageCreated extends Notification implements ShouldQueue
{
    use Queueable;
  
    public function via($notifiable)
    {
        return [MessagebirdChannel::class];
    }

    public function toMessagebird($notifiable)
    {
        $message = new MessagebirdMessage("Message Sent!");

        if (app()->environment('local', 'testing')) {
            $message->setRecipients([env('MESSAGEBIRD_TEST_RECIPIENT')]);
        }

        return $message;
    }
}
