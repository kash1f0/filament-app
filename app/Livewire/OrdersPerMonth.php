<?php

namespace App\Livewire;

use Filament\Widgets\ChartWidget;

class OrdersPerMonth extends ChartWidget
{
    protected ?string $heading = 'Orders Per Month';
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Orders',
                    'data' => [2500, 3528, 4782, 3190, 5682, 5932, 6913, 8956, 7735, 8624, 9895, 9031],
                    'backgroundColor' => '#36A2EB'
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
