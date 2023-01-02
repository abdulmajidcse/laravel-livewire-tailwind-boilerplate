<?php

namespace App\Http\Livewire\Auth\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryList extends Component
{
    use WithPagination;

    public function render()
    {
        // wireData
        $wireData['categories'] = Category::orderBy('name')->paginate(20);

        return view('livewire.auth.category.category-list', $wireData);
    }
}
