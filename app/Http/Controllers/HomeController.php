<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\fevorite;

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
        $fev = fevorite::select("country_name")->where('user_id', Auth::user()->id)->distinct()->get();
        return view('home')->with("fev",$fev);
    }
    public function store(Request $request)
    {
        $fev = new fevorite();
        $fev->user_id = Auth::user()->id;
        $fev->country_name = $request->name;
        $fev->save();
    }
    public function destroy(Request $request)
    {
        fevorite::where('country_name', $request->name)->delete();
    }
}
