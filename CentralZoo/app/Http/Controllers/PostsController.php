<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TicketRequest;
use App\Http\Requests\CustomerInfoRequest;
use App\Http\Requests\FeedbackRequest;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    //
    public function ticket(TicketRequest $request){
        /**
         *ticket(id, descript, price, tick_type)
         *(1,'Adult',27,1),
         *(2,'Child',12,1),
         *(3,'Student',20,1),
         *(4,'Community Card',27,1),
         *(5,'Family 2a2c',66,2),
         *(6,'Family 2a1c',55,2),
         *(7,'Family 1a2c',50,2),
         *(8,'Family 2a3c',80,2);
         */
        $total = $request->adult_num + $request->student_num + $request->child_num + $request->com_card_num + $request->fam_1_num + $request->fam_2_num + $request->fam_3_num + $request->fam_4_num;
        if ($total == 0){
            return redirect()->back()->with('failed', 'You must choose at least one ticket')->withInput();
        }
        
        $cart = array($request->adult_num, $request->child_num, $request->student_num, $request->com_card_num, $request->fam_1_num, $request->fam_2_num, $request->fam_3_num, $request->fam_4_num);
        Post::clearCart();
        if (!Post::pushCart($cart)){
            return redirect()->back()->with('failed', 'Failed to add your order to your cart')->withInput();
        } 
        return redirect()->route('order')->withInput();
        
    }

    public function order(CustomerInfoRequest $request){
        if($request->membership != null){
            $member = 1;
        } else {
            $member = 0;   
        }

        if (!Post::order(array($request->firstname, $request->lastname, $request->email, $request->phone, $member))){
            return redirect()->back()->with('failed', 'Failed to commit your request')->withInput();
        }
        
        return redirect()->route('home')->with('order-success','Thanks for using our services, feel free to explore more about our Zoo!');
    }

    public function feedback(FeedbackRequest $request){
        return Post::feedback($request);
    } 

    public function contact(ContactRequest $request){
        return Post::contact($request->email);
    }
}
