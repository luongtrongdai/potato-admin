<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Batches extends Model {
    /*protected $table = 'batches';*/

    protected $fillable =   [
                                'date_receipt'
                                , 'total_product'
                                , 'total_price'
                                , 'shipper_id'
                            ];

}