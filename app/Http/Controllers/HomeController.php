<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }



    public function newform()
    {
        return view('newform');
    }


    

    public function submitnewform(Request $request)
    {
        

            DB::table('testdata')->insert(
                ['name' => $request->input('name')]
            );

            return redirect()->route('home');

       
    }


}
