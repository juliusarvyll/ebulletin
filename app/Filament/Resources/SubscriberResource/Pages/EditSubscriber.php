<?php

namespace App\Filament\Resources\SubscriberResource\Pages;

use App\Filament\Resources\SubscriberResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\NotifiesAdmins;

class EditSubscriber extends EditRecord
{
    use NotifiesAdmins;

    protected static string $resource = SubscriberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        $this->notifyAdmins(
            'Subscriber Updated',
            'A subscriber was updated by ' . auth()->user()->name
        );
    }
}
