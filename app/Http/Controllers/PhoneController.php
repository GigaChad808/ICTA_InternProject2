<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;

class PhoneController extends Controller
{
    public function index(){
        $phones = Phone::whereNull('deleted_at')->get(); // Explicitly excluding soft deleted records
        return view('phones.index', ['phones' => $phones]);
    }
    

    public function create(){
        return view('phones.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'model' => 'required',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',
        ]);

        $newPhone = Phone::create($data);
        
        return redirect(route('phone.index'));
    }

    public function edit(Phone $phone){
        return view('phones.edit', ['phone' => $phone]);
    }

    public function update(Phone $phone, Request $request){
        $data = $request->validate([
            'model' => 'required',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable',
        ]);

        $phone->update($data);

        return redirect(route('phone.index'))->with('success', "Phone Updated successfully!");
    }
    
    public function destroy(Phone $phone){
        $phone->delete();
        return redirect(route('phone.index'))->with('success', "Phone Deleted successfully!");

        
    }
}