<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $primaryKey = 'field_id';
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'field';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['field_name', 'field_desc'];
}
