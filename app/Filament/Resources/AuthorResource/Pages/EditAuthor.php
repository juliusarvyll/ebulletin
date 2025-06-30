<?php

namespace App\Filament\Resources\AuthorResource\Pages;

use App\Filament\Resources\AuthorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\NotifiesAdmins;

class EditAuthor extends EditRecord
{
    use NotifiesAdmins;

    protected static string $resource = AuthorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        $this->notifyAdmins(
            'Author Updated',
            'An author was updated by ' . auth()->user()->name
        );
    }
}
