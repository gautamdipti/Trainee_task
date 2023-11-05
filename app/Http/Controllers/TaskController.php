<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Task;
use App\Models\User;
use Pagination;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::paginate(10); 
        return view('tasks.index', compact('tasks'));
    }
    
    public function create()
    {
        $users=User::OrderBy('id','DESC')->get();
        return view('task.create',compact('users'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'taskdetails' => 'required',
            'tasktype' => 'required',
            'status'=> 'required'
        ]);
    
        $task=new Task;
        $task->task_details=$request->taskdetails;
        $task->task_type=$request->tasktype;
        $task->status=$request->status;
        $task->assigned_users=$request->user;
        $task->save();
    
        return redirect('tasks')->with('msg','Task Assigned Successfully !');
    }

    public function taskList(Request $request)
    {
        $tasks=Task::join('users','users.id','=','tasks.assigned_users')
        ->select('tasks.*','users.name','users.email')
        ->paginate('2');

       
        
        return view('task.index',compact('tasks'));
    }
    
}
