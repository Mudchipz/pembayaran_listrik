<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenggunaanResource\Pages;
use App\Filament\Resources\PenggunaanResource\RelationManagers;
use App\Models\Penggunaan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenggunaanResource extends Resource
{
    protected static ?string $model = Penggunaan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Data Penggunaan';

    protected static ?string $navigationGroup = 'Manajemen tagihan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListPenggunaans::route('/'),
            'create' => Pages\CreatePenggunaan::route('/create'),
            'edit' => Pages\EditPenggunaan::route('/{record}/edit'),
        ];
    }
}
