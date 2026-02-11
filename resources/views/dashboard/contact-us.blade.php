@extends('layouts.appdash')

@section('title', 'Contact Us')

@section('content')

<div class="section-header">
    <h3>Contact us Page - Sections</h3>
    <span>2 sections configured</span>
    {{-- <button class="btn">+ Add new</button> --}}
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<form action="{{ route('update-contact-us') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- SECTION 1 -->
    <div class="section-box">
        <div class="section-title">
            <strong>Hero Section Content</strong>
            <span class="tag">Section 1</span>
            <div class="edit">✎</div>
        </div>

        <label>paragraph</label>
        <textarea rows="4" name="p_hero">{{ old('p_hero', $contactUsData->p_hero ?? '') }}</textarea>
        @error('p_hero')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- SECTION 2 -->
    <div class="section-box">
        <div class="section-title">
            <strong>Contact Content</strong>
            <span class="tag">Section 2</span>
            <div class="edit">✎</div>
        </div>

        <div class="grid-2">

            <div>
                <label>Main Title</label>
                <input type="text" name="title_content" value="{{ old('title_content', $contactUsData->title_content ?? '') }}">
                @error('title_content')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label>paragraph</label>
                <textarea rows="4" name="p_content">{{ old('p_content', $contactUsData->p_content ?? '') }}</textarea>
                @error('p_content')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>

        <div class="grid-2">
            <div>
                <label>image</label>
                <div class="upload-box" onclick="document.getElementById('uploadImage').click()">
                    <input type="file" id="uploadImage" accept="image/*" style="display:none" onchange="showFileName(event)" name="image_content">
                    <span id="uploadText">
                        @if(isset($contactUsData->image_content))
                        {{ basename($contactUsData->image_content) }}
                        @else
                        Drop files here or click to upload
                        @endif
                    </span>
                    <span id="fileName" style="display:none; font-weight:600; margin-top:10px; color:#333;"></span>
                </div>
                @error('image_content')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label>Form Title</label>
                <input type="text" name="form_title_content" value="{{ old('form_title_content', $contactUsData->form_title_content ?? '') }}">
                @error('form_title_content')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="grid-2">
            <div>
                <label>Social media links</label>
                <input type="text" placeholder="instagram" name="instagram_link" value="{{ old('instagram_link', $contactUsData->instagram_link ?? '') }}">
                <input type="text" placeholder="facebook" name="facebook_link" value="{{ old('facebook_link', $contactUsData->facebook_link ?? '') }}">
                <input type="text" placeholder="linkedin" name="linkedin_link" value="{{ old('linkedin_link', $contactUsData->linkedin_link ?? '') }}">
            </div>

            <div>
                <label>form fields</label>
                <input type="text" placeholder="first name" name="first_name" value="{{ old('first_name', $contactUsData->first_name ?? '') }}">
                <input type="text" placeholder="second name" name="second_name" value="{{ old('second_name', $contactUsData->second_name ?? '') }}">
                <input type="text" placeholder="email" name="email" value="{{ old('email', $contactUsData->email ?? '') }}">
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <input type="text" placeholder="phone number" name="phone_number" value="{{ old('phone_number', $contactUsData->phone_number ?? '') }}">
            </div>
        </div>

    </div>

    <div class="text-center mt-3">
        <button type="submit" class="btn btn-submit mt-4">Send</button>
    </div>
</form>

<script>
    function showFileName(event) {
        let file = event.target.files[0];
        let fileNameSpan = document.getElementById('fileName');
        let uploadText = document.getElementById('uploadText');

        if (file) {
            uploadText.style.display = "none";
            fileNameSpan.style.display = "block";
            fileNameSpan.textContent = "Uploaded: " + file.name;
        }
    }
</script>

@endsection