<?php

namespace App\Filament\Resources;

use Filament\Notifications\Notification;
use App\Models\User;
use App\Models\NotificationLog;

trait NotifiesAdmins
{
    protected function notifyAdmins($title, $body, $type = 'success')
    {
        Notification::make()
            ->title($title)
            ->body($body)
            ->{$type}()
            ->sendToDatabase(User::role('admin')->get());

        // Log to NotificationLog
        NotificationLog::create([
            'title' => $title,
            'body' => $body,
            'type' => $type,
            'user_id' => auth()->id(),
            'success' => true,
            'data' => [],
        ]);
    }
}
