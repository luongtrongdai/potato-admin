<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model {
    protected $table = 'permissions';

    protected $fillable =   [
                                'group_id'
                                , 'detail'
                                , 'change_log'
                            ];

}