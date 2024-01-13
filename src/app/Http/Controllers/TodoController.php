<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{


    protected $task;

    public function __construct()
    {
        $this->task = new Todo();
    }

    public function index(){
        return view('pages.todo.index');
    }

    public function store(Request $request){
        // dd($request);
        // $title = new Todo;
        // $title->title = $request->title;
        // $title->save();

        $this->task->create($request->all());

        // return view('pages.todo.index');
        return redirect()->back();
        // return redirect()->route('home');

    }
}
