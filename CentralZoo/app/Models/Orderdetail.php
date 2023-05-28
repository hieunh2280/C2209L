<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    use HasFactory;
    protected $fillalble = ['ord_id', 'ticket_id', 'quantity', 'updated_at', 'create_at'];
    protected $table = 'orderdetail';
}
