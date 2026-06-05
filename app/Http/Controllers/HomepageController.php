<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $currentTime = date('H:i:s');
        $hour = date('h');

        return view('homepage', compact('currentTime', 'hour'));
    }
}
