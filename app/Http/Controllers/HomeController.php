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
use App\Skpd;

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
            $skpd = $data->skpd;
            return view('skpd.dashboard',compact('data','skpd'));
        }
        elseif(Auth::user()->hasRole('superadmin'))
        {
            $data = Auth::user();
            $skpd = count(Skpd::all());
            $user = count(User::all());
            return view('superadmin.dashboard.dashboard',compact('data','skpd','user'));
        }
        else
        {
            return view('noakses');
        }
    }
}
