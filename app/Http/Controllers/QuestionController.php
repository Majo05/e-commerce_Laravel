<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class questionController extends Controller
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
        $questions = Question::paginate(6);
        return view('questions.home')->with('questions',$questions);
    }
}