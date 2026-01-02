@extends('layouts.appdash')

@section('title', 'Industries')

@section('content')

<div class="section-header">
    <h3>Industries Page - Sections</h3>
    <span>3 sections configured</span>
    {{-- <button class="btn">+ Add new</button> --}}
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<form action="{{ route('update-industry') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- SECTION 1 -->
    <div class="section-box">
        <div class="section-title">
            <strong>Hero Section Content</strong>
            <span class="tag">Section 1</span>
            <div class="edit">✎</div>
        </div>

        <label>paragraph</label>
        <textarea rows="4" name="p_hero">{{ old('p_hero', $industryData->p_hero ?? '') }}</textarea>
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
                <input type="text" name="title_content" value="{{ old('title_content', $industryData->title_content ?? '') }}">
                @error('title_content')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label>paragraph</label>
                <textarea rows="4" name="p_content">{{ old('p_content', $industryData->p_content ?? '') }}</textarea>
                @error('p_content')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>button Name</label>
                <textarea rows="4" name="button_content">{{ old('button_content', $industryData->button_content ?? '') }}</textarea>
                @error('button_content')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label>image</label>
                <div class="upload-box" onclick="document.getElementById('contentUploadImage0').click()">
                    <input type="file" id="contentUploadImage0" accept="image/*" style="display:none"
                        onchange="showFileName(event, 'content', 0)" name="image_content">
                    <span id="contentUploadText0">
                        @if(isset($industryData->image_content))
                        {{ basename($industryData->image_content) }}
                        @else
                        Drop files here or click to upload
                        @endif
                    </span>
                    <span id="contentFileName0" style="display:none; font-weight:600; margin-top:10px; color:#333;"></span>
                </div>
                @error('image_content')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>


    </div>

    <!-- SECTION 3 -->
    <div class="section-box">
        <div class="section-title">
            <strong>Industries Content</strong>
            <span class="tag">Section 3</span>
            <div class="edit">✎</div>
        </div>

        <div class="grid-2">
            @for ($i = 0; $i < 1; $i++)
                <div>
                <label>Main Title</label>
                <input type="text" name="main_industries[{{ $i }}]"
                    value="{{ old('main_industries.'.$i, $industryData->main_industries[$i] ?? '') }}">
                @error('main_industries.'.$i)
                <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>

        <div>
            <label>Paragraph</label>
            <textarea rows="4" name="p_industries[{{ $i }}]">{{ old('p_industries.'.$i, $industryData->p_industries[$i] ?? '') }}</textarea>
            @error('p_industries.'.$i)
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label>Image</label>
            <div class="upload-box" onclick="document.getElementById('industryUploadImage{{ $i }}').click()">
                <input type="file" id="industryUploadImage{{ $i }}" accept="image/*" style="display:none"
                    onchange="showFileName(event, 'industry', {{ $i }})"
                    name="image_industries[{{ $i }}]">
                <span id="industryUploadText{{ $i }}">
                    @if(isset($industryData->image_industries[$i]))
                    {{ basename($industryData->image_industries[$i]) }}
                    @else
                    Drop files here or click to upload
                    @endif
                </span>
                <span id="industryFileName{{ $i }}" style="display:none; font-weight:600; margin-top:10px; color:#333;"></span>
            </div>
            @error('image_industries.'.$i)
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div></div>
        @endfor
    </div>
    </div>

    <div class="text-center mt-3">
        <button type="submit" class="btn btn-submit mt-4">Send</button>
    </div>
</form>

<script>
    function showFileName(event, prefix, index) {
        const file = event.target.files[0];
        const uploadText = document.getElementById(prefix + 'UploadText' + index);
        const fileNameSpan = document.getElementById(prefix + 'FileName' + index);

        if (!uploadText || !fileNameSpan) {
            // Defensive: log to console to help debug if an ID mismatch exists
            console.warn('Missing elements for', prefix, index, {
                uploadText,
                fileNameSpan
            });
            return;
        }

        if (file) {
            uploadText.style.display = "none";
            fileNameSpan.style.display = "block";
            fileNameSpan.textContent = "Uploaded: " + file.name;
        }
    }
</script>

@endsection