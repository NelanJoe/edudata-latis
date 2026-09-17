<?php

namespace App\Filament\Widgets;

use App\Models\Institution;
use App\Models\Student;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getColumns(): int
    {
        return 2;
    }

    protected function getHeading(): ?string
    {
        return 'Student Analytics';
    }

    protected function getDescription(): ?string
    {
        return 'Overview data student dan institution.';
    }

    protected function getStats(): array
    {
        $totalStudents = Student::count();
        $totalInstitutions = Institution::count();

        return [
            Stat::make('Total Students', $totalStudents)
                ->description('Jumlah seluruh student')
                ->icon('heroicon-o-users')
                ->color('primary')
                ->chart([
                    5, 8, 12, 10, 15, 18, 20, 25, 22, 30,
                ]),

            Stat::make('Total Institutions', $totalInstitutions)
                ->description('Jumlah institution')
                ->icon('heroicon-o-building-office-2')
                ->color('info')
                ->chart([
                    1, 1, 1, 2, 2, 2, 2, 2,
                ]),
        ];
    }
}
