<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    public function contactUsForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|max:255',
            'email_id' => 'required|email|max:255',
            'phone_number' => 'required|numeric|digits:10',
            'special_requirement' => 'required|string',
            'signup_newsletter' => 'accepted',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        ContactUs::create([
            'full_name' => $request->full_name,
            'email_id' => $request->email_id,
            'phone_number' => $request->phone_number,
            'preferred_contact_method' => $request->app_name,
            'budget' => $request->Budget,
            'time_frame' => $request->time_frame,
            'special_requirement' => $request->special_requirement,
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
