<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Util\DbUtil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\BoostPackage;
use App\Models\BoostStars;
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
    public function index(Request $request)
    {
        return view('frontend.home',[
            'packList'=>BoostPackage::select()->orderBy('created_at')->get(),
            'starList'=>BoostStars::select()->orderBy('created_at')->get()
        ]);
    }
}
