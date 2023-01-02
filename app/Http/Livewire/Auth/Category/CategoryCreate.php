<?php

namespace App\Http\Livewire\Auth\Category;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryCreate extends Component
{
    public $name, $parent_id;

    protected function rules()
    {
        return [
            'name' => ['required', 'string', 'max:180'],
            'parent_id' => ['nullable', 'integer', 'min:1'],
        ];
    }

    public function store()
    {
        $data = $this->validate();
        // create a new slug
        $lastCategory = Category::latest()->first();
        $data['slug'] = Str::slug($data['name'] . ' ' . $lastCategory?->id + 1 ?: 1);

        Category::create($data);

        $this->reset();

        return $this->emit('statusMessage', 'Category Created');
    }

    public function render()
    {
        return view('livewire.auth.category.category-create');
    }
}
