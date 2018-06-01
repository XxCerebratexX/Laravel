<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoryModel extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['name',
        'description'];
}
