<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Email;
use App\Http\Requests;

class ContactController extends Controller
{
    public function index()
    {
        return view('validation');
    }
   
}
