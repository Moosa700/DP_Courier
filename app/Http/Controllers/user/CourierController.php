<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courier;

class CourierController extends Controller
{

    public function index($user_id)
    {
        $couriers = Courier::where('user_id',$user_id)->get();

        return view('my_couriers',compact('couriers'));

    }


    public function createForm()
    {
        return view('create_courier');
    }

    public function delete($id)
    {
        Courier::find($id)->delete();
        return redirect()->back();

    }

    public function create(Request $request)
    {
        
        Courier::create([
            'user_id'=>$request->user_id,
            'sender_name' => $request->sender_name,
            'sender_email' => $request->sender_email,
            'sender_address' => $request->sender_address,
            'sender_phone' => $request->sender_phone,
            'reciver_name' => $request->reciver_name,
            'reciver_email' => $request->reciver_email,
            'reciver_address' => $request->reciver_address,
            'reciver_phone' => $request->reciver_phone,
            'courier_type' => $request->courier_type,
            'courier_weight' => $request->courier_weight,
        ]);
            
        return redirect()->back();
    }
}
