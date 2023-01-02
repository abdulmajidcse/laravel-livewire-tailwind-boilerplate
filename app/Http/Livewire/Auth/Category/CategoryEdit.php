<?php

namespace App\Http\Livewire\Auth\Category;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryEdit extends Component
{
    public Category $category;
    public $name, $parent_id;

    public function mount()
    {
        $this->name = $this->category->name;
        $this->parent_id = $this->category->parent_id;
    }

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
        // update slug
        $data['slug'] = Str::slug($data['name'] . ' ' . $this->category->id);

        $this->category->update($data);

        return $this->emit('statusMessage', 'Category Updated');
    }

    public function render()
    {
        return view('livewire.auth.category.category-edit');
    }
}
