<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $primaryKey = 'employee_id';
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'employee';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['field_id', 'name', 'username', 'email', 'password', 'contact', 'citycode', 'provcode', 'carerr_summary', 'rating'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
}
