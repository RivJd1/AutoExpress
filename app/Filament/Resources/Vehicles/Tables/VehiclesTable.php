<?php

namespace App\Filament\Resources\Vehicles\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class VehiclesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('category.nombre')->label('Categoría')->sortable(),
                TextColumn::make('marca')->searchable()->sortable(),
                TextColumn::make('nombre')->label('Modelo')->searchable(),
                TextColumn::make('pasajeros'),
                TextColumn::make('transmision')
                    ->label('Transmisión')
                    ->badge()
                    ->formatStateUsing(fn ($state) => $state === 'automatico' ? 'Automática' : 'Manual'),
                TextColumn::make('precio')->prefix('L ')->numeric()->sortable(),
            ])
            ->filters([
            ])
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
