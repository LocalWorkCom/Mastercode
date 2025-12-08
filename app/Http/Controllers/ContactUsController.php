<?php

namespace App\Http\Controllers;

use App\Models\contactUs;
use App\Models\ContactUsPage;
use App\Models\country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    public function index()
    {
        $countries = country::all();
        $contactUsData = ContactUsPage::first();
        return view('contact-us', compact('countries', 'contactUsData'));
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'second_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_code' => 'required|string|max:10',
            'phone_number' => 'required|string|max:20',
            'message' => 'required|string',
        ]);
        if ($validation->fails()) {
            return back()->withErrors($validation)->withInput();
        }
        $data = $validation->validated();
        contactUs::create($data);
        return back()->with('success', 'Your message has been sent successfully.');
    }
}
