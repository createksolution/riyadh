<?php

namespace App\Http\Controllers;

use App\Models\Freelancer;
use App\Models\State;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

    }

    public function contact(){
        $state = State::all();
        $freelance = Freelancer::all();
        return view('contact')->with(['states'=>$state, 'freelancer'=>$freelance]);
    }
}
