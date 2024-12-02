<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Mail\ConfirmAppointmentMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Gate;



class AppointmentController extends Controller
{
    public function index()
    {
        return view('front.appointments.index');
    }
    public function create(User $user)
    {
       /* if($user->role == "patient" || $user->role == "admin")
        {
          abort(403);
        }*/
          Gate::authorize('make-appointment');
        $user->load('major');
        return view('front.appointments.add', compact('user'));
    }
    public function store(Request $request,User $user)
    {
      $request->validate(
        ["name"=>["required","string","min:3","max:50"],
        "email"=>['required',"email"],
        "phone"=>["required","numeric"]
      ]);
      $appointment = new Appointment();
      $appointment->name = $request->name;
      $appointment->email = $request->email;
      $appointment->phone = $request->phone;
      $appointment->appointment_date =now();
      $appointment->patient_id = auth()->user()->id;
      $appointment->doctor_id = $user->id;
      $appointment->save();
      Mail::to(auth()->user()->email)->send(new ConfirmAppointmentMail($appointment));
      return redirect()->back()->with('success','Your appointment has been saved successfully');
    }
}
