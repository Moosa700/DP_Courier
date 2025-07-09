<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Faker\Provider\UserAgent;

class AgentController extends Controller
{
    public function index()
    {
        $agents = User::where('user_type','agent')->get();
        
        return view('admin.pages.agent.index',compact('agents'));

    }

    public function createform()
    {
        return view('admin.pages.agent.create');
    }

    public function create(Request $request)
    {
       User::create([
        'name'=> $request->name,
            'email'=> $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'password'=>$request->password,
            'user_type'=>'agent'
       ] );

       return redirect()->route('admin.agents');
    }

    public function edit($id)
    {
      $data = User::where('id',$id)->first();

      return view('admin.pages.agent.edit',compact('data'));

    }

    public function update(Request $request)
    {

        $update = User::where('id', $request->id)->first();
        $update->name = $request->name;
        $update->email = $request->email;
        $update->address = $request->address;
        $update->phone = $request->phone;
        $update->status = $request->status;
        $update->save();


        return redirect()->route('admin.agents');

    }

    public function delete($id)
    {
        user::find($id)->delete();
        return redirect()->route('admin.agents');

    }

}
