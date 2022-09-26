<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Activities extends Controller
{
    public function getAllEvents(Request $request){
        $Events = getAllEvents::orderBy('name')->get();
        return $Events;
}
