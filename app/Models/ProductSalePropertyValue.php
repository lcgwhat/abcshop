<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductSalePropertyValue
 * @package App\Models
 * @property   int  $id
 * @property   int  $product_property_id  产品属性
 * @property   string  $product_property_name  产品属性名称
 * @property   string  $value  产品属性值

 */
class ProductSalePropertyValue extends Model
{
    protected $table = 'product_sale_property_value';
}
