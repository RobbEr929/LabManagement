<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    public $table = 'equipment';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
