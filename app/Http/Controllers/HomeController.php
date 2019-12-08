<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Feed;
use Auth;
use App\DataCount;
use App\DataMaster;
use App\Semester;
use App\Setting;
use App\User;

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
    public function index()
    {
        if(Auth::user()->hasRole('skpd'))
        {
            $data = Auth::user();
            return view('skpd.dashboard',compact('data'));
        }
        elseif(Auth::user()->hasRole('superadmin'))
        {
            $data = Auth::user();
            return view('superadmin.dashboard.dashboard',compact('data'));
        }
        else
        {
            return view('noakses');
        }
    }
}
