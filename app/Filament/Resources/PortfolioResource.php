<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\RelationManagers\CategoriesRelationManager;
use App\Filament\Resources\CategoryResource\RelationManagers\PortfoliosRelationManager;
use App\Filament\Resources\PortfolioResource\Pages;
use App\Filament\Resources\PortfolioResource\RelationManagers;
use App\Models\Portfolio;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PortfolioResource extends Resource
{
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('name')->label('Name')->required(),
                    TextInput::make('name_en')->label('English Name')->required()->reactive()
                        ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                    TextInput::make('slug')->label('Slug'),
                    TextInput::make('year')->label('Year')->numeric(),
                    TextInput::make('url')->label('Url'),
                    TextInput::make('client')->label('Client'),
                    Toggle::make('is_active')->label('Is Active'),
                    RichEditor::make('description')
                                 ->label(__('Description'))
                                 ->disableToolbarButtons([
                                                    'attachFiles',
                                                    'codeBlock',
                                                   ]),
                    RichEditor::make('description_en')
                                 ->label(__('English Description'))
                                 ->disableToolbarButtons([
                                                    'attachFiles',
                                                    'codeBlock',
                                                   ]),
                    SpatieMediaLibraryFileUpload::make('SpecialImage')
                        ->label(__('SpecialImage'))
                        ->collection('SpecialImage'),
                    SpatieMediaLibraryFileUpload::make('gallery')
                        ->label(__('Gallery'))
                        ->multiple()
                        ->collection('gallery'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                   ->label('Name')
                   ->searchable()
                   ->sortable(),
                TextColumn::make('name_en')
                    ->label(__('English Name'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('mainCategory.name_en')
                    ->label(__('Category'))
                    ->searchable()
                    ->sortable(),
                ToggleColumn::make('is_active')
                        ->label('Visibelity')
                        ->sortable(),
                TextColumn::make('created_at')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('views')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            CategoriesRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}
