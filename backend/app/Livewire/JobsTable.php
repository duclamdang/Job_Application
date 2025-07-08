<?php

namespace App\Livewire;

use App\Models\Job;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class JobsTable extends DataTableComponent
{
    protected $model = Job::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setColumnSelectDisabled(); // Ẩn nút "All Columns"
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")->sortable(),

            Column::make("Tiêu đề", "title")->sortable(),

            Column::make("Công ty", "company.title")
                ->label(fn($row) => optional($row->company)->title)
                ->sortable(),

            Column::make("Số lượng", "quantity")->sortable(),

            Column::make("Lương", "salary")->sortable(),

            Column::make("Địa điểm", "location")->sortable(),

            Column::make("Cấp bậc", "lever")->sortable(),

            Column::make("Hình thức", "is_fulltime")
                ->label(fn($row) => $row->is_fulltime ? 'Full-time' : 'Part-time'),

            Column::make("Gấp", "is_urgent")
                ->label(fn($row) => $row->is_urgent ? '⚠️ Có' : 'Không'),

            Column::make("Giới tính", "gender")->sortable(),

            Column::make("Hạn nộp", "end_date")
                ->label(fn($row) => optional($row->end_date)->format('d/m/Y')),

            Column::make("Kích hoạt", "is_active")
                ->label(fn($row) => $row->is_active ? '✅' : '❌'),

            Column::make("Ngày tạo", "created_at")
                ->label(fn($row) => $row->created_at->format('d/m/Y')),
        ];
    }
}
