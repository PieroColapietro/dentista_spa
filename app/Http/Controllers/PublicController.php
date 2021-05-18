<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function show($id){
        $service = Service::where('id' , $id)->with('user')->get();
        return response()->json($services);
    }
}
