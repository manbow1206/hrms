<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class PostController extends Controller
{
    public function index()
    {
        $posts =  Employee::orderBy('created_at','desc')->get();

        return view('posts.index', ['posts' => $posts]);
    }
}
