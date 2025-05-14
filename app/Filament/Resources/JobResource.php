<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobResource\Pages;
use App\Models\Job;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;

class JobResource extends Resource
{
    protected static ?string $model = Job::class;
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'Management';
    protected static ?string $navigationLabel = 'Jobs';

    public static function form(Form $form): Form
{
    return $form->schema([
        TextInput::make('title')
            ->required()
            ->maxLength(255),

        Textarea::make('description')
            ->required()
            ->maxLength(2000),

        TextInput::make('location')
            ->required()
            ->maxLength(255),

        TextInput::make('salary')
            ->numeric()
            ->nullable()
            ->minValue(1000)
            ->maxValue(50000),

        Select::make('currency')
            ->options([
                'MAD' => 'MAD',
            ])
            ->default('MAD')
            ->required(),

        Select::make('type')
            ->options([
                'Full-time' => 'Full-time',
                'Part-time' => 'Part-time',
                'Contract' => 'Contract',
                'Internship' => 'Internship',
                'Remote' => 'Remote',
            ])
            ->required(),

        Select::make('company_id')
            ->relationship('company', 'name')
            ->required(),

        DatePicker::make('deadline')
            ->required()
            ->afterOrEqual(today()),
    ]);
}


    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('title')->label('Job Title'),
            TextColumn::make('company.name')->label('Company'),
            TextColumn::make('type')->label('Type'),
            TextColumn::make('location')->label('Location'),
            TextColumn::make('salary')->label('Salary'),
            TextColumn::make('currency')->label('Currency'),
            TextColumn::make('deadline')->date()->label('Deadline'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJobs::route('/'),
            'create' => Pages\CreateJob::route('/create'),
            'edit' => Pages\EditJob::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): \Illuminate\Database\Eloquent\Builder
    {
        return parent::getEloquentQuery()
            ->where('deadline', '>=', now());
    }
}
