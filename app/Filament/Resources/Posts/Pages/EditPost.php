<?php

namespace App\Filament\Resources\Posts\Pages;

use App\Filament\Resources\Posts\PostResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Override;

class EditPost extends EditRecord
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make()->label('View garam hai'),
            DeleteAction::make()->label('Delete garam'),
        ];
    }

    //notfication edit garna milxa ya edit vayesi
    protected function getSavedNotificationTitle(): ?string
    {
        return "La hai post update vayo badai xa";
    }
}
