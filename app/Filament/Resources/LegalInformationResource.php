<?php



namespace App\Filament\Resources;

use App\Filament\Resources\LegalInformationResource\Pages;
use App\Models\LegalInformation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class LegalInformationResource extends Resource
{
    protected static ?string $model = LegalInformation::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    
    protected static ?string $navigationLabel = 'Informations Légales';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Détails Juridiques')
                    ->description('Veuillez renseigner les identifiants officiels de l\'entreprise.')
                    ->schema([
                        Forms\Components\TextInput::make('rccm')
                            ->label('RCCM')
                            ->placeholder('Ex: CD/KNG/RCCM/20-B-0000')
                            ->maxLength(255),
                        
                        Forms\Components\TextInput::make('idnat')
                            ->label('ID NAT')
                            ->placeholder('Ex: 01-123-N45678Q')
                            ->maxLength(255),
                        
                        Forms\Components\TextInput::make('impot')
                            ->label('Numéro Impôt')
                            ->placeholder('Ex: A1234567X')
                            ->maxLength(255),
                    ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('rccm')
                    ->label('RCCM')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('idnat')
                    ->label('ID NAT')
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('impot')
                    ->label('Impôt')
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Créé le')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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
            'index' => Pages\ListLegalInformation::route('/'),
            'create' => Pages\CreateLegalInformation::route('/create'),
            'edit' => Pages\EditLegalInformation::route('/{record}/edit'),
        ];
    }
}