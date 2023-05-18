<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class order extends Model
{
    use HasFactory;
    /**
     *Insert new order
     */
    public static function insert($arr)
    {
        $sql = 'INSERT INTO orders (cus_name, cus_email, num_adult, num_senior, num_child, tic_date )
                VALUES (?, ?, ?, ?, ?, ?)';
        $inserted = DB::insert($sql, $arr);
        return $inserted;
    }
}
