<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),

                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),

                TextInput::make('nis')
                    ->maxLength(8)
                    ->required(),

                Select::make('institution_id')
                    ->label('Institution')
                    ->relationship('institution', 'name')
                    ->required()
                    ->searchable()
                    ->preload(),

                FileUpload::make('foto')
                    ->maxSize(100)
                    ->acceptedFileTypes([
                        'image/jpeg',
                        'image/png',
                    ])
                    ->previewable(),
            ]);
    }
}
