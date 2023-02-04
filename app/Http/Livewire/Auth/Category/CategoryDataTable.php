<?php

namespace App\Http\Livewire\Auth\Category;

use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class CategoryDataTable extends DataTableComponent
{
    protected $model = Category::class;
    public $sl = 0, $lastPageSl;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setSearchDebounce(500);
    }

    public function builder(): Builder
    {
        return Category::query();
    }

    public function columns(): array
    {
        return [
            Column::make('SL')
                ->label(fn ($row) => ++$this->sl),
            Column::make("Name", "name")
                ->sortable()->searchable(),
            Column::make("Slug", "slug")
                ->sortable()->searchable(),
            Column::make("Created Date", "created_at")
                ->sortable(),
        ];
    }

    public function render()
    {
        $this->sl = ($this->perPage * ($this->paginators['page'] - 1));

        return parent::render();
    }
}
