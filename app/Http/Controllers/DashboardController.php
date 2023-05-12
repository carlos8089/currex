<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        
        $dat = [
            'name'=>'Jane Doe',
            'city'=>'Accra',
            'country' => 'Ghana',
            'max'=>'300000',
            'stars'=>'3'
        ];
        serialize($dat);
        
        //$name = 'Jane Doe'; $city = 'Accra'; $amount = '400'; $stars = '3';
        return view('dashboard', $dat);
        
    }
}
