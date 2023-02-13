<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductSkuOption extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_sku_option', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('sku_id')->comment('sku_id');
            $table->bigInteger('product_property_id')->comment('产品属性ID');
            $table->string('product_property_name', 32)->comment('产品属性名称');
            $table->bigInteger('product_property_value_id')->comment('产品属性值ID');
            $table->string('product_property_value',32)->comment('产品属性值');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_sku_option');
    }
}
