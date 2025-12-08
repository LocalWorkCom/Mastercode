<?php

namespace App\Http\Controllers;

use App\Models\bookSession;
use App\Models\BookSessionPage;
use App\Models\country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookSessionController extends Controller
{
    public function index()
    {
        $countries = country::all();
        $bookSessionData = BookSessionPage::first();
        return view('support-form', compact('countries', 'bookSessionData'));
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'second_name' => 'required|string|max:255',
            'phone_code' => 'required|string|max:10',
            'phone_number' => 'required|string|max:20',
            'company_name' => 'required|string',
            'inquiry_type' => 'required|string',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
        if ($validation->fails()) {
            return back()->withErrors($validation)->withInput();
        }
        $data = $validation->validated();
        bookSession::create($data);
        return back()->with('success', 'Your message has been sent successfully.');
    }
}
