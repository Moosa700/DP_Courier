<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Courier;


class DashboardController extends Controller
{
    public function index()
    {
        $new_couriers_count = Courier::where('status','pending')->count();
        $all_couriers_count = Courier::count();
        $users = User::where('user_type','user')->count();
        $agents = User::where('user_type','agent')->count();
        return view('admin.pages.index',compact('new_couriers_count','all_couriers_count','users','agents'));
    }


}
