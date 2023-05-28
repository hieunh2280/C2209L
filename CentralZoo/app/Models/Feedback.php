<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone', 'email', 'opinion', 'updated_at', 'create_at'];
    protected $table = 'feedback';
}
