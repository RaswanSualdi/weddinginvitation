<?php

namespace App\Http\Controllers;

use App\Models\greenNatural;
use App\Models\blueOcean;

use Illuminate\Http\Request;

class sendInviController extends Controller
{
    //

    public function index($slug){
        $sendInvi = greenNatural::where('slug', $slug)->first();
        if (!$sendInvi) {
            $sendInvi = blueOcean::where('slug', $slug)->first();
        }
        return view('sendInvitation', compact('sendInvi'));
    }
}
