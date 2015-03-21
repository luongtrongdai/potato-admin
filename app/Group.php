<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {
    protected $table = 'groups';

    protected $fillable =   [
                                'group_name'
                                , 'group_description'
                                , 'del_flg'
                            ];

}