<?php

namespace App\Filament\Widgets;

use App\Models\Carousel;
use App\Models\Infrastructure;
use App\Models\Team;
use App\Models\Machinery;
use App\Models\Achievement;
use App\Models\HomePage;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Carousels', Carousel::count())
                ->description('Total number of carousel items')
                ->icon('heroicon-o-squares-2x2')
                ->color('success'),
                
            Stat::make('Total Infrastructure', Infrastructure::count())
                ->description('Total number of infrastructure items')
                ->icon('heroicon-o-building-office')
                ->color('info'),
                
            Stat::make('Total Team Members', Team::count())
                ->description('Total number of team members')
                ->icon('heroicon-o-users')
                ->color('warning'),
                
            Stat::make('Total Machinery', Machinery::count())
                ->description('Total number of machinery items')
                ->icon('heroicon-o-cog')
                ->color('danger'),
                
            Stat::make('Total Achievements', Achievement::count())
                ->description('Total number of achievements')
                ->icon('heroicon-o-trophy')
                ->color('success'),
                
            Stat::make('Total Home Pages', HomePage::count())
                ->description('Total number of home pages')
                ->icon('heroicon-o-home')
                ->color('primary'),
        ];
    }
} 