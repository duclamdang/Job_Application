<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class DashboardTable extends Component
{
    use WithPagination;

    public function render()
    {
        $users = User::latest()->paginate(10);
        return view('livewire.dashboard-table', ['users' => $users]);
    }
}