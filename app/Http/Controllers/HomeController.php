<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use Auth;
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
        $user_id = Auth::id();
        $customer_data = Customer::where('status', '1')->where('user_id', $user_id)->get();
        return view('home', compact('customer_data'));

    }

    

    public function adminHome()
    {
        $auditors_count = User::where('is_admin', '!=', 0)
                ->count();
        $customers_count = Customer::where('status', '!=', 0)
                ->count();
        return view('adminHome', compact('auditors_count', 'customers_count'));
    }

    public function manageAuditorsByAdmin()
    {
        $auditors_info = User::where('is_admin', '<>', '1')
                ->orderBy('created_at', 'desc')
                ->get();
        return view('manageAuditorsByAdmin', compact('auditors_info'));
    }


    public function manageCustomersByAdmin()
    {
        $customers_info = Customer::where('status', '<>', '0')
                ->orderBy('created_at', 'desc')
                ->get();
        return view('manageCustomerByAdmin', compact('customers_info'));
    }
}