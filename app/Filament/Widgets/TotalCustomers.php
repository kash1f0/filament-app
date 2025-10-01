<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class TotalCustomers extends ChartWidget
{
    protected ?string $heading = 'Total Customers';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Orders',
                    'data' => [2500, 3528, 4782, 3190, 5682, 5932, 6913, 8956, 7735, 8624, 9895, 9031],
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
