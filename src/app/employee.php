<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $fillable = [
        'e_number',
        'name',
        'department_id',
        'gender',
    ];

    public function departments()
    {
        return $this->hasMany('App\Department');
    }
}
