<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EquipmentBorrowList extends Model
{
    public $table = 'equipment_borrow_list';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
