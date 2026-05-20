<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

use function PHPUnit\Framework\directoryExists;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('title')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(
                    fn($state, callable $set) =>
                    $set('slug', Str::slug($state))
                ),

            TextInput::make('slug')
                ->required(),



            Textarea::make('content')
                ->required(),

            FileUpload::make('featured_image')
                ->image()->directory('posts')->imageEditor()
                ->required(false),

            Select::make('status')
                ->options([
                    'draft' => 'Draft',
                    'published' => 'Published',
                ])
                ->default('draft')
                ->required(),

            Select::make('category_id')
                ->relationship('category', 'name')
                ->required(),


            Select::make('user_id')
                ->relationship('user', 'name')
                ->required(),


        ]);
    }
}
