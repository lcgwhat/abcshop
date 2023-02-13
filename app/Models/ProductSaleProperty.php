<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductSaleProperty
 * @package App\Models
 * @property   int  $id
 * @property   int  $product_id
 * @property   string  $property_name  产品销售属性名称
 * @property   \Carbon\Carbon  $created_at
 * @property   \Carbon\Carbon  $updated_at

 */
class ProductSaleProperty extends Model
{
    protected $table = 'product_sale_property';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
