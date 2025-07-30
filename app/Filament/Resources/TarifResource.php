<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TarifResource\Pages;
use App\Filament\Resources\TarifResource\RelationManagers;
use App\Models\Tarif;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Card;

class TarifResource extends Resource
{
    protected static ?string $model = Tarif::class;

    protected static ?string $navigationIcon = 'heroicon-o-bolt';

    protected static ?string $navigationGroup = 'Manajemen tagihan';

    protected static ?string $navigationLabel = 'Data Tarif';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                 Card::make()
                 ->schema([
                    TextInput ::make('Daya'),
                    TextInput ::make('Tarif/Kwh'),

                 ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('daya'),
                TextColumn::make('tarifperkwh'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTarifs::route('/'),
            'create' => Pages\CreateTarif::route('/create'),
            'edit' => Pages\EditTarif::route('/{record}/edit'),
        ];
    }
}
