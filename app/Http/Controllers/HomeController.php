<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        return view('frontend.home',[
            //'packList'=>BoostPackage::select()->orderBy('created_at')->get(),
        ]);
    }
    public function listing(Request $request)
    {
        return view('frontend.listing',[
            //'packList'=>BoostPackage::select()->orderBy('created_at')->get(),
        ]);
    }
    public function ads(Request $request)
    {
        return view('frontend.ads',[
            //'packList'=>BoostPackage::select()->orderBy('created_at')->get(),
        ]);
    }
}
