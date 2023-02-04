<?php

namespace App\Http\Livewire\Auth\Category;

use Livewire\Component;
use Livewire\WithPagination;

class CategoryList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.auth.category.category-list');
    }
}
