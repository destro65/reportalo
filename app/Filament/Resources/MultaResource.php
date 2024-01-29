<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MultaResource\Pages;
use App\Filament\Resources\MultaResource\RelationManagers;
use App\Models\Multa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use PHPUnit\Framework\MockObject\Generator\ClassIsReadonlyException;
use Models\User;

class MultaResource extends Resource
{
    
    protected static ?string $model = Multa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
        
    protected static ?string $navigationGroup = 'Multas';

    

       

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //                          
            ]);
    }

    
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                // Tables\Columns\TextColumn::make('id')
                // ->label('N° Multa'),                
                Tables\Columns\TextColumn::make('created_at')
                ->label('Fecha y hora de Multa')
                //->format('YYYY/MM/DD')
                ->searchable()
                ->sortable(),
                                
                Tables\Columns\TextColumn::make('carro.registro')
                ->label('Unidad')
                ->searchable(),                 
                Tables\Columns\TextColumn::make('ruta.nombre')
                ->label('Ruta')
                ->searchable(),
                //

                
                
            ])
            ->filters([
                //
                
            ])
            ->actions([
                //Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                //Tables\Actions\BulkActionGroup::make([
                    //Tables\Actions\DeleteBulkAction::make(),
                //]),
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
            'index' => Pages\ListMultas::route('/'),
            'create' => Pages\ListMultas::route('/harold'),
            //'edit' => Pages\EditMulta::route('/{record}/edit'),
        ];
    }
}
