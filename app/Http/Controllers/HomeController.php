<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        return view('home');
    }
      public function index1()
    {
$role=Auth::user()->role;

if($role=='buyer'){
    return view('buyer');
}if($role=='broker'){
    return view('user');
}else{
    return view('dashboard');
}






    }
}
