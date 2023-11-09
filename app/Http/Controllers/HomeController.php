<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function register()
    {
        return view('register');

    }
    public function doregister(Request $request)
{
    $request->validate([
        'name' => 'required',
        'mobile' => 'required',
        'email' => 'required|email',
        'gender' => 'required',
        'qualification' => 'required',
        'place' => 'required',
        'district' => 'required',
    ]);

    $qualification = implode(', ', $request->input('qualification'));
Register::create([
    'name' => $request->name,
    'mobile' => $request->mobile,
    'email' => $request->email,
    'gender' => $request->gender,
    'qualification' => $qualification,
    'place' => $request->place,
    'district' => $request->district,
]);

    return redirect()->route('register')->with('success', 'Registered Successfully');
}



    public function view()
    {
        $data = Register::all();
        return view('view',compact('data'));
    }
    public function edit($id)
    {
        $row=Register::find($id);
        return view('edit',compact('row'));
    }
    public function update(Request $request, $id)
    {
        $data = Register::find($id);
        $data->name = $request->input('name');
        $data->mobile = $request->input('mobile');
        $data->email = $request->input('email');
        $data->gender = $request->input('gender');
        $data->qualification = $request->input('qualification');
        $data->place = $request->input('place');
        $data->district = $request->input('district');
        $data->update();
        return redirect()->route('view')->with('success', 'Updated');
    }
    

    public function delete($id)
    {
        $row=Register::find($id);
        if(!$row)
        {
            return redirect()->route('view')->with('success',"Something went wrong");
        }
        $row->delete();
        return redirect()->route('view')->with('success',"Deleted");
    }
}
