<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
    }
    public function profile($id)
    {
        $user = User::with(['numbers'])->find($id);
        if(auth::id()==$id)
        return view('profile')->with('user', $user);
        else
            return '404 not found';
    }
}

