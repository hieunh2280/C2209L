<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = ['cus_id', 'id', 'ord_create_date', 'ord_date_expired', 'updated_at', 'create_at'];
}
