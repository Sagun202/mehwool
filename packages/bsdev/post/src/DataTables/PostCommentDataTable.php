<?php

namespace Bsdev\Post\DataTables;

use Bsdev\Post\Models\PostComment;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PostCommentDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('action', function (PostComment $postcomment) {
                return '<a class="" href=' . route('postcomment.edit', $postcomment->id) . '><i class="fa fa-edit"></i></a><form method="post" style="display:inline; margin-left:10px" action="' . route('postcomment.destroy', $postcomment->id) . '"><input type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token" value="' . csrf_token() . '"><a class="delete-class" data-href=' . route('postcomment.destroy', $postcomment->id) . '><i class="fa fa-trash" style="color:red;"></i></a></form>';
            })
            ->editColumn('post', function (PostComment $postcomment) {
                return $postcomment->post->title ?? '';
            })

            ->editColumn('status', function (PostComment $postcomment) {
                return $postcomment->status ? '<span style="color:white;background-color:green; padding:5px; border-radius:10px;">Published</span>' : '<span style="color:white;background-color:red; padding:5px; border-radius:10px;">Unpublished</span>';
            })
            ->escapeColumns([]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\PostComment $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(PostComment $model)
    {
        return $model->with('post')->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('postcomment-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->buttons(
                Button::make('export'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::make('email'),
            Column::make('message'),
            Column::make('post')
                ->data('post')
                ->name('post.title'),
            Column::make('status'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'PostComment_' . date('YmdHis');
    }
}
