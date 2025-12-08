<?php

namespace App\Http\Controllers;

use App\Models\bookSession;
use App\Models\BookSessionPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookSessionPageController extends Controller
{
    public function index()
    {
        $bookSessionData = BookSessionPage::first();
        return view('support-form', compact('countries', 'bookSessionData'));
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'p_hero'        => 'nullable|string|max:255',
            'title_content' => 'nullable|string|max:255',
            'first_name'    => 'nullable|string|max:255',
            'second_name'   => 'nullable|string|max:255',
            'email'         => 'nullable|email|max:255',
            'phone_code'    => 'nullable|string|max:10',
            'phone_number'  => 'nullable|string|max:20',
            'company_name'  => 'nullable|string|max:255',
            'inquiry_type'  => 'nullable|string|max:255',
            'button_name'   => 'nullable|string|max:255',
        ]);
        if ($validation->fails()) {
            return back()->withErrors($validation)->withInput();
        }
        $data = $validation->validated();
        bookSession::updateOrCreate(
            ['id' => 1],
            $data
        );
        return back()->with('success', 'Your message has been sent successfully.');
    }
}
