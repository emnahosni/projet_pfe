<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicule;
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
        $vehicules = Vehicule::all();
        //return $vehicules;
        return view('home',compact('vehicules'));
    }
}
