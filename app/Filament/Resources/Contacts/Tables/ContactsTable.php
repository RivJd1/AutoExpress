<?php

namespace App\Filament\Resources\Contacts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ContactsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('created_at')->label('Recibida')->dateTime('d/m/Y H:i')->sortable(),
                TextColumn::make('nombre_completo')->label('Nombre')->searchable(),
                TextColumn::make('telefono')->label('Teléfono'),
                TextColumn::make('vehicle.nombre')->label('Vehículo')->placeholder('Sin preferencia'),
                TextColumn::make('estado')
                    ->badge()
                    ->color(fn ($state) => $state === 'nueva' ? 'danger' : 'success'),
            ])
            ->filters([
                SelectFilter::make('estado')->options(['nueva' => 'Nueva', 'atendida' => 'Atendida']),
            ])
            ->defaultSort('created_at', 'desc')
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
