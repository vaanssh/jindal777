<?php

namespace App\Filament\Resources\CarouselResource\Pages;

use App\Filament\Resources\CarouselResource;
use Filament\Resources\Pages\Page;

class Carousel extends Page
{
    protected static string $resource = CarouselResource::class;

    protected static string $view = 'filament.resources.carousel-resource.pages.carousel';
}
