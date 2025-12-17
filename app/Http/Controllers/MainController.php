<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request){

         return view('welcome');
    }

    public function tenantDashboard(Request $request){

         return "hello worldd";
    }

    
}
