<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class TotalUsers extends Widget
{
    protected static string $view = 'filament.widgets.total-users';
    
    public function getTotalUsers(): int
    {
        return \App\Models\User::count();
    }
}
