@extends('layouts.appdash')

@section('title', 'Home')

@section('content')

<div class="section-header">
    <h3>Home Page - Sections</h3>
    <span>6 sections configured</span>
    <button class="btn">+ Add new</button>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<form action="{{ route('update-home') }}" method="POST" enctype="multipart/form-data">
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
                <input type="text" name="main_hero" value="{{ old('main_hero', $homeData->main_hero ?? '') }}">
                @error('main_hero')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label>Paragraph</label>
                <textarea rows="4" name="p_hero">{{ old('p_hero', $homeData->p_hero ?? '') }}</textarea>
                @error('p_hero')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label>Button</label>
                <input type="text" name="button_name" value="{{ old('button_name', $homeData->button_name ?? '') }}">
                @error('button_name')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label>image</label>
                <div class="upload-box" onclick="document.getElementById('heroUploadImage0').click()">
                    <input type="file" id="heroUploadImage0" accept="image/*" style="display:none"
                        onchange="showFileName(event, 'hero', 0)" name="image_hero">
                    <span id="heroUploadText0">
                        @if(isset($homeData->image_hero))
                        {{ basename($homeData->image_hero) }}
                        @else
                        Drop files here or click to upload
                        @endif
                    </span>
                    <span id="heroFileName0" style="display:none; font-weight:600; margin-top:10px; color:#333;"></span>
                </div>
                @error('image_hero')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <!-- SECTION 2 -->
    <div class="section-box">
        <div class="section-title">
            <strong>features</strong>
            <span class="tag">Section 2</span>
            <div class="edit">✎</div>
        </div>

        <div class="grid-2">
            <div>
                <label>Main Title</label>
                <input type="text" name="main_features"
                    value="{{ old('main_features', $homeData->main_features ?? '') }}">
                @error('main_features')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label>Paragraph</label>
                <textarea rows="4" name="p_features">{{ old('p_features', $homeData->p_features ?? '') }}</textarea>
                @error('p_features')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label>Button</label>
                <input type="text" name="button_features" value="{{ old('button_features', $homeData->button_features ?? '') }}">
                @error('button_features')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label>Image</label>
                <div class="upload-box" onclick="document.getElementById('featureUploadImage0').click()">
                    <input type="file" id="featureUploadImage0" accept="image/*" style="display:none"
                        onchange="showFileName(event, 'feature', 0)"
                        name="image_features">
                    <span id="featureUploadText0">
                        @if(isset($homeData->image_features))
                        {{ basename($homeData->image_features) }}
                        @else
                        Drop files here or click to upload
                        @endif
                    </span>
                    <span id="featureFileName0" style="display:none; font-weight:600; margin-top:10px; color:#333;"></span>
                </div>
                @error('image_features')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <!-- SECTION 3 -->
    <div class="section-box">
        <div class="section-title">
            <strong>partners</strong>
            <span class="tag">Section 3</span>
            <div class="edit">✎</div>
        </div>

        <div class="grid-2">
            <div>
                <label>Main Title</label>
                <input type="text" name="main_partner" value="{{ old('main_partner', $homeData->main_partner ?? '') }}">
                @error('main_partner')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label>Paragraph</label>
                <textarea rows="4" name="p_partner">{{ old('p_partner', $homeData->p_partner ?? '') }}</textarea>
                @error('p_partner')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            @for ($i = 0; $i < 3; $i++)


                <div>
                <label>Image</label>
                <div class="upload-box" onclick="document.getElementById('partnerUploadImage{{ $i }}').click()">
                    <input type="file" id="partnerUploadImage{{ $i }}" accept="image/*" style="display:none"
                        onchange="showFileName(event, 'partner', {{ $i }})"
                        name="image_partner[{{ $i }}]">
                    <span id="partnerUploadText{{ $i }}">
                        @if(isset($homeData->image_partner[$i]))
                        {{ basename($homeData->image_partner[$i]) }}
                        @else
                        Drop files here or click to upload
                        @endif
                    </span>
                    <span id="partnerFileName{{ $i }}" style="display:none; font-weight:600; margin-top:10px; color:#333;"></span>
                </div>
                @error('image_partner.'.$i)
                <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>
        @endfor
    </div>
    </div>

    <!-- SECTION 4 -->
    <div class="section-box">
        <div class="section-title">
            <strong>reviews</strong>
            <span class="tag">Section 4</span>
            <div class="edit">✎</div>
        </div>

        <div class="grid-2">
            @for ($i = 0; $i < 3; $i++)

                <div>
                <label>Paragraph</label>
                <textarea rows="4" name="p_reviews[{{ $i }}]">{{ old('p_reviews.'.$i, $homeData->p_reviews[$i] ?? '') }}</textarea>
                @error('p_reviews.'.$i)
                <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>

        <div>
            <label>Image</label>
            <div class="upload-box" onclick="document.getElementById('reviewsUploadImage{{ $i }}').click()">
                <input type="file" id="reviewsUploadImage{{ $i }}" accept="image/*" style="display:none"
                    onchange="showFileName(event, 'reviews', {{ $i }})"
                    name="image_reviews[{{ $i }}]">
                <span id="reviewsUploadText{{ $i }}">
                    @if(isset($homeData->image_reviews[$i]))
                    {{ basename($homeData->image_reviews[$i]) }}
                    @else
                    Drop files here or click to upload
                    @endif
                </span>
                <span id="reviewsFileName{{ $i }}" style="display:none; font-weight:600; margin-top:10px; color:#333;"></span>
            </div>
            @error('image_reviews.'.$i)
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label>Name</label>
            <input type="text" name="name_reviews[{{ $i }}]"
                value="{{ old('name_reviews.'.$i, $homeData->name_reviews[$i] ?? '') }}">
            @error('name_reviews.'.$i)
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label>Job</label>
            <input type="text" name="job_reviews[{{ $i }}]"
                value="{{ old('job_reviews.'.$i, $homeData->job_reviews[$i] ?? '') }}">
            @error('job_reviews.'.$i)
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label>rating</label>
            <input type="text" name="rating_reviews[{{ $i }}]"
                value="{{ old('rating_reviews.'.$i, $homeData->rating_reviews[$i] ?? '') }}">
            @error('rating_reviews.'.$i)
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div></div>
        @endfor

    </div>
    </div>

    <!-- SECTION 5 -->
    <div class="section-box">
        <div class="section-title">
            <strong>Contact Content</strong>
            <span class="tag">Section 5</span>
            <div class="edit">✎</div>
        </div>

        <div class="grid-2">
            <div>
                <label>Paragraph</label>
                <textarea rows="4" name="p_contact">{{ old('p_contact', $homeData->p_contact ?? '') }}</textarea>
                @error('p_contact')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>image</label>
                <div class="upload-box" onclick="document.getElementById('contactUploadImage0').click()">
                    <input type="file" id="contactUploadImage0" accept="image/*" style="display:none"
                        onchange="showFileName(event, 'contact', 0)" name="image_contact">
                    <span id="contactUploadText0">
                        @if(isset($homeData->image_contact))
                        {{ basename($homeData->image_contact) }}
                        @else
                        Drop files here or click to upload
                        @endif
                    </span>
                    <span id="contactFileName0" style="display:none; font-weight:600; margin-top:10px; color:#333;"></span>
                </div>
                @error('image_contact')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>Social media links</label>
                <input type="text" placeholder="instagram" name="instagram_link" value="{{ old('instagram_link', $homeData->instagram_link ?? '') }}">
                <input type="text" placeholder="facebook" name="facebook_link" value="{{ old('facebook_link', $homeData->facebook_link ?? '') }}">
                <input type="text" placeholder="linkedin" name="linkedin_link" value="{{ old('linkedin_link', $homeData->linkedin_link ?? '') }}">
            </div>

            <div>
                <label>form fields</label>
                <input type="text" placeholder="email" name="email" value="{{ old('email', $homeData->email ?? '') }}">
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <input type="text" placeholder="phone number" name="phone_number" value="{{ old('phone_number', $homeData->phone_number ?? '') }}">
            </div>
        </div>
    </div>

    <!-- SECTION 6 -->
    <div class="section-box">
        <div class="section-title">
            <strong>footer</strong>
            <span class="tag">Section 6</span>
            <div class="edit">✎</div>
        </div>

        <div class="grid-2">
            <div>
                <label>Main Title</label>
                <input type="text" name="main_footer" value="{{ old('main_footer', $homeData->main_footer ?? '') }}">
                @error('main_footer')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>Paragraph</label>
                <textarea rows="4" name="p_footer">{{ old('p_footer', $homeData->p_footer ?? '') }}</textarea>
                @error('p_footer')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label>image</label>
                <div class="upload-box" onclick="document.getElementById('footerUploadImage0').click()">
                    <input type="file" id="footerUploadImage0" accept="image/*" style="display:none"
                        onchange="showFileName(event, 'footer', 0)" name="image_footer">
                    <span id="footerUploadText0">
                        @if(isset($homeData->image_footer))
                        {{ basename($homeData->image_footer) }}
                        @else
                        Drop files here or click to upload
                        @endif
                    </span>
                    <span id="footerFileName0" style="display:none; font-weight:600; margin-top:10px; color:#333;"></span>
                </div>
                @error('image_footer')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label>Pages links</label>
                <input type="text" placeholder="about us" name="about_link" value="{{ old('about_link', $homeData->about_link ?? '') }}">
                <input type="text" placeholder="services" name="services_link" value="{{ old('services_link', $homeData->services_link ?? '') }}">
                <input type="text" placeholder="contact us" name="contact_link" value="{{ old('contact_link', $homeData->contact_link ?? '') }}">
                <input type="text" placeholder="privacy & policy" name="plolicy_link" value="{{ old('plolicy_link', $homeData->plolicy_link ?? '') }}">
            </div>

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