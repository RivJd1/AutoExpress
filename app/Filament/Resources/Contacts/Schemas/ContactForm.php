<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre_completo')->disabled(),
                TextInput::make('telefono')->label('Teléfono')->disabled(),
                TextInput::make('correo')->disabled(),
                Select::make('vehicle_id')
                    ->label('Vehículo')
                    ->relationship('vehicle', 'nombre')
                    ->getOptionLabelFromRecordUsing(fn ($record) => $record->nombreCompleto())
                    ->disabled(),
                DatePicker::make('fecha_recogida')->disabled(),
                DatePicker::make('fecha_entrega')->disabled(),
                Textarea::make('observacion')->label('Observación')->disabled()->columnSpanFull(),
                Select::make('estado')
                    ->options(['nueva' => 'Nueva', 'atendida' => 'Atendida'])
                    ->required(),
            ]);
    }
}
