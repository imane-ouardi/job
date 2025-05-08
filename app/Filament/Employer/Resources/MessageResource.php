<?php

namespace App\Filament\Employer\Resources;

use App\Filament\Employer\Resources\MessageResource\Pages;
use App\Filament\Employer\Resources\MessageResource\RelationManagers;
use App\Models\Message;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MessageResource extends Resource
{
    protected static ?string $model = Message::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('sender_id')
                    ->label('المرسل')
                    ->relationship('sender', 'name')
                    ->required(),
                Forms\Components\Select::make('receiver_id')
                    ->label('المستلم')
                    ->relationship('receiver', 'name')
                    ->required(),
                Forms\Components\Textarea::make('message')
                    ->label('الرسالة')
                    ->required()
                    ->maxLength(2000),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID')->sortable(),
                Tables\Columns\TextColumn::make('sender.name')->label('المرسل')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('receiver.name')->label('المستلم')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('message')->label('الرسالة')->limit(50),
                Tables\Columns\TextColumn::make('created_at')->label('تاريخ الإرسال')->dateTime('Y-m-d H:i'),
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
            'index' => Pages\ListMessages::route('/'),
            'create' => Pages\CreateMessage::route('/create'),
            'edit' => Pages\EditMessage::route('/{record}/edit'),
        ];
    }
}

// ... existing code ...
