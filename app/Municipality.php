<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $primaryKey = 'citycode';
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'municipality';
}
