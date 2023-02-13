<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductSkuOption
 * @package App\Models
 * @property   int  $id
 * @property   int  $product_property_id  产品属性ID
 * @property   string  $product_property_name  产品属性名称
 * @property   int  $product_property_value_id  产品属性值ID
 * @property   string  $product_property_value  产品属性值

 */
class ProductSkuOption extends Model
{
    protected $table = 'product_sku_option';
    protected $fillable = ['product_property_id', 'product_property_name','product_property_value_id','product_property_value'];


}
