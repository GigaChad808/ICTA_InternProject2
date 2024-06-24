<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
// use DB;

class PhoneControllerAdmin extends Controller
{
    


public function index_admin(){

    $phones= Phone::all();
    return view('phones_admin.index',['phones'=>$phones]);

}

// public function user(){
//     return view('user');

// }

public function create_admin(){

    return view('phones_admin.create');
}

public function store_admin(Request $request ){
    $data = $request->validate([
        'model' => 'required',
        'price' => 'required|numeric',
        'description'=>'required|'

    ]);
    
    $newPhone = Phone::create($data);

    return redirect()->route('admin');

}

public function edit_admin(Phone $phone){

return view('phones_admin.edit',['phone'=>$phone]);

}


public function update_admin(Phone $phone, Request $request){
    $data = $request->validate([
        'model' => 'required',
        'price' => 'required|numeric',
        'description' => 'nullable',
    ]);

    $phone->update($data);

    return redirect(route('admin'))->with('success', 'Phone Updated Succesffully');

}

public function destroy_admin(Phone $phone){
    // return $nn = DB::table('users')->get();
    $phone->delete();
    return redirect(route('admin'))->with('success', 'Phone deleted Succesffully');
}


}