<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileModel extends Model
{
    protected $fillable = [
        'userId', 'name', 'did','dname','iname','ses','phone','photo',
    ];
}
