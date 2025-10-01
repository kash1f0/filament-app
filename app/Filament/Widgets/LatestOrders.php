<?php

namespace App\Filament\Widgets;

use Filament\Actions\BulkActionGroup;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\TextColumn;
use App\Models\Order;

class LatestOrders extends TableWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(fn (): Builder => Order::query())
            ->columns([
                TextColumn::make('order_date')
                ->label('Order Date')
                ->date(),
                TextColumn::make('number')
                ->label('Number'),
                TextColumn::make('customer')
                ->label('Customer'),
                TextColumn::make('status')
                ->label('Status')
                ->badge() 
                ->colors([
                    'success' => 'shipped',    
                    'danger'  => 'new',  
                    'warning' => 'cancel',   
                ]),
                TextColumn::make('currency')
                ->label('Currency'),
                TextColumn::make('totol_price')
                ->label('Total Price'),
                TextColumn::make('shipping_cost')
                ->label('Shipping Cost'),
                TextColumn::make('open')
                ->label('Open')
                ->url(fn ($record) => $record.status),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                //
            ])
            ->recordActions([
                //
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ]);
    }
}
