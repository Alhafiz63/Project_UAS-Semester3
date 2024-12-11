<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentsResource\Pages;
use App\Filament\Resources\DocumentsResource\RelationManagers;
use App\Models\Documents;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DocumentsResource extends Resource
{
    protected static ?string $model = Documents::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('student_id')->relationship('student', 'name')->label('Student')->required(),
            Forms\Components\Select::make('document_type')->label('Document Type')->options([
                'birth_certificate' => 'Birth Certificate',
                'report_card' => 'Report Card',
                'photo' => 'Photo',
                'other' => 'Other',
            ])->required(),
            Forms\Components\FileUpload::make('file_path')->label('File Path')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('student.name')->label('Student'),
            Tables\Columns\TextColumn::make('document_type')->label('Document Type'),
            Tables\Columns\TextColumn::make('file_path')->label('File Path'),
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
            'index' => Pages\ListDocuments::route('/'),
            'create' => Pages\CreateDocuments::route('/create'),
            'edit' => Pages\EditDocuments::route('/{record}/edit'),
        ];
    }
}
