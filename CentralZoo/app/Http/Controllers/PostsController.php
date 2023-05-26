<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    //
    public function ticket(){
        $post = DB::table('ticket')->get();
        return view('test', compact('post'));
    }
}
