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
            'first_name' => 'required|string|max:255|regex:/^[a-zA-Z ]*$/',
            'last_name' => 'required|string|max:255|regex:/^[a-zA-Z ]*$/',
            'email' => 'required|email|max:255',
            'telegram_id' => 'required|regex:/^@[a-zA-Z0-9_]{5,32}$/',
            'description' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Consultation::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'telegram_id' => $request->telegram_id,
            'description' => $request->description
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
