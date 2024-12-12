<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersonalProgrammerResource\Pages;
use App\Filament\Resources\PersonalProgrammerResource\RelationManagers;
use App\Models\PersonalProgrammer;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PersonalProgrammerResource extends Resource
{
    protected static ?string $model = PersonalProgrammer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('email')
                ->required()
                ->email()
                ->unique(PersonalProgrammer::class, 'email')
                ->maxLength(255),
            Forms\Components\Textarea::make('bio')
                ->required(),
            Forms\Components\FileUpload::make('avatar')->label('avatar'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('email')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('bio')->limit(50),
            Tables\Columns\ImageColumn::make('avatar')
                ->label('avatar')
                ->disk('public'),   
                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListPersonalProgrammers::route('/'),
            'create' => Pages\CreatePersonalProgrammer::route('/create'),
            'edit' => Pages\EditPersonalProgrammer::route('/{record}/edit'),
        ];
    }
}
