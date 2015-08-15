<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceTransaction extends Model
{
    protected $primaryKey = 'service_id';
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'service_transaction';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['field_id', 'user_id', 'employee_id', 'service_desc', 'user_rate', 'employer_rate'];
}
