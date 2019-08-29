<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function view(){
        return view('faq');
    }
}
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;

class FaqController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $questions = Faq::paginate(6);
        return view('faq')->with('questions',$questions);
    }
}
