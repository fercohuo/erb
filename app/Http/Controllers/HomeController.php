<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

  


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     * 
     * 
     */


    public function show()
    {
        return view('home');

    }

    public function store(Request $request)
    {
        //return $request->all();
      return  $request->only(['numero','fecha']);

    }


    public function create()
    {
        //
        return view('reservas.create');
    }

  

    public function quienessomos(){
        return view ('qsomos');
    }
    public function welcome(){
        return view ('welcome');
    }
}
