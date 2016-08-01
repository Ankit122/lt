<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Hotel;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','CheckAdmin']);
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

    public function addHotel()
    {

        return view('add_hotel');
    }
    public function postaddHotel(Request $req)
    {   
        $name = $req->hname;
        $hotel = new Hotel;

        $hotel->name = $name;

        $hotel->save();

        return redirect()->back()->withInput()->with('message', 'Hotel is Added.' );
        
    }

    
}
