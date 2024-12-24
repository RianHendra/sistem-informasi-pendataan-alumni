<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Kelompok;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\KelompokResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KelompokResource\RelationManagers;

class KelompokResource extends Resource
{
    protected static ?string $model = Kelompok::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Personal';
    protected static ?string $navigationLabel = 'Kelompok';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_kelompok')
                    ->required(),
                Forms\Components\FileUpload::make('gambar_kelompok')
                ->label('Gambar')
                ->image()
                ->maxSize(1024) // Maksimum ukuran file 1 MB
                ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_kelompok'),
                Tables\Columns\ImageColumn::make('gambar_kelompok')
                ->circular()
                ->label('Gambar'),
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
            'index' => Pages\ListKelompoks::route('/'),
            'create' => Pages\CreateKelompok::route('/create'),
            'edit' => Pages\EditKelompok::route('/{record}/edit'),
        ];
    }
}
