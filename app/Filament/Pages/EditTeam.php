<?php

namespace App\Filament\Pages;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationItem;
use Filament\Pages\Tenancy\EditTenantProfile;
use ManukMinasyan\FilamentCustomField\Filament\Resources\CustomFieldResource;
use ManukMinasyan\FilamentCustomField\Services\EntityTypeOptionsService;

class EditTeam extends EditTenantProfile
{
    protected static string $view = 'filament.pages.edit-team';

    protected static ?int $navigationSort = 2;

    public static function getLabel(): string
    {
        return 'Team Settings';
    }

    protected function getViewData(): array
    {
        return [
            'team' => Filament::getTenant(),
        ];
    }

    public function getSubNavigation(): array
    {
        return [
            NavigationItem::make('Profile'),
            NavigationItem::make('Workspace'),
            NavigationItem::make('Data Model')
        ];
    }
}
