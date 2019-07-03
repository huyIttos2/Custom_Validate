<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('list');
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){

        $validatedData = $request->validate([
            'number' => 'required|numeric',
        ]);
        echo "Xac thuc thanh cong";
        return redirect()->route('index');
    }
}
