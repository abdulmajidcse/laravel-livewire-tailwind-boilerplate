<?php

namespace App\Http\Livewire\Auth\Category;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryCreate extends Component
{
    public $parent_id, $name, $slug;

    protected function rules()
    {
        return [
            'name' => ['required', 'string', 'max:180'],
            'parent_id' => ['nullable', 'integer', 'min:1'],
            'slug' => ['nullable', 'string', function ($attribute, $value, $fail) {
                $this->slug = $value = Str::replace(' ', '-', Str::lower($value));
                if (Category::where('slug', $value)->first()) {
                    $fail('The ' . $attribute . ' has already been taken.');
                }
            }],
        ];
    }

    protected function getValidationAttributes()
    {
        return [
            'parent_id' => 'category',
        ];
    }

    public function store()
    {
        $data = $this->validate();
        !$data['parent_id'] && $data['parent_id'] = null;
        // create a new slug
        if ($data['slug']) {
            $data['slug'] = Str::replace(' ', '-', Str::lower($data['slug']));
        } else {
            $this->slug = $data['slug'] = Str::replace(' ', '-', Str::lower($data['name']));
            $slugCategory = Category::where('slug', $data['slug'])->first();
            if ($slugCategory) {
                return $this->addError('slug', 'The slug has already been taken.');
            }
        }

        Category::create($data);

        $this->reset();

        return $this->emit('statusMessage', 'Category Created');
    }

    public function render()
    {
        $wireData['topCategories'] = Category::whereNull('parent_id')->get();

        return view('livewire.auth.category.category-create', $wireData);
    }
}
