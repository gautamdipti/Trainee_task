<?php
namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;
use Pagination;

class UserController extends Controller
{
   
    public function index()
    {
        $shows = User::paginate('2'); 
        
        return view('users.users', compact('shows'));
    }
    
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'mobile' => 'required',
        ]);

        User::create($request->all());

    //     return back()->with('msg','User Created Successfully');

    //    return redirect('user-list', compact('shows'));
    
    return redirect('user-list')->with('msg','User Created Successfully!');

        
    }

}
