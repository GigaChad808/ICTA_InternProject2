<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
// use DB;


class UserController extends Controller
{
    public function user(){
        return view('user');
    
    }
}