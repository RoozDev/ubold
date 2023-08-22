<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UboldController extends Controller
{
    //
    public function AdminDashboard(){
        return view('admin.dashboard');
    }
}
