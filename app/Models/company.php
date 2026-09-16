<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    //


    protected $filable = ['name', 'email'];

    public function Employees()
{
    return $this->hasMany(Employee::class);
}
}

