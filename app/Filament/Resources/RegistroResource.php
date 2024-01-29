<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegistroResource\Pages;
use App\Filament\Resources\RegistroResource\RelationManagers;
use App\Models\Registro;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Forms\FormsComponent;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use PhpParser\Node\Stmt\Label;
use Filament\Tables\Filters\Filter;
use Illuminate\Support\Carbon;
use Filament\Resources\Pages\ListRecords\Tab;


class RegistroResource extends Resource
{
    protected static ?string $model = Registro::class;
    

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Registros';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //  Forms\Components\Select::make('id')
                //  ->relationship('user','name')
                //  ->preload(),
                 
                 
                
                Forms\Components\Select::make('ruta_id')
                ->relationship('ruta','nombre')
                ->preload()
                ->searchable()
                ->CreateOptionForm(
                    [
                        Forms\Components\TextInput::make('nombre')
                        ->required(),

                    ]
                )
                ->required(),
                Forms\Components\Select::make('carro_id')
                ->relationship('carro','placa')
                ->label('Unidad')
                ->preload()
                //->searchable()
                ->CreateOptionForm(
                    [
                        Forms\Components\TextInput::make('placa')
                        ->required(),
                        Forms\Components\TextInput::make('registro')
                        ->required(),
                        Forms\Components\TextInput::make('propietario')
                        ->required(),

                    ]
                )
                ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('id')
                ->label('Registro'),
                Tables\Columns\TextColumn::make('fecha')
                ->searchable()
                ->sortable(),
                //->hidden(),
                Tables\Columns\TextColumn::make('carro.registro')
                ->label('Unidad')
                ->searchable(),
                Tables\Columns\TextColumn::make('ruta.nombre')
                ->sortable(),
                //->searchable(),
                
            ])
            ->filters([
                //
                //Tables\Filters\SelectFilter::make('registro.fecha'),
                Tables\Filters\SelectFilter::make('ruta')->relationship('ruta', 'nombre'),
                Tables\Filters\SelectFilter::make('carro')->relationship('carro', 'registro'),
                Filter::make('fecha')
                ->form([
                    DatePicker::make('fecha')
                    ])
                ->query(function(Builder $query, array $data): Builder {
                    return $query
                    ->when(
                        $data['fecha'],
                        fn (Builder $query, $date): Builder => $query->whereDate('fecha', '=', $date),
                    );
                })
                ->indicateUsing(function (array $data): ?string {
                    if (! $data['fecha']) {
                        return null;
                    }
             
                    return 'fecha ' . Carbon::parse($data['fecha'])->toFormattedDateString();
                })
                
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),

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
            RelationManagers\DiasRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRegistros::route('/'),
            'create' => Pages\CreateRegistro::route('/create'),
            'edit' => Pages\EditRegistro::route('/{record}/edit'),
        ];
    }
    
}
