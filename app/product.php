<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['name',
        'description',
        'price'];

}
