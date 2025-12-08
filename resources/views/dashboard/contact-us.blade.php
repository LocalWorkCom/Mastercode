@extends('layouts.appdash')

@section('title', 'Contact Us')

@section('content')

<div class="section-header">
    <h3>Contact us Page - Sections</h3>
    <span>4 sections configured</span>
    <button class="btn">+ Add new</button>
</div>

<!-- SECTION 1 -->
<div class="section-box">
    <div class="section-title">
        <strong>Hero Section Content</strong>
        <span class="tag">Section 1</span>
        <div class="edit">✎</div>
    </div>

    <label>paragraph</label>
    <textarea rows="4">
'Master Code is a software solutions company delivering tailored apps…'
            </textarea>
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
            <input type="text" value="master code">
        </div>

        <div>
            <label>paragraph</label>
            <textarea rows="4">'Master Code is a software solutions company…'</textarea>
        </div>

    </div>

    <div class="grid-2">
        <div>
            <label>image</label>
            <div class="upload-box" onclick="document.getElementById('uploadImage').click()">
                <input type="file" id="uploadImage" accept="image/*" style="display:none" onchange="showFileName(event)">
                <span id="uploadText">Drop files here or click to upload</span>
                <span id="fileName" style="display:none; font-weight:600; margin-top:10px; color:#333;"></span>
            </div>
        </div>

        <div>
            <label>Form Title</label>
            <input type="text" value="Contact us">
        </div>
    </div>

    <div class="grid-2">
        <div>
            <label>Social media links</label>
            <input type="text" placeholder="instagram">
            <input type="text" placeholder="facebook">
            <input type="text" placeholder="linkedin">
        </div>

        <div>
            <label>form fields</label>
            <input type="text" placeholder="first name">
            <input type="text" placeholder="second name">
            <input type="text" placeholder="email">
            <input type="text" placeholder="phone number">
        </div>

    </div>

</div>

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