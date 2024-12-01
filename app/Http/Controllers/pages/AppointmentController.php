<?php

namespace App\Http\Controllers\pages;

use App\Models\Appointment;
use App\Models\Topic;
use App\Models\Consultant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\AppointmentRequest;

class AppointmentController extends Controller
{

    public function index()
    {
        $consultant = Consultant::all();
        $topic = Topic::all();
        return view('pages.appointment' , compact('consultant', 'topic'));
    }


    public function store(AppointmentRequest $request)
    {
        Appointment::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' =>$request->phone,
            'date' =>$request->date,
            'time' =>$request->time,
            'consultant_id' =>$request->consultant,
            'topic_id'=>$request->topic,
        ]);

        return redirect()->route('checkout');


    }


    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
