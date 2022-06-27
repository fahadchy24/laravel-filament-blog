<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('All Posts', Post::count())
                ->description('32k increase')
                ->descriptionIcon('heroicon-s-trending-up')
                ->color('success'),
            Card::make('Published', Post::where('is_published', true)->count())
                ->description('7% increase')
                ->descriptionIcon('heroicon-s-trending-down')
                ->color('danger'),
            Card::make('Average time on page', '3:12'),
        ];
    }
}
