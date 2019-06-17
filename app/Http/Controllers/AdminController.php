<?php

namespace App\Http\Controllers;

use Session;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function adminLogin(Request $request, $guard = null)
    {
        $userData = Auth::user();
     
        if (Auth::guard($guard)->check() && $userData->admin == 1) {
            Session::put('Auth', $userData['email']);
            return redirect('/admin/dashboard');
        }  
        
        if ($request->isMethod('post')) {
            $data = $request->input();
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'admin' => '1', 'status' => '1'])) {
                return redirect('/admin/dashboard')->with('flash_message_success', 'Login Successfull!');
            } else {
                return redirect('/admin')->with('flash_message_error', 'Invalid Email Address or Password!');
            }
        }
        return view('admin.admin_login2');
    }
    public function dashboard(Request $request)
    {
        // $users = User::orderBy('created_at', 'desc')->get();
        // $actusers = User::where(['status' => 1])->orderBy('created_at', 'desc')->get();
        // $inactusers = User::where(['status' => 0])->orderBy('created_at', 'desc')->get();
        // $property = Property::orderBy('created_at', 'desc')->get();
        // $propertyImages = PropertyImages::get();
        // $property = json_decode(json_encode($property));
        // $propertyImages = json_decode(json_encode($propertyImages));

        // foreach ($property as $key => $val) {
        //     $service_name = Services::where(['id' => $val->service_id])->first();
        //     $property[$key]->service_name = $service_name->service_name;
        //     $propertyimage_count = PropertyImages::where(['property_id' => $val->id])->count();
        //     if($propertyimage_count > 0){
        //         $propertyimage_name = PropertyImages::where(['property_id' => $val->id])->first();
        //         $property[$key]->image_name = $propertyimage_name->image_name;
        //     }
            

        //     $country_count = DB::table('countries')->where(['id'=>$val->country])->count();
        //     if($country_count > 0){
        //         $country = DB::table('countries')->where(['id'=>$val->country])->first();
        //         $property[$key]->country_name = $country->name;
        //         $property[$key]->currency = $country->currency;
        //     }

        //     $property_count = Property::count();

        //     // Home Loan Queries
        //     $homeloan_total_count = HomeLoan::count();
        //     $homeloan_pen_count = HomeLoan::where(['resolved'=>0])->count();

        //     // Property Queries
        //     $propertyq_total_count = PropertyQuery::count();
        //     $propertyq_pen_count = PropertyQuery::where(['status'=>0])->count();

        // }
        // // echo "<pre>"; print_r($property_count); die;

        // // Count Number of Users
        // if (!empty($users)) {
        //     $contUser = count($users);
        //     // echo "<pre>"; print_r($contRow); die;
        // } else {
        //     $contUser = 0;
        // }

        // // Count Number of Active Users
        // if (!empty($actusers)) {
        //     $contActUser = count($actusers);
        //     // echo "<pre>"; print_r($contRow); die;
        // } else {
        //     $contActUser = 0;
        // }

        // // Count Number of Inactive Users
        // if (!empty($inactusers)) {
        //     $contInactUser = count($inactusers);
        //     // echo "<pre>"; print_r($contRow); die;
        // } else {
        //     $contInactUser = 0;
        // }

        return view('admin.dashboard');
        // return view('admin.dashboard', compact('property', 'property_count', 'users', 'contUser', 'contActUser', 'contInactUser', 'homeloan_total_count', 'homeloan_pen_count', 'propertyq_total_count', 'propertyq_pen_count'));
    }
    public function getOut()
    {
        Auth::logout();
        Session::forget('Auth');
        return redirect('/admin')->with('flash_message_success', 'Logged out Successfully!');
    }
    public function adminProfile()
    {
        return view('admin.admin_profile');
    }
}
