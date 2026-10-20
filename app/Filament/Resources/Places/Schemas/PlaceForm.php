<?php

namespace App\Filament\Resources\Places\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PlaceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('ciudad')->required()->maxLength(255),
                TextInput::make('nombre')->required()->maxLength(255),
                Textarea::make('descripcion')->label('Descripción')->required()->columnSpanFull(),
            ]);
    }
}
