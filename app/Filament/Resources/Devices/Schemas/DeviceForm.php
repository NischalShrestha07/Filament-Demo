<?php

namespace App\Filament\Resources\Devices\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DeviceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required()
                    ->maxLength(255),

                TextInput::make('category')->required()
                    ->maxLength(255),

                TextInput::make('price')->required()
                    ->numeric()->label('Price')->prefix('$')->minValue(0),

                TextInput::make('brand')->nullable()
                    ->maxLength(255),


                TextInput::make('sold_by')->nullable()
                    ->maxLength(255),

                DatePicker::make('manufacture_date')->nullable()
                    ->label('Manufacture Date'),


                TextInput::make('manufacture_by')->nullable()
                    ->label('Manufacture By'),



            ]);
    }
}
