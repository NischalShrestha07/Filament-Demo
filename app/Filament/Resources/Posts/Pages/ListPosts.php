<?php

namespace App\Filament\Resources\Posts\Pages;

use App\Filament\Resources\Posts\PostResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // CreateAction::make(),//Its shows New {post} by default
            CreateAction::make()->label('Create New Post'), // label le btn vitra ko content change garna milxa
        ];
    }
}
