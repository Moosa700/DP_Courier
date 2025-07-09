<?php

namespace App\Http\Controllers\agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courier;

class CourierController extends Controller
{
    public function index($id)
    {
        $couriers = Courier::where('agent_id',$id)->get();

        return view('admin.pages.courier.index',compact('couriers'));
    }
}
