<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    protected $fillable = ['id', 'name', 'email', 'department', 'year', 'Q1', 'Q2'];
}
