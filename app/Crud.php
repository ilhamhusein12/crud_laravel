<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $table = "crud";

    protected $fillable = [
        'id',
        'name',
        'status'
    ];
}
