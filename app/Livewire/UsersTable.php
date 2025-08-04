<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UsersTable extends Component
{
    public function render()
    {
        return view(
            'livewire.users-table',
            ['users' => User::paginate(50)]
        );
    }
}
