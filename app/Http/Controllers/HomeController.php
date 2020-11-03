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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('home');
    }

    public function vendor_requests(){
        $data = DB::table('tbl_orders')
         ->join('users', 'users.id', '=', 'tbl_orders.created_by')
        ->select('tbl_orders.*', 'users.name as name', 'users.email as email')
        ->whereNotNull('generate_order_by')
        ->get();
        return view('adminviews/vendor_orders_listings', ['data' => $data]);
        // return view('vendor_requests');
    }
}
