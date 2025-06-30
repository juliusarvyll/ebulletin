<?php

namespace App\Filament\Resources\AuthorResource\Pages;

use App\Filament\Resources\AuthorResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\NotifiesAdmins;

class CreateAuthor extends CreateRecord
{
    use NotifiesAdmins;

    protected static string $resource = AuthorResource::class;

    protected function afterCreate(): void
    {
        $this->notifyAdmins(
            'Author Created',
            'A new author was created by ' . auth()->user()->name
        );
    }
}
