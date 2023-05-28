<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Orderdetail;
use App\Models\Customers;
use App\Models\Orders;
use App\Models\Ordercart;
use App\Models\Feedback;

class Post extends Model
{
    use HasFactory;
    /**
     * Insert cart
     */
    public static function pushCart($arr){
        Ordercart::truncate();
        $count = 0;
        foreach ($arr as $index => $amount){
            if ($amount > 0){
                $count++;
                $cart = new Ordercart;
                $cart->id = $count;
                $cart->ticket_id = $index + 1;
                $cart->quantity = (int)$amount;
                $cart->save();
            } 
        }
        return true;
        
    }
    public static function clearCart(){
        return DB::delete('DELETE FROM ordercart');
    }
    
    
    /**
     *Insert new order
     */
    public static function order($arr)
    {
        if(!Post::cusIsExist($arr[3])){
            Post::addCustomer($arr);
        } 
        $cus = Customers::where('phone', '=', $arr[3])->first();
        return Post::makeAnOrder($cus->id);
    }

    public static function addCustomer($arr){
        $cus = new Customers;
        $cus->firstname = $arr[0];
        $cus->lastname = $arr[1];
        $cus->email = $arr[2];
        $cus->phone = $arr[3];
        $cus->membership = $arr[4];
        $cus->save();
    }

    public static function makeAnOrder($cusId){
        $order = new Orders;
        $order->cus_id = $cusId;
        $order->ord_create_date = date('Y-m-d H:i:s');
        $order->ord_date_expired = date('Y-m-d H:i:s', strtotime('+30 days'));
        $order->save();
        return Post::pushOrderdetail($order->id);
    }

    public static function pushOrderdetail($ordId){
        $cart = Ordercart::all();
        foreach ($cart as $index => $item ){
            $od = new Orderdetail();
            $od->ord_id = $ordId;
            $od->ticket_id = $item->ticket_id;
            $od->quantity = $item->quantity;
            $od->save();
        }
        Ordercart::truncate();
        return true;
    }

    public static function checkValidDate($date_expired){
        if ($date_expired->isPast()){
            return false;
        }
        return true;
    }
    public static function cusIsExist($phone){
        $customer = Customers::where('phone', '=', $phone)->get();
        return !$customer->isEmpty();
    }

    public static function feedback($request){
        $fb = new Feedback;
        $fb->name = $request->name;
        $fb->phone = $request->phone;
        $fb->email = $request->email;
        $fb->opinion = $request->opinion;
        $fb->save();

        return redirect()->back()->with('success','Thank you for your feedback!');
    }
}
