<?php

namespace App\Filament\Employee\Resources;

use App\Filament\Employee\Resources\ApplicationResource\Pages;
use App\Filament\Employee\Resources\ApplicationResource\RelationManagers;
use App\Models\Application;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
    use Illuminate\Support\Facades\Auth;

class ApplicationResource extends Resource
{
    protected static ?string $model = Application::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('full_name')
                ->label('Full Name')
                ->required(),
            Forms\Components\TextInput::make('email')
                ->label('Email')
                ->email()
                ->required(),
            Forms\Components\TextInput::make('phone')
                ->label('Phone')
                ->required(),
            Forms\Components\TextInput::make('education')
                ->label('Education'),
            Forms\Components\Textarea::make('experience')
                ->label('Experience'),
            Forms\Components\Textarea::make('skills')
                ->label('Skills'),
            Forms\Components\FileUpload::make('cv')
                ->label('CV')
                ->directory('cvs')
                ->acceptedFileTypes(['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'])
                ->maxSize(2048),
            Forms\Components\FileUpload::make('extra_file')
                ->label('Extra File')
                ->directory('extra_files'),
            Forms\Components\Textarea::make('cover_letter')
                ->label('Cover Letter')
                ->required(),
            Forms\Components\Select::make('status')
                ->label('Status')
                ->options([
                    'pending' => 'Pending',
                    'accepted' => 'Accepted',
                    'rejected' => 'Rejected',
                ])
                ->default('pending'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')->label('Full Name')->searchable(),
                Tables\Columns\TextColumn::make('email')->label('Email')->searchable(),
                Tables\Columns\TextColumn::make('phone')->label('Phone'),
                Tables\Columns\TextColumn::make('education')->label('Education'),
                Tables\Columns\TextColumn::make('experience')->label('Experience')->limit(30),
                Tables\Columns\TextColumn::make('skills')->label('Skills')->limit(30),
                Tables\Columns\TextColumn::make('cv')->label('CV'),
                Tables\Columns\TextColumn::make('extra_file')->label('Extra File'),
                Tables\Columns\TextColumn::make('cover_letter')->label('Cover Letter')->limit(30),
                Tables\Columns\TextColumn::make('status')->label('Status'),
                Tables\Columns\TextColumn::make('created_at')->label('Applied At')->dateTime(),
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
            'index' => Pages\ListApplications::route('/'),
            'create' => Pages\CreateApplication::route('/create'),
            'edit' => Pages\EditApplication::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('user_id', Auth::id());
    }
}
