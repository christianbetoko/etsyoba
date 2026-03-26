<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SocialResource\Pages;
use App\Filament\Resources\SocialResource\RelationManagers;
use App\Models\Social;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn; // Still useful if the text input is for Heroicons or similar

class SocialResource extends Resource
{
    protected static ?string $model = Social::class;

    protected static ?string $navigationIcon = 'heroicon-o-share';
    protected static ?string $navigationGroup = 'Réseaux Sociaux';
    protected static ?string $modelLabel = 'Réseau Social';
    protected static ?string $pluralModelLabel = 'Réseaux Sociaux';

    protected static bool $canCreate = true;

    public static function getSlug(): string
    {
        return 'social';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Détails du Réseau Social')
                    ->description('Informations de base pour le réseau social.')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('name')
                                    ->label('Nom du Réseau')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('url')
                                    ->label('URL')
                                    ->url()
                                    ->required()
                                    ->maxLength(255),
                            ]),
                        TextInput::make('icon')
                            ->label('Nom de l\'Icône')
                            ->helperText('Ex: heroicon-o-facebook, fab fa-twitter. Doit être une classe d\'icône valide.')
                            ->maxLength(255)
                            ->nullable(), // Make it optional
                        Toggle::make('status')
                            ->label('Actif')
                            ->helperText('Active ou désactive l\'affichage de ce réseau social.')
                            ->default(true),
                    ])->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nom du Réseau')
                    ->searchable()
                    ->sortable(),
                // Display the icon based on the text input (assuming Heroicons or Font Awesome)
               
                TextColumn::make('url')
                    ->label('URL')
                    ->url(fn (Social $record): string => $record->url)
                    ->openUrlInNewTab()
                    ->limit(50),
                IconColumn::make('status')
                    ->label('Statut')
                    ->boolean()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Créé le')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Mis à jour le')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('status')
                    ->label('Statut')
                    ->trueLabel('Actif')
                    ->falseLabel('Inactif')
                    ->placeholder('Tous les statuts'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListSocials::route('/'),
            'create' => Pages\CreateSocial::route('/create'),
            'edit' => Pages\EditSocial::route('/{record}/edit'),
        ];
    }
}
