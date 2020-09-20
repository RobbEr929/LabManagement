<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EquipmentBorrow extends Model
{
    public $table = 'equipment_borrow';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
