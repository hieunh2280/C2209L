<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidationRequest;
use Illuminate\Http\Request;
use App\Models\order;

class OrderController extends Controller
{
    /**
     * Show the form for creating a new order
     */
    public function create()
    {
        return view('quan.order');
    }
    /**
     * Store a newly created order in storage.
     */
    public function store(ValidationRequest $request)
    {
        // Check if select at least one ticket
        $total = $request->adult_num + $request->senior_num + $request->child_num;
        if ($total == 0) 
        {
            return redirect()
            ->back()
            ->with('failed','Please select at least one ticket')
            ->withInput();
        }
        $new_order = [
            $request->name,
            $request->email,
            $request->adult_num,
            $request->senior_num,
            $request->child_num,
            $request->date,
        ];
        if(order::insert($new_order))
        {
            return redirect()
            ->back()
            ->with('success','Ticket booked successfully!');
        }
    }
}
