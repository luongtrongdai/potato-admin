<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipper extends Model {
    protected $table = 'shippers';

    protected $fillable =   [
                                'name'
                                , 'phone'
                                , 'email'
                                , 'address'
                                , 'url'
                                , 'template'
                            ];

}