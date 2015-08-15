<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $primaryKey = 'regcpde';
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'regions';
}
