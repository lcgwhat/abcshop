## 安装
composer install 

## laravel
数据库迁移

laravel-admin 文档: https://www.laravel-admin.org/docs/zh/1.x/model-grid


多规格sku
https://blog.csdn.net/haibo1101/article/details/115397089

## 产品sku多属性设计
产品拥有 销售属性，
多个销售属性组合成一个sku.

属性表

property
{
    id: "自增id"
    sku_id: "sku_id"
    name: "属性名称",
    // sku_id + name 唯一
}

// sku 和 销售属性是一对多,关系、
```
product_sale_property
{
    id: '..' ,
    'product_id':'产品id'
    property_name: 销售属性名称',
    values: [{
        'value': "16G"
    }，
    {
        'value': "32G"
    }]
}
```


// 具体一个sku销售属性对应的值，是一对多关系
```
product_sale_property_value
{
    'id': product_sku_property,
    'product_property_id': ..,
    "product_property_name": "冗余一个销售属性名称“,
    'value': "销售属性值"
}
```
// 多个销售属性合成一个sku
```
product_sku
{
    product_id: 
    stock:
    price:
    options: [{
      'skuId': ''，
     'product_property_id': 1,
     "product_property_name": "内存大小“,
      product_property_value_id: 1
     'product_property_value': "16G"
    }，
    {
          'skuId': ''，
         'product_property_id': 2,
         "product_property_name": "频率“,
          product_property_value_id: 2
         'product_property_value': "1600M"
        }，
    ]
}
```
// sku 一对多个选项，选项
```
product_property_sku_option
{
     sku_id:'112'
    'product_property_id': ..,
    "product_property_name": "销售属性名称“,
     product_property_value_id: 
    'product_property_value': "销售属性值"
}
```

## 支付金额超过 xx 送服务
规则
- 支出金额超过 50W<= 金额  <=100W 送 虚拟物品：优惠卷
- 支付金额超过 100W< 金额 <= 200W 送 实物：
- 支付金额超过  200W < 金额 送

或者
10点支付：送：优惠卷
12点支付：送：。。
15点支付
20点支付

或者
整点支付前二十人

特征
- 根据`订单`， `订单的金额`
- 赠送规则
    - 现在根据支付金额
    - 以后整点支付，有礼品
- 奖品
    - 实物奖品
    - 虚拟奖品
    
规则明细和奖品绑定了
