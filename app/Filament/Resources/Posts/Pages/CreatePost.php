<?php

namespace App\Filament\Resources\Posts\Pages;

use App\Filament\Resources\Posts\PostResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    //notification change garna milxa create garda
    protected function getCreatedNotificationTitle(): ?string
    {
        return "Hahah Post create vayo hai guys";
    }
}
