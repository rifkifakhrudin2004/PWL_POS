<?php

namespace App\DataTables;

use App\Models\BarangModel;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class BarangDataTable extends DataTable
{
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($row) {
                return '<a href="/PWL_POS/public/barang/edit/' . $row->barang_id . '"class="btn btn-primary ">Edit</a>
                        <a href="/PWL_POS/public/barang/delete/' . $row->barang_id . '"class="btn btn-primary ">Delete</a>';
            })
            ->setRowId('id');
    }

    public function query(BarangModel $model): QueryBuilder
    {
        return $model->newQuery();
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('barang-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    public function getColumns(): array
    {
        return [
            Column::make('barang_id'),
            Column::make('kategori_id'),
            Column::make('barang_kode'),
            Column::make('barang_nama'),
            Column::make('harga_beli'),
            Column::make('harga_jual'),
            Column::make('created_at'),
            Column::make('updated_at'),
            Column::make('image'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(150)
                ->addClass('text-center')
        ];
    }

    protected function filename(): string
    {
        return 'Barang_' . date('YmdHis');
    }
}
