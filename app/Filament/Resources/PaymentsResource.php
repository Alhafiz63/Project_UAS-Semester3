<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaymentsResource\Pages;
use App\Filament\Resources\PaymentsResource\RelationManagers;
use App\Models\Payments;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaymentsResource extends Resource
{
    protected static ?string $model = Payments::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema ([
                Forms\Components\Select::make('student_id')->relationship('student', 'name')->label('Student')->required(),
            Forms\Components\TextInput::make('amount')->label('Amount')->numeric()->required(),
            Forms\Components\DatePicker::make('payment_date')->label('Payment Date')->required(),
            Forms\Components\Select::make('status')->label('Status')->options([
                'pending' => 'Pending',
                'completed' => 'Completed',
            ])->required(),
            Forms\Components\FileUpload::make('receipt_path')->label('Receipt'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('student.name')->label('Student'),
            Tables\Columns\TextColumn::make('amount')->label('Amount'),
            Tables\Columns\TextColumn::make('payment_date')->label('Payment Date'),
            Tables\Columns\TextColumn::make('status')->label('Status'),
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
            'index' => Pages\ListPayments::route('/'),
            'create' => Pages\CreatePayments::route('/create'),
            'edit' => Pages\EditPayments::route('/{record}/edit'),
        ];
    }
}
