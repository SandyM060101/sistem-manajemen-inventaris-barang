<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\ChartWidget;

class TotalPost extends ChartWidget
{
    protected static ?string $heading = 'Total Post';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
