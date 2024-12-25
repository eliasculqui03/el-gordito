<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmpresaResource\Pages;
use App\Filament\Resources\EmpresaResource\RelationManagers;
use App\Models\Empresa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmpresaResource extends Resource
{
    protected static ?string $model = Empresa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('tipo_actividad')
                    ->required()
                    ->options(
                        [
                            'Servicios' => 'Servicios',
                            'Otros' => 'Otros'
                        ]
                    ),
                Forms\Components\TextInput::make('ruc')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nombre_comercial')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('numero_decreto')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('logo')
                    ->label('Logo de la empresa')
                    ->image()
                    ->disk('public')
                    ->directory('images')
                    ->maxSize(1024)
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('telefono')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('direccion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('moneda')
                    ->required()
                    ->options([
                        'Nuevos Soles' => 'Nuevos Soles',
                        'Dolares Americanos' => 'Dolares Americanos',
                        'Otros' => 'Otros'
                    ]),
                Forms\Components\Textarea::make('mision')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('vision')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('descripcion')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('facebook')
                    ->maxLength(255),
                Forms\Components\TextInput::make('youtube')
                    ->maxLength(255),
                Forms\Components\TextInput::make('whatsapp')
                    ->maxLength(255),
                Forms\Components\TextInput::make('nombre_gerente')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('dni_gerente')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('telefono_gerente')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('correo_gerente')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('direccion_gerente')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('fecha_ingreso_gerente')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tipo_actividad')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ruc')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nombre_comercial')
                    ->searchable(),
                Tables\Columns\TextColumn::make('numero_decreto')
                    ->searchable(),
                Tables\Columns\TextColumn::make('logo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telefono')
                    ->searchable(),
                Tables\Columns\TextColumn::make('direccion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('moneda')
                    ->searchable(),
                Tables\Columns\TextColumn::make('facebook')
                    ->searchable(),
                Tables\Columns\TextColumn::make('youtube')
                    ->searchable(),
                Tables\Columns\TextColumn::make('whatsapp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nombre_gerente')
                    ->searchable(),
                Tables\Columns\TextColumn::make('dni_gerente')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telefono_gerente')
                    ->searchable(),
                Tables\Columns\TextColumn::make('correo_gerente')
                    ->searchable(),
                Tables\Columns\TextColumn::make('direccion_gerente')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fecha_ingreso_gerente')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListEmpresas::route('/'),
            'create' => Pages\CreateEmpresa::route('/create'),
            'edit' => Pages\EditEmpresa::route('/{record}/edit'),
        ];
    }
}
