<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomePageController extends Controller
{
    public function index()
    {
        $homeData = HomePage::first();
        return view('dashboard.home', compact('homeData'));
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            // HERO
            'main_hero'     => 'nullable|string|max:255',
            'p_hero'        => 'nullable|string|max:255',
            'button_name'   => 'nullable|string|max:255',
            'image_hero'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            // FEATURES
            'main_features'     => 'nullable|string|max:255',
            'p_features'        => 'nullable|string|max:255',
            'button_features'   => 'nullable|string|max:255',
            'image_features'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            // PARTNER
            'main_partner'  => 'nullable|string|max:255',
            'p_partner'     => 'nullable|string|max:255',
            'image_partner' => 'nullable|array',
            // REVIEWS
            'p_reviews'        => 'nullable|array',
            'image_reviews'    => 'nullable|array',
            'name_reviews'     => 'nullable|array',
            'job_reviews'      => 'nullable|array',
            'rating_reviews'   => 'nullable|array',
            // CONTACT
            'p_contact'      => 'nullable|string|max:255',
            'image_contact'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'instagram_link' => 'nullable|url',
            'facebook_link'  => 'nullable|url',
            'linkedin_link'  => 'nullable|url',
            'email'          => 'nullable|email|max:255',
            'phone_number'   => 'nullable|string|max:20',
            // FOOTER
            'main_footer'    => 'nullable|string|max:255',
            'p_footer'       => 'nullable|string|max:255',
            'image_footer'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'plolicy_link'   => 'nullable|url',
            'contact_link'   => 'nullable|url',
            'services_link'  => 'nullable|url',
            'about_link'     => 'nullable|url',
        ]);


        if ($validation->fails()) {
            return back()->withErrors($validation)->withInput();
        }
        $data = $validation->validated();

        if ($request->hasFile('image_hero')) {
            $imagePath = $request->file('image_hero')->store('uploads/home_us', 'public');
            $data['image_hero'] = asset('storage/' . $imagePath);
        }

        if ($request->hasFile('image_features')) {
            $imagePath = $request->file('image_features')->store('uploads/home_us', 'public');
            $data['image_features'] = asset('storage/' . $imagePath);
        }

        if ($request->hasFile('image_contact')) {
            $imagePath = $request->file('image_contact')->store('uploads/home_us', 'public');
            $data['image_contact'] = asset('storage/' . $imagePath);
        }

        if ($request->hasFile('image_footer')) {
            $imagePath = $request->file('image_footer')->store('uploads/home_us', 'public');
            $data['image_footer'] = asset('storage/' . $imagePath);
        }

        if ($request->hasFile('image_partner')) {
            foreach ($request->file('image_partner') as $key => $image) {
                $imagePath = $image->store('uploads/home_images', 'public');
                $data['image_partner'][$key] = asset('storage/' . $imagePath);
            }
        }

        if ($request->hasFile('image_reviews')) {
            foreach ($request->file('image_reviews') as $key => $image) {
                $imagePath = $image->store('uploads/home_images', 'public');
                $data['image_reviews'][$key] = asset('storage/' . $imagePath);
            }
        }

        HomePage::updateOrCreate(
            ['id' => 1],
            $data
        );
        return back()->with('success', 'Your message has been sent successfully.');
    }
}
