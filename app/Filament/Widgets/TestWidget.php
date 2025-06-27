<?php

namespace App\Filament\Widgets;

use App\Models\Artikel;
use App\Models\Customer;
use App\Models\galery;
use App\Models\Mobil;
use App\Models\Transaksi;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TestWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            //
            Stat::make('Mobil', Mobil::count()),
            Stat::make('Customer', Customer::count()),
            Stat::make('Transaksi', Transaksi::count()),
            Stat::make('Galery', galery::count()),
            Stat::make('Artikel', Artikel::count()),
        ];
    }
}
