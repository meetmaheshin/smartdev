<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;
use Illuminate\Support\Facades\Validator;

class ConsultationController extends Controller
{
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'description' => 'required|string',
            'confirmCheck' => 'accepted'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Consultation::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'description' => $request->description
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
