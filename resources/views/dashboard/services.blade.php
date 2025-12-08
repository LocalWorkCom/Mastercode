@extends('layouts.appdash')

@section('title', 'Services')

@section('content')

<div class="section-header">
    <h3>Service Page - Sections</h3>
    <span>2 sections configured</span>
    <button class="btn">+ Add new</button>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<form action="{{ route('update-services') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- SECTION 1 -->
    <div class="section-box">
        <div class="section-title">
            <strong>Hero Section Content</strong>
            <span class="tag">Section 1</span>
            <div class="edit">✎</div>
        </div>
        <div class="grid-2">
            <div>
                <label>Main Title</label>
                <input type="text" name="main_hero" value="{{ old('main_hero', $servicesData->main_hero ?? '') }}">
                @error('main_hero')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label>Paragraph</label>
                <textarea rows="4" name="p_hero">{{ old('p_hero', $servicesData->p_hero ?? '') }}</textarea>
                @error('p_hero')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <!-- SECTION 2 -->
    <div class="section-box">
        <div class="section-title">
            <strong>Services Content</strong>
            <span class="tag">Section 2</span>
            <div class="edit">✎</div>
        </div>

        <div class="grid-2">
            @for($i = 0; $i < 3; $i++)
                <div>
                    <label>Paragraph {{ $i + 1 }}</label>
                    <textarea rows="4" name="p_content[{{ $i }}]">{{ old("p_content.$i", $servicesData->p_content[$i] ?? '') }}</textarea>
                    @error("p_content.$i")
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label>Image {{ $i + 1 }}</label>
                    <div class="upload-box" onclick="document.getElementById('uploadImage{{ $i }}').click()">
                        <input type="file" id="uploadImage{{ $i }}" accept="image/*" style="display:none" onchange="showFileName(event, {{ $i }})" name="image_content[{{ $i }}]">
                        <span id="uploadText{{ $i }}">
                            @if(isset($servicesData->image_content[$i]))
                                {{ basename($servicesData->image_content[$i]) }}
                            @else
                                Drop files here or click to upload
                            @endif
                        </span>
                        <span id="fileName{{ $i }}" style="display:none; font-weight:600; margin-top:10px; color:#333;"></span>
                    </div>
                    @error("image_content.$i")
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            @endfor
        </div>
    </div>

    <div class="text-center mt-3">
        <button type="submit" class="btn btn-submit mt-4">Send</button>
    </div>
</form>

<script>
    function showFileName(event, index) {
        let file = event.target.files[0];
        let fileNameSpan = document.getElementById('fileName' + index);
        let uploadText = document.getElementById('uploadText' + index);

        if (file) {
            uploadText.style.display = "none";
            fileNameSpan.style.display = "block";
            fileNameSpan.textContent = "Uploaded: " + file.name;
        }
    }
</script>

@endsection
