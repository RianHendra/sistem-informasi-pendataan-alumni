<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Alumni;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\AlumniResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AlumniResource\RelationManagers;

class AlumniResource extends Resource
{
    protected static ?string $model = Alumni::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Data Alumni';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationLabel = 'Alumni';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                ->required()
                ->maxLength(255),
                Forms\Components\FileUpload::make('gambar')
                ->image()
                ->maxSize(1024) // Maksimum ukuran file 1 MB
                ->required(),
                Forms\Components\TextInput::make('tahun_lulus')
                    ->numeric()
                    ->required(),
                Forms\Components\TextInput::make('pekerjaan')
                    ->maxLength(255),
                Forms\Components\TextInput::make('tempat_bekerja_sekarang')
                    ->label('Tempat Bekerja')
                    ->maxLength(255),
                Forms\Components\Textarea::make('deskripsi_singkat')
                ->label("Deskripsi Tentang Pekerjaan")
                    ->maxLength(65535),
                Forms\Components\TextInput::make('email')
                    ->email(),
                Forms\Components\TextInput::make('telepon')
                    ->tel(),
                Forms\Components\TextArea::make('alamat')
                    ->maxLength(255),
                Forms\Components\Select::make('jurusan_id')
                    ->relationship('jurusan', 'nama_jurusan')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\ImageColumn::make('gambar'),
                Tables\Columns\TextColumn::make('tahun_lulus'),
                Tables\Columns\TextColumn::make('pekerjaan'),
                Tables\Columns\TextColumn::make('tempat_bekerja_sekarang')
                ->label('Tempat Bekerja'),
                Tables\Columns\TextColumn::make('jurusan.nama_jurusan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
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
            'index' => Pages\ListAlumnis::route('/'),
            'create' => Pages\CreateAlumni::route('/create'),
            'edit' => Pages\EditAlumni::route('/{record}/edit'),
        ];
    }
}
