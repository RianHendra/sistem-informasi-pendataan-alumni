<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Personal;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PersonalResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PersonalResource\RelationManagers;

class PersonalResource extends Resource
{
    protected static ?string $model = Personal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Personal';
    protected static ?string $navigationLabel = 'Personal';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required(),
                Forms\Components\TextInput::make('nim')
                ->label('NIM')
                    ->required(),
                Forms\Components\FileUpload::make('gambar')
                ->image(),
                Forms\Components\Select::make('role')
                ->label('Pilih Role')
                ->options([
                    'UI/UX Designer' => 'UI/UX Designer',
                    'Front-End Developer' => 'Front-end Developer',
                    'Back-End Developer' => 'Back-end Developer',
                ])
                ->required(),
                Forms\Components\Textarea::make('deskripsi_singkat')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('nim')
                ->label('NIM'),
                Tables\Columns\ImageColumn::make('gambar')
                ->circular()
                ->label('Gambar'),
                Tables\Columns\TextColumn::make('role'),
                Tables\Columns\TextColumn::make('deskripsi_singkat'),
            
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
            'index' => Pages\ListPersonals::route('/'),
            'create' => Pages\CreatePersonal::route('/create'),
            'edit' => Pages\EditPersonal::route('/{record}/edit'),
        ];
    }
}
