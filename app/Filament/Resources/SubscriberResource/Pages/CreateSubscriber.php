<?php

namespace App\Filament\Resources\SubscriberResource\Pages;

use App\Filament\Resources\SubscriberResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\NotifiesAdmins;

class CreateSubscriber extends CreateRecord
{
    use NotifiesAdmins;

    protected static string $resource = SubscriberResource::class;

    protected function afterCreate(): void
    {
        $this->notifyAdmins(
            'Subscriber Created',
            'A new subscriber was created by ' . auth()->user()->name
        );
    }
}
