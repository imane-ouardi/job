<?php

namespace App\Filament\Employee\Resources;

use App\Filament\Employee\Resources\JobResource\Pages;
use App\Filament\Employee\Resources\JobResource\RelationManagers;
use App\Models\Job;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JobResource extends Resource
{
    protected static ?string $model = Job::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('title')->label('Job Title'),
            Tables\Columns\TextColumn::make('company.name')->label('Company'),
            Tables\Columns\TextColumn::make('type')->label('Type'),
            Tables\Columns\TextColumn::make('location')->label('Location'),
            Tables\Columns\TextColumn::make('salary')
            ->label('Salary')
            ->formatStateUsing(fn ($state, $record) => number_format($state, 2) . ' ' . $record->currency),
                    Tables\Columns\TextColumn::make('deadline')->date()->label('Deadline'),
        ])
        ->actions([
            Tables\Actions\ViewAction::make(),
            Tables\Actions\Action::make('Apply')
                ->url(fn ($record) => route('applications.create', $record->id))
                ->label('Apply')
                ->color('primary'),
        ])
        ->filters([
            Tables\Filters\SelectFilter::make('type')
                ->options([
                    'Full-time' => 'Full-time',
                    'Part-time' => 'Part-time',
                    'Contract' => 'Contract',
                    'Internship' => 'Internship',
                    'remote' => 'Remote',
                ]),
            Tables\Filters\SelectFilter::make('location')
                ->label('Location')
                ->options(
                    fn () => \App\Models\Job::query()->pluck('location', 'location')->unique()->toArray()
                ),
            Tables\Filters\SelectFilter::make('company_id')
                ->label('Company')
                ->relationship('company', 'name'),
            Tables\Filters\SelectFilter::make('salary')
                ->label('Salary')
                ->options(
                    fn () => \App\Models\Job::query()->pluck('salary', 'salary')->unique()->toArray()
                ),
            Tables\Filters\SelectFilter::make('deadline')
                ->label('Deadline')
                ->options(
                    fn () => \App\Models\Job::query()->pluck('deadline', 'deadline')->unique()->toArray()
                ),
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
            'index' => Pages\ListJobs::route('/'),
            'create' => Pages\CreateJob::route('/create'),
            'edit' => Pages\EditJob::route('/{record}/edit'),
        ];
    }

public static function getEloquentQuery(): Builder
{
    return parent::getEloquentQuery()
        ->where('deadline', '>=', now());
}

}
