<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductSalePropertyValue extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_sale_property_value', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('product_property_id')->comment('产品属性');
            $table->string('product_property_name')->comment('产品属性名称')->nullable();
            $table->string('value',32)->comment('产品属性值')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('product_sale_property_value');
    }
}
