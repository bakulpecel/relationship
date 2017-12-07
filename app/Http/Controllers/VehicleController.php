<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function register()
    {
        Auth::user()->roles()->sync(Role::ADMIN)
    }
}
