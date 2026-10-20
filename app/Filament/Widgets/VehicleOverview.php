<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class VehicleOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Vehicles', \App\Models\Vehicle::count())
                ->description('Total number of vehicles')
                ->color('primary'),
        ];
    }
}
