<?php
namespace App\Filament\Resources;

use App\Filament\Resources\MembreResource\Pages;
use App\Models\Membre;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;

class MembreResource extends Resource
{
    protected static ?string $model = Membre::class;
    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $label = 'Membre';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informations Personnelles')
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(191)
                            ->unique(ignoreRecord: true),
                        TextInput::make('phone')
                            ->tel()
                            ->maxLength(255),
                        TextInput::make('role')
                            ->placeholder('Ex: Agronome, Technicien...')
                            ->maxLength(255),
                        FileUpload::make('image')
                            ->image()
                            
                            ->columnSpanFull(),
                        Textarea::make('message')
                            ->columnSpanFull(),
                    ]),

                Section::make('Réseaux Sociaux & Liens')
                    ->description('Liens vers les profils sociaux du membre')
                    ->columns(3)
                    ->schema([
                        TextInput::make('facebook')->url()->prefix('https://'),
                        TextInput::make('twitter')->url()->prefix('https://'),
                        TextInput::make('linkedin')->url()->prefix('https://'),
                        TextInput::make('instagram')->url()->prefix('https://'),
                       /*  TextInput::make('tiktok')->url()->prefix('https://'),
                        TextInput::make('youtube')->url()->prefix('https://'),
                        TextInput::make('website')->url()->prefix('https://')->columnSpan(1), */
                        Toggle::make('is_active')
                            ->label('Actif')
                            ->default(true)
                            ->inline(false),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->circular(),
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('role')
                    ->searchable(),
                TextColumn::make('email')
                    ->copyable()
                    ->searchable(),
                IconColumn::make('is_active')
                    ->label('Statut')
                    ->boolean()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Inscrit le')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\Filter::make('active')
                    ->query(fn ($query) => $query->where('is_active', true))
                    ->label('Actifs'),

                Tables\Filters\Filter::make('inactive')
                    ->query(fn ($query) => $query->where('is_active', false))
                    ->label('Inactifs'),  
               
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMembres::route('/'),
            'create' => Pages\CreateMembre::route('/create'),
            'edit' => Pages\EditMembre::route('/{record}/edit'),
        ];
    }
}