<?php

namespace App\Http\Controllers;

use App\Models\ContactUsPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactUsPageController extends Controller
{
    public function index()
    {
        $contactUsData = ContactUsPage::first();
        return view('dashboard.contact-us', compact('contactUsData'));
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'p_hero'            => 'nullable|string|max:255',
            'title_content'     => 'nullable|string|max:255',
            'p_content'         => 'nullable|string|max:5000',
            'image_content'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'form_title_content' => 'nullable|string|max:255',
            'facebook_link'     => 'nullable|url|max:255',
            'instagram_link'    => 'nullable|url|max:255',
            'linkedin_link'     => 'nullable|url|max:255',
            'first_name'        => 'nullable|string|max:255',
            'second_name'       => 'nullable|string|max:255',
            'phone_code'        => 'nullable|string|max:10',
            'phone_number'      => 'nullable|string|max:20',
            'email'             => 'nullable|email|max:255',
        ]);
        if ($validation->fails()) {
            return back()->withErrors($validation)->withInput();
        }
        $data = $validation->validated();
        if ($request->hasFile('image_content')) {
            $imagePath = $request->file('image_content')->store('uploads/contact_us', 'public');
            $data['image_content'] = asset('storage/' . $imagePath);
        }
        ContactUsPage::updateOrCreate(
            ['id' => 1],
            $data
        );
        return back()->with('success', 'Your message has been sent successfully.');
    }
}
