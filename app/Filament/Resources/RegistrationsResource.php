<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegistrationsResource\Pages;
use App\Filament\Resources\RegistrationsResource\RelationManagers;
use App\Models\Registrations;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RegistrationsResource extends Resource
{
    protected static ?string $model = Registrations::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('student_id')->relationship('student', 'name')->label('Student')->required(),
            Forms\Components\DatePicker::make('registration_date')->label('Registration Date')->required(),
            Forms\Components\Select::make('status')->label('Status')->options([
                'pending' => 'Pending',
                'accepted' => 'Accepted',
                'rejected' => 'Rejected',
            ])->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('student.name')->label('Student'),
            Tables\Columns\TextColumn::make('status')->label('Status'),
            Tables\Columns\TextColumn::make('registration_date')->label('Registration Date'),
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
            'index' => Pages\ListRegistrations::route('/'),
            'create' => Pages\CreateRegistrations::route('/create'),
            'edit' => Pages\EditRegistrations::route('/{record}/edit'),
        ];
    }
}
