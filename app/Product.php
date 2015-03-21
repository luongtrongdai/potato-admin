<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    protected $table = 'products';

    protected $fillable =   [
                                'product_name'
                                , 'category_id'
                                , 'supplier_id'
                                , 'product_cost'
                                , 'product_price'
                                , 'del_flg'
                                , 'product_description'
                            ];

}