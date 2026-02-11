<?php

namespace App\Http\Controllers;

use App\Models\ServicesPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServicesPageController extends Controller
{
    public function index()
    {
        $servicesData = ServicesPage::first();
        return view('dashboard.services', compact('servicesData'));
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'p_hero'            => 'nullable|string|max:255',
            'main_hero'     => 'nullable|string|max:255',
            'p_content'         => 'nullable|array',
            'image_content'     => 'nullable|array',
        ]);
        if ($validation->fails()) {
            return back()->withErrors($validation)->withInput();
        }
        $data = $validation->validated();
        $existingImages = ServicesPage::find(1)->image_content ?? [];

        if ($request->hasFile('image_content')) {
            foreach ($request->file('image_content') as $key => $image) {
                $imagePath = $image->store('uploads/policy_images', 'public');
                $data['image_content'][$key] = asset('storage/' . $imagePath);
            }
        }

        $data['image_content'] = array_replace($existingImages, $data['image_content'] ?? []);

        ServicesPage::updateOrCreate(
            ['id' => 1],
            $data
        );
        return back()->with('success', 'Your message has been sent successfully.');
    }
}
