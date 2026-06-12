<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{

     public function state(State $state)
    {
        $tenant = app('tenant');
        return view('dashboard.user.state');
    }

    public function lgas(State $state)
    {
        return response()->json(
            $state->lgas()->select('id', 'name')->get()
        );
    }
}
