<?php

namespace App\Filament\Resources\Vehicles\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class VehicleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category_id')
                    ->label('Categoría')
                    ->relationship('category', 'nombre')
                    ->required(),
                TextInput::make('marca')->required()->maxLength(255),
                TextInput::make('nombre')
                    ->label('Modelo y año')
                    ->helperText('Ejemplo: Corolla 2022')
                    ->required()
                    ->maxLength(255),
                TextInput::make('pasajeros')->numeric()->minValue(1)->maxValue(30)->required(),
                Select::make('transmision')
                    ->label('Transmisión')
                    ->options(['manual' => 'Manual', 'automatico' => 'Automática'])
                    ->required(),
                TextInput::make('precio')->label('Precio por día')->numeric()->prefix('L')->required(),
                TextInput::make('imagen')
                    ->label('URL de la imagen')
                    ->url()
                    ->maxLength(500)
                    ->columnSpanFull(),
            ]);
    }
}
