<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use App\Models\User;
use Filament\Forms\Components\MarkdownEditor;
use App\Models\Country;
use Filament\Tables\Columns\Summarizers\Count;

class OrdersForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('number'),
                Select::make('customer')
                ->options(User::whereHas('role', fn ($q) => $q->where('role', 'customer'))->get()),
                TextInput::make('status'),
                Select::make('Currency')
                ->options(Country::all()->map(fn (Country $country) => $country->currency)),
                Select::make('Country')
                ->options(Country::all()->map(fn (Country $country) => $country->name)),
                TextInput::make('street_address')
                ->columnSpan(2),
                TextInput::make('city'),
                TextInput::make('state')
                ->label('State/province'),
                TextInput::make('zip/postal code')
                ->integer(),
                MarkdownEditor::make('notes')
                ->columnSpan(2),
            ]);
    }
}
