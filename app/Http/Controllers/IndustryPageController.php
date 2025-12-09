<?php

namespace App\Http\Controllers;

use App\Models\industryPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IndustryPageController extends Controller
{
    public function index()
    {
        $industryData = industryPage::first();
        return view('dashboard.industries', compact('industryData'));
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'p_hero'          => 'nullable|string|max:255',
            'p_content'       => 'nullable|string|max:255',
            'title_content'   => 'nullable|string|max:255',
            'image_content'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'button_content'  => 'nullable|string|max:255',
            'main_industries' => 'nullable|array',
            'p_industries'    => 'nullable|array',
            'image_industries' => 'nullable|array',
        ]);
        if ($validation->fails()) {
            return back()->withErrors($validation)->withInput();
        }
        $data = $validation->validated();
        if ($request->hasFile('image_content')) {
            $imagePath = $request->file('image_content')->store('uploads/industries', 'public');
            $data['image_content'] = asset('storage/' . $imagePath);
        }
        if ($request->hasFile('image_industries')) {
            foreach ($request->file('image_industries') as $key => $image) {
                $imagePath = $image->store('uploads/industries', 'public');
                $data['image_industries'][$key] = asset('storage/' . $imagePath);
            }
        }
        industryPage::updateOrCreate(
            ['id' => 1],
            $data
        );
        return back()->with('success', 'Your message has been sent successfully.');
    }
}
