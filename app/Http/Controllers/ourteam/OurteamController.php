<?php

namespace App\Http\Controllers\ourteam;

use App\Models\Ourteam;
use App\Models\Consultant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OurteamController extends Controller
{

    public function index()
    {
        $ourteam = Ourteam::all();
        return view('ourteam.ourteam' , compact('ourteam'));
    }


    public function show($slug)
    {
        $ourteam = Ourteam::query()->where('name' , str_replace('_' , ' ' , $slug))->firstOrFail();
        return view('ourteam.ourteam_single' , compact('ourteam'));
    }
}
