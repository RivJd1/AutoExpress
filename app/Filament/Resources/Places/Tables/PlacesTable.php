<?php

namespace App\Filament\Resources\Places\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PlacesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('ciudad')->searchable()->sortable(),
                TextColumn::make('nombre')->searchable(),
                TextColumn::make('descripcion')->label('Descripción')->limit(60),
            ]);
    }
}
