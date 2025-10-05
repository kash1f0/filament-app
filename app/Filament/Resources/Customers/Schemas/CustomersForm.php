<?php

namespace App\Filament\Resources\Customers\Schemas;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use App\Models\User;
use Filament\Forms\Components\MarkdownEditor;
use App\Models\Country;
use Filament\Schemas\Schema;

class CustomersForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name'),
                TextInput::make('email'),
                TextInput::make('phone'),
                DatePicker::make('date_of_birth'),
                Select::make('country_id')
                ->options(Country::all()->map(fn ($val) => $val->name))
                ->columnSpan(2),
                
            ]);
    }
}
