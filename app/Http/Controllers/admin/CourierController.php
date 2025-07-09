<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Courier;
use App\Models\User;

class CourierController extends Controller
{
    public function index()
    {
       $couriers = Courier::all();

        return view('admin.pages.courier.index',compact('couriers'));
    }

    
    public function createForm()
    {
        return view('admin.pages.courier.create');
    }
    
    public function edit($id)
    {

        $couriers=Courier::find($id);
        $agents = User::where('user_type','agent')->get();

        return view('admin.pages.courier.edit',compact('couriers','agents'));
    }

    public function create(Request $request)
    {
        Courier::create([
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
            
        return redirect()->route('admin.couriers');
    }

    public function delete($id)
    {
        Courier::find($id)->delete();
        return redirect()->route('admin.couriers');

    }
    public function update(Request $request)
    {

        $update = Courier::where('id',$request->id)->first();

        $update->sender_name = $request->sender_name;
        $update->sender_email = $request->sender_email;
        $update->sender_address = $request->sender_address;
        $update->sender_phone = $request->sender_phone;
        $update->reciver_name = $request->reciver_name;
        $update->reciver_email = $request->reciver_email;
        $update->reciver_address = $request->reciver_address;
        $update->reciver_phone = $request->reciver_phone;
        $update->courier_type = $request->courier_type;
        $update->courier_weight = $request->courier_weight;
        $update->agent_id = $request->agent_id;
        $update->status = $request->status;
        $update->save();


        return redirect()->route('admin.couriers');

    }


}
