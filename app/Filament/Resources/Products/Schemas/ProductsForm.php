<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProductsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->image(),
                TextInput::make('name')
                    ->default(null),
                TextInput::make('slug')
                    ->default(null),
                Toggle::make('visibility'),
                TextInput::make('price')
                    ->numeric()
                    ->default(null)
                    ->prefix('$'),
                TextInput::make('sku')
                    ->label('SKU')
                    ->default(null),
                TextInput::make('cost_per_item')
                    ->default(null),
                TextInput::make('compare_at_price')
                    ->default(null),
                TextInput::make('barcode')
                    ->default(null),
                TextInput::make('quantity')
                    ->numeric()
                    ->default(null),
                TextInput::make('security_stock')
                    ->default(null),
                Toggle::make('can_return'),
                Toggle::make('can_ship'),
            ]);
    }
}
