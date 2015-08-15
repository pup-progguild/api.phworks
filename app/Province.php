<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $primaryKey = 'provcode';
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'provinces';
}
