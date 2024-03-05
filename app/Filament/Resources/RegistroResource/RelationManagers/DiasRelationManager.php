<?php

namespace App\Filament\Resources\RegistroResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DiasRelationManager extends RelationManager
{
    protected static string $relationship = 'dia';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('serie35')
                    ->required()
                    ->maxLength(255)
                    ->numeric()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('serie17')
                    ->required()
                    ->maxLength(255)
                    ->numeric()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('serie10')
                    ->required()
                    ->maxLength(255)
                    ->numeric()
                    ->columnSpanFull(),
                    
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('description')
            ->columns([                
                // Tables\Columns\TextColumn::make('id')
                // ->label('Vuelta'),
                Tables\Columns\TextColumn::make('hora'),
                Tables\Columns\TextColumn::make('serie35'),
                Tables\Columns\TextColumn::make('serie17'),
                Tables\Columns\TextColumn::make('serie10'),
                //Tables\Columns\TextColumn::make('vendidos'),
                //Tables\Columns\TextColumn::make('estimados.estimado'),
                
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                //Tables\Actions\EditAction::make(),
                //Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
