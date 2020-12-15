<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Investigation;

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
        $Investigations = Investigation::where('user_id',auth()->user()->id)
          ->orderBy('created_at','desc')
          ->paginate(10);

          $Companies = Investigation::where('user_id',auth()->user()->id)
            ->orderBy('created_at','desc')
            ->paginate(10)
            ->unique('company_id');

       return view('home', ['investigations' => $Investigations,'companies' => $Companies]);
    }
}
