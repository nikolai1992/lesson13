<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Subject;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function rating()
    {
        $subjects = Subject::all();
        return view('rating.index', compact('subjects'));
    }
    public function update_rating(Request $request)
    {
        dd($request->all());
    }
    public function index()
    {
        return view('home');
    }
}
