<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class PostController extends Controller
{
    public function index()
    {
        $posts =  Employee::orderBy('created_at', 'desc')->get();
        // $d_name = Employee::find(1)->departments;
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // $params = $request->validate([
        //     'title' => 'required|max:50',
        //     'body' => 'required|max:2000',
        // ]);

        $e_number = $request->e_number;
        $name = $request->name;
        $department = $request->department;
        $gender = $request->gender;

        Employee::create([
            "e_number" => $e_number,
            "name" => $name,
            "department_id" => $department,
            "gender" => $gender,
        ]);

        return redirect()->route('top');
    }
}
