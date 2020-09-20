<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EquipmentBorrowApproval extends Model
{
    public $table = 'equipment_borrow_approval';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
