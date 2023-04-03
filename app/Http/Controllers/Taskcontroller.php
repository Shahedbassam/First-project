<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Taskcontroller extends Controller
{
    public function index(){
    /*   $tasks = [ '$task_1' => 'Make your assignment',
        '$task_2' => 'Check your phone',
        '$task_3' => 'Watch a match' ]; */
        $tasks = DB::table('tasks')-> where ('name','like','Task 1%')->get();
        return view('index',compact('tasks'));
    }
    public function show($id){
        $tasks = DB::table('tasks') -> find($id);
        return view('task', compact('task'));
    }

    public function send_name(){
    $name = $_REQUEST['name'];
    return view('about', compact('name'));
}
public function show_name(){
    $name = 'shahed';
    $age = 19;
    return view('about', compact('name', 'age'));
}
}
