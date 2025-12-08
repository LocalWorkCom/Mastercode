<?php

namespace App\Http\Controllers;

use App\Models\PolicyPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PolicyPageController extends Controller
{
    public function index()
    {
        $policyData = PolicyPage::first();
        return $policyData;
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'p_hero'            => 'nullable|string|max:255',
            'title_content'     => 'nullable|string|max:255',
            'sub_title_content'         => 'nullable|string|max:5000',
            'image_content'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'text'              => 'nullable|array',
            'text.*'            => 'string',
        ]);
        if ($validation->fails()) {
            return back()->withErrors($validation)->withInput();
        }
        $data = $validation->validated();
        if ($request->hasFile('image_content')) {
            $imagePath = $request->file('image_content')->store('uploads/policy_images', 'public');
            $data['image_content'] = $imagePath;
        }
        PolicyPage::updateOrCreate(
            ['id' => 1],
            $data
        );
        return back()->with('success', 'Your message has been sent successfully.');
    }
}
