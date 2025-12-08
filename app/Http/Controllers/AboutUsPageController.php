<?php

namespace App\Http\Controllers;

use App\Models\AboutUsPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AboutUsPageController extends Controller
{
    public function index()
    {
        $aboutUsData = AboutUsPage::first();
        return view('dashboard.aboutUs', compact('aboutUsData'));
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [

            // Hero Section
            'main_hero'    => 'nullable|string|max:255',
            'p_hero'       => 'nullable|string|max:1000',
            'button_name'  => 'nullable|string|max:255',
            'image_hero'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // Mission Section (JSON arrays)
            'main_mission'  => 'nullable|array',
            'p_mission'     => 'nullable|array',
            'image_mission' => 'nullable|array',
            // Story Section
            'main_story'     => 'nullable|array',
            'p_story'        => 'nullable|array',
            'year_story'     => 'nullable|array',
            'image_story'    => 'nullable|array',
            // Slider Section
            'main_slider'   => 'nullable|string|max:255',
            'p_slider'      => 'nullable|string|max:1000',
            // Features Section
            'main_features'     => 'nullable|array',
            'p_features'        => 'nullable|array',
            'image_features'    => 'nullable|array',
            // Members Section
            'job_member'     => 'nullable|array',
            'name_member'    => 'nullable|array',
            'image_member'   => 'nullable|array',
        ]);

        if ($validation->fails()) {
            return back()->withErrors($validation)->withInput();
        }
        $data = $validation->validated();

        if ($request->hasFile('image_hero')) {
            $imagePath = $request->file('image_hero')->store('uploads/about_us', 'public');
            $data['image_hero'] = asset('storage/' . $imagePath);
        }

        if ($request->hasFile('image_mission')) {
            foreach ($request->file('image_mission') as $key => $image) {
                $imagePath = $image->store('uploads/about_images', 'public');
                $data['image_mission'][$key] = asset('storage/' . $imagePath);
            }
        }

        if ($request->hasFile('image_story')) {
            foreach ($request->file('image_story') as $key => $image) {
                $imagePath = $image->store('uploads/about_images', 'public');
                $data['image_story'][$key] = asset('storage/' . $imagePath);
            }
        }

        if ($request->hasFile('image_features')) {
            foreach ($request->file('image_features') as $key => $image) {
                $imagePath = $image->store('uploads/about_images', 'public');
                $data['image_features'][$key] = asset('storage/' . $imagePath);
            }
        }

        if ($request->hasFile('image_member')) {
            foreach ($request->file('image_member') as $key => $image) {
                $imagePath = $image->store('uploads/about_images', 'public');
                $data['image_member'][$key] = asset('storage/' . $imagePath);
            }
        }

        AboutUsPage::updateOrCreate(
            ['id' => 1],
            $data
        );
        return back()->with('success', 'Your message has been sent successfully.');
    }
}
