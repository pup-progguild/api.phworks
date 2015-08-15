<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $primaryKey = 'bookmark_id';
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bookmark';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'employee_id'];

}
