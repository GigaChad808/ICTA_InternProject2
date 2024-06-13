<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;

class PhoneControllerAdmin extends Controller
{
    public function indexAdmin(){
        $phones = Phone::whereNull('deleted_at')->get(); // Explicitly excluding soft deleted records
        return view('phones.indexAdmin', ['phones' => $phones]);
    }
    

    public function createAdmin(){
        return view('phones.createAdmin');
    }

    public function storeAdmin(Request $request){
        $data = $request->validate([
            'model' => 'required',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',
        ]);

        $newPhone = Phone::create($data);
        
        return redirect(route('phone.indexAdmin'));
    }

    public function editAdmin(Phone $phone){
        return view('phones.edit', ['phone' => $phone]);
    }

    public function updateAdmin(Phone $phone, Request $request){
        $data = $request->validate([
            'model' => 'required',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',
        ]);

        $phone->update($data);

        return redirect(route('phone.indexAdmin'))->with('success', "Phone Updated successfully!");
    }

    public function destroyAdmin(Phone $phone){
        $phone->delete();
        return redirect(route('phone.indexAdmin'))->with('success', "Phone Deleted successfully!");

        
    }
}