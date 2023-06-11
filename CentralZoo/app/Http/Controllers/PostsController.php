<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TicketRequest;
use App\Http\Requests\CustomerInfoRequest;
use App\Http\Requests\FeedbackRequest;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    //Ticket controller
    public function ticket(TicketRequest $request)
    {
        //Check if at least one ticket selected
        $total = $request->adult_num + $request->student_num + $request->child_num + $request->com_card_num + $request->fam_1_num + $request->fam_2_num + $request->fam_3_num + $request->fam_4_num;
        if ($total == 0)
        {
            return redirect()->back()->with('failed', 'Please choose at least one ticket')->withInput();
        }
        //Add to cart
        $cart = array($request->adult_num, $request->child_num, $request->student_num, $request->com_card_num, $request->fam_1_num, $request->fam_2_num, $request->fam_3_num, $request->fam_4_num);
        Post::clearCart();
        if (!Post::pushCart($cart))
        {
            session()->flash('failed', 'Failed to add your order to your cart');
            return redirect()->back()->withInput();
        } 
        session()->flash('success', 'pass');
        return redirect()->route('order');     
    }
    //Customer infomation controller
    public function order(CustomerInfoRequest $request)
    {
        if($request->membership != null)
        {
            $member = 1;
        } else {
            $member = 0;   
        }
        if (!Post::order(array($request->firstname, $request->lastname, $request->email, $request->phone, $member)))
        {
            session()->flash('sucess', 'pass');
            session()->flash('failed', 'Failed to commit your request');
            
            return redirect()->back()->withInput();
        }
        session()->flash('order-success','Thanks for using our services, feel free to explore more about our Zoo!');
        return redirect()->route('home');
    }
    //Feedback controller
    public function feedback(FeedbackRequest $request)
    {
        return Post::feedback($request);
    } 
    //Contact controller
    public function contact(ContactRequest $request)
    {
        return Post::contact($request->email);
    }
}
