<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    protected $fillabel = [
        'd_name',
        'body',
    ];

    public function employees()
    {
        return $this->belongsTo('App\Employee');
    }
}
