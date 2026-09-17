<?php

namespace App\Filament\Resources\Students\Pages;

use App\Filament\Exports\StudentExporter;
use App\Filament\Resources\Students\StudentResource;
use Filament\Actions\CreateAction;
use Filament\Actions\ExportAction;
use Filament\Actions\Exports\Models\Export;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Icons\Heroicon;

class ListStudents extends ListRecords
{
    protected static string $resource = StudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ExportAction::make()
                ->label('Export')
                ->icon(Heroicon::ArrowDownTray)
                ->exporter(StudentExporter::class)
                ->fileName(fn (Export $export): string => "data-siswa-{$export->getKey()}")
                ->chunkSize(250)
                ->options([
                    'descriptionLimit' => 250,
                ]),

            CreateAction::make(),
        ];
    }
}
