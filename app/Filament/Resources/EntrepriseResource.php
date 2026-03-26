<?php
namespace App\Filament\Resources;

use App\Filament\Resources\EntrepriseResource\Pages;
use App\Models\Entreprise;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Tabs;

class EntrepriseResource extends Resource
{
    protected static ?string $model = Entreprise::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Identité de l\'entreprise')
                    ->tabs([
                        // ONGLET 1 : INFORMATIONS GÉNÉRALES
                        Tabs\Tab::make('Général')
                            ->icon('heroicon-m-information-circle')
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->label('Nom de l\'entreprise')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('slogan')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('about')
                                    ->label('En bref (About)')
                                    ->maxLength(255),
                                Forms\Components\RichEditor::make('description')
                                    ->columnSpanFull(),
                            ]),

                        // ONGLET 2 : LOGOS
                        Tabs\Tab::make('Logos')
                            ->icon('heroicon-m-photo')
                            ->schema([
                                Forms\Components\FileUpload::make('logo_sans_fond')
                                    ->image()
                                    ,
                                Forms\Components\FileUpload::make('logo_fond_noir')
                                    ->image()
                                    ,
                                Forms\Components\FileUpload::make('logo_mince')
                                    ->label('Logo format réduit / Favicon')
                                    ->image()
                                    ,
                            ])->columns(3),

                        // ONGLET 3 : STRATÉGIE & CONTACTS
                        Tabs\Tab::make('Vision & Contact')
                            ->icon('heroicon-m-map-pin')
                            ->schema([
                                Forms\Components\Section::make('Stratégie')
                                    ->schema([
                                        Forms\Components\TextInput::make('mission'),
                                        Forms\Components\TextInput::make('vision'),
                                    ])->columns(2),
                                
                                Forms\Components\Section::make('Coordonnées')
                                    ->schema([
                                        Forms\Components\TextInput::make('address')
                                            ->label('Adresse physique'),
                                        Forms\Components\TextInput::make('phone')
                                            ->tel(),
                                        Forms\Components\TextInput::make('email')
                                            ->email(),
                                        Forms\Components\TextInput::make('website')
                                            ->url(),
                                    ])->columns(2),
                            ]),
                    ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo_sans_fond')
                    ->label('Logo'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nom')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->copyable(),
                Tables\Columns\TextColumn::make('phone')
                    ->label('Téléphone'),
                Tables\Columns\TextColumn::make('website')
                    ->label('Site Web')
                    ->url(fn ($record) => $record->website, true),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEntreprises::route('/'),
            'create' => Pages\CreateEntreprise::route('/create'),
            'edit' => Pages\EditEntreprise::route('/{record}/edit'),
        ];
    }
}