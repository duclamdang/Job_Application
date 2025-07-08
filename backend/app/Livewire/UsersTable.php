<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;
use Livewire\Component;

class UsersTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setColumnSelectDisabled(); 
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Name", "name")
                ->sortable(),
            Column::make("Gender", "gender")
                ->sortable(),
            Column::make("Phone", "phone")
                ->sortable(),
            Column::make("Address", "address")
                ->sortable(),
            Column::make("Email", "email")
                ->sortable(),
            Column::make("Role", "role")
                ->sortable(),
            Column::make("Status", "status")
                ->sortable(),
            Column::make("Birthday", "birthday")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
