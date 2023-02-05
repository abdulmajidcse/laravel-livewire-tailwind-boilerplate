<?php

namespace App\Http\Livewire\Auth\Category;

use App\Exports\CategoriesExport;
use App\Models\Category;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;

class CategoryDataTable extends DataTableComponent
{
    protected $model = Category::class;
    public $sl = 0, $lastPageSl;

    public function bulkActions(): array
    {
        return [
            'export' => 'Export',
        ];
    }

    public function export()
    {
        $categories = $this->getSelected();

        $this->clearSelected();

        return Excel::download(new CategoriesExport($categories), 'all-categories.xlsx');
    }

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
            Column::make('ID', 'id')->sortable()->searchable(),
            Column::make("Name", "name")
                ->sortable()->searchable(),
            Column::make("Slug", "slug")->sortable()->searchable(),
            Column::make('Parent', 'parent_id')
                ->format(fn ($value, $row) => $row->parent?->name ?: '...')
                ->sortable()->searchable(),
            Column::make("Created Date", "created_at")
                ->sortable()->searchable(),
        ];
    }

    public function render()
    {
        $this->sl = ($this->perPage * ($this->paginators['page'] - 1));

        return parent::render();
    }
}
