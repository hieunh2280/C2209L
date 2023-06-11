<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function events()
    {
        return view('events');
    }

    public function feedback()
    {
        return view('feedback');
    }

    public function support()
    {
        return view('support');
    }

    public function animals()
    {
        return view('animals');
    }

    public function ticket()
    {
        return view('ticket');
    }

    public function order()
    {
        if(session('success'))
        {
            return view('order');    
        }
        session()->flash('failed', 'Please choose your ticket first');
        return redirect()->back();
    }

    public function visit()
    {
        return view('visit');
    } 
}
