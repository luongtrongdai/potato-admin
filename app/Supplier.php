<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model {
    protected $table = 'suppliers';

    protected $fillable =   [
                                'supplier_name'
                                , 'supplier_url'
                                , 'supplier_ship_cost'
                            ];

}