<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        return [
            Stat::make('Revenue', '$192.10k')
             ->description('32k increase')
             ->descriptionIcon('heroicon-m-arrow-trending-up'),
            Stat::make('New Customer', '1.34k')
            ->description('3% decrease')
            ->descriptionIcon('heroicon-m-arrow-trending-down'),
            Stat::make('New Orders', '3.54k')
            ->description('7% increase')
            ->descriptionIcon('heroicon-m-arrow-trending-up'),
        ];
    }
}
