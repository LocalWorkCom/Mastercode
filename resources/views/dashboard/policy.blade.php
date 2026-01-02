@extends('layouts.appdash')

@section('title', 'Policy')

@section('content')

<div class="section-header">
    <h3>Policy & Terms Page - Sections</h3>
    <span>3 sections configured</span>
    {{-- <button class="btn">+ Add new</button> --}}
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<form action="{{ route('update-policy') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- SECTION 1 -->
    <div class="section-box">
        <div class="section-title">
            <strong>Hero Section Content</strong>
            <span class="tag">Section 1</span>
            <div class="edit">✎</div>
        </div>

        <label>paragraph</label>
        <textarea rows="4" name="p_hero">{{ old('p_hero', $policyData->p_hero ?? '') }}</textarea>
        @error('p_hero')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- SECTION 2 -->
    <div class="section-box">
        <div class="section-title">
            <strong>Policy Content</strong>
            <span class="tag">Section 2</span>
            <div class="edit">✎</div>
        </div>

        <div class="grid-2">

            <div>
                <label>Main Title</label>
                <input type="text" name="title_content" value="{{ old('title_content', $policyData->title_content ?? '') }}">
                @error('title_content')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label>Sub Title</label>
                <input type="text" name="sub_title_content" value="{{ old('sub_title_content', $policyData->sub_title_content ?? '') }}">
                @error('sub_title_content')
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
                        @if(isset($policyData->image_content))
                        {{ basename($policyData->image_content) }}
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

        </div>

    </div>

    <div class="section-box">
        <div class="section-title">
            <strong>Terms and Policies Content</strong>
            <span class="tag">Section 3</span>
            <div class="edit">✎</div>
        </div>

        <div class="grid-2">
            @for($i = 0; $i < 4; $i++)
                <div>
                <label>Text {{ $i+1 }}</label>
                <textarea rows="2" name="text[{{ $i }}]">{{ old("text.$i", $policyData->text[$i] ?? '') }}</textarea>
                @error("text.$i")
                <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>
        @endfor
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