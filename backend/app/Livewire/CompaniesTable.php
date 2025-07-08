<?php

namespace App\Livewire;

use App\Models\Company;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class CompaniesTable extends DataTableComponent
{
    protected $model = Company::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setColumnSelectDisabled();
    }

    public function columns(): array
    {
        return [
            Column::make("ID", "id")->sortable(),
            Column::make("Tên công ty", "title")->sortable(),
            Column::make("Địa chỉ", "address")->sortable(),
            Column::make("SĐT", "phone")->sortable(),
            Column::make("Email", "email")->sortable(),
            Column::make("Website", "website")->sortable(),
            Column::make("Người đại diện", "fullname")->sortable(),
            Column::make("Quy mô", "size")->sortable(),
            Column::make("Slug", "slug")->sortable(),
            Column::make("Map", "map")->sortable(),
            Column::make("Logo", "logo")->sortable(),
            Column::make("Mô tả", "description")->sortable(),
        ];
    }
}
