<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordercart extends Model
{
    use HasFactory;
    protected $fillalble = ['ticket_id', 'quantity', 'updated_at', 'create_at'];
    protected $table = 'ordercart';
}
