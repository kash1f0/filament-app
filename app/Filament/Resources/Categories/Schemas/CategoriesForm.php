<?php

namespace App\Filament\Resources\Categories\Schemas;

use App\Models\Category;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;
use Laravel\Pail\Options;

class CategoriesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name'),
                Checkbox::make('is_parent')
                ->label('Check If Child Category')
                ->live(),
                Select::make('parent_category')
                ->options(Category::whereNotNull('parent_category')->pluck('name'))
                ->visible(fn (callable $get) => $get('is_parent')),
                CheckBox::make('visibility'),
            ]);
    }
}
