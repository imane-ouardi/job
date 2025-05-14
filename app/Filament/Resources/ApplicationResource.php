<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ApplicationResource\Pages;
use App\Models\Application;
use App\Models\Job;
use App\Models\User;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;

class ApplicationResource extends Resource
{
    protected static ?string $model = Application::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Management';
    protected static ?string $navigationLabel = 'Applications';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Select::make('user_id')
                ->relationship('user', 'name')
                ->searchable()
                ->required()
                ->label('Applicant'),
    
            Select::make('job_id')
                ->relationship('job', 'title')
                ->searchable()
                ->required()
                ->label('Job'),
    
            Textarea::make('cover_letter')
                ->rows(5)
                ->label('Cover Letter')
                ->maxLength(2000) 
                ->nullable(),
    
            FileUpload::make('resume')
                ->directory('resumes')
                ->label('Resume')
                ->acceptedFileTypes(['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'])
                ->maxSize(2048) 
                ->nullable(),
        ]);
    }
    

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            TextColumn::make('user.name')->label('Applicant')->searchable(),
            TextColumn::make('job.title')->label('Job')->searchable(),
            TextColumn::make('created_at')->dateTime()->sortable()->label('Applied At'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListApplications::route('/'),
            'create' => Pages\CreateApplication::route('/create'),
            'edit' => Pages\EditApplication::route('/{record}/edit'),
        ];
    }
}
