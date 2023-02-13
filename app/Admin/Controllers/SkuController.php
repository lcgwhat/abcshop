<?php

namespace App\Admin\Controllers;

use App\Models\ProductSku;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class SkuController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ProductSku';

    public function index(Content $content)
    {
        return $content->header('sku列表')
            ->body($this->grid());
    }

    public function edit($id, Content $content)
    {
        return $content
            ->title($this->title())
            ->description($this->description['edit'] ?? trans('admin.edit'))
            ->body($this->form()->edit($id));
    }
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProductSku());

        $grid->column('id', __('Id'));
        $grid->column('product', __('产品'))->display(function ($product){
            return $product['title'];
        });
        $grid->column('title', __('Title'));
        $grid->column('description', __('Description'));
        $grid->column('price', __('Price'));
        $grid->column('stock', __('Stock'));
        $grid->column('options', __('sku规格'))->display(function ($options){
            if (count($options) > 0){
                $strOption = '';
                foreach ($options as $option) {
                    $strOption .= "<p>{$option['product_property_name']}:{$option['product_property_value']}</p>";
                }
                return $strOption;
            }
            return '';
        });

        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(ProductSku::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('price', __('Price'));
        $show->field('stock', __('Stock'));
        $show->field('product_id', __('Product id'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProductSku());

        $form->text('title', __('Title'));
        $form->text('description', __('Description'));
        $form->decimal('price', __('Price'));
        $form->number('stock', __('Stock'));
        $form->number('product_id', __('Product id'));

        return $form;
    }
}
