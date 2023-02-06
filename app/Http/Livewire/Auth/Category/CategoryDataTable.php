<?php

namespace App\Http\Livewire\Auth\Category;

use App\Models\Category;
use App\Exports\CategoriesExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;

class CategoryDataTable extends DataTableComponent
{
    protected $model = Category::class;
    public $sl = 0, $lastPageSl;

    public function bulkActions(): array
    {
        return [
            'exportExcel' => 'Export Excel',
            'exportCsv' => 'Export CSV',
        ];
    }

    public function exportExcel()
    {
        $categories = $this->getSelected();

        $this->clearSelected();

        return Excel::download(new CategoriesExport($categories), 'all-categories.xlsx', ExcelExcel::XLSX);
    }

    public function exportCsv()
    {
        $categories = $this->getSelected();

        $this->clearSelected();

        return Excel::download(new CategoriesExport($categories), 'all-categories.csv', ExcelExcel::CSV, [
            'Content-Type' => 'text/csv',
        ]);
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
            Column::make('ID', 'id')->sortable()->searchable()->deselected(),
            Column::make("Name", "name")
                ->sortable()->searchable(),
            Column::make("Slug", "slug")->sortable()->searchable(),
            Column::make('Parent', 'parent_id')
                ->format(fn ($value, $row) => $row->parent?->name ?: '...')
                ->sortable()->searchable(),
            ButtonGroupColumn::make('Actions')
                ->attributes(function ($row) {
                    return [
                        'class' => 'space-x-2',
                    ];
                })
                ->buttons([
                    LinkColumn::make('View') // make() has no effect in this case but needs to be set anyway
                        ->title(fn ($row) => 'View')
                        ->location(fn ($row) => route('auth.categories.edit', $row))
                        ->attributes(function ($row) {
                            return [
                                'class' => 'underline text-blue-500 hover:no-underline',
                            ];
                        }),
                    LinkColumn::make('Edit')
                        ->title(fn ($row) => 'Edit')
                        ->location(fn ($row) => route('auth.categories.edit', $row))
                        ->attributes(function ($row) {
                            return [
                                'target' => '_blank',
                                'class' => 'underline text-blue-500 hover:no-underline',
                            ];
                        }),
                ]),
        ];
    }

    public function render()
    {
        $this->sl = ($this->perPage * ($this->paginators['page'] - 1));

        return parent::render();
    }
}
