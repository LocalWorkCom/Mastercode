@extends('layouts.appdash')

@section('title', 'Home')

@section('content')

    @if (session('success'))
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
                    <label>Image</label>
                    {{-- حفظ الصورة القديمة --}}
                    @if (isset($homeData->image_hero))
                        <input type="hidden" name="old_image_hero" value="{{ $homeData->image_hero }}">
                    @endif

                    <div class="upload-box" onclick="document.getElementById('heroUploadImage0').click()">
                        <input type="file" id="heroUploadImage0" accept="image/*" style="display:none"
                            onchange="showFileName(event, 'hero', 0)" name="image_hero">
                        <span id="heroUploadText0">
                            {{ isset($homeData->image_hero) ? basename($homeData->image_hero) : 'Drop files here or click to upload' }}
                        </span>
                        <span id="heroFileName0" class="file-name"></span>
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
                <strong>Features</strong>
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
                    <input type="text" name="button_features"
                        value="{{ old('button_features', $homeData->button_features ?? '') }}">
                    @error('button_features')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label>Image</label>
                    @if (isset($homeData->image_features))
                        <input type="hidden" name="old_image_features" value="{{ $homeData->image_features }}">
                    @endif

                    <div class="upload-box" onclick="document.getElementById('featureUploadImage0').click()">
                        <input type="file" id="featureUploadImage0" accept="image/*" style="display:none"
                            onchange="showFileName(event, 'feature', 0)" name="image_features">
                        <span id="featureUploadText0">
                            {{ isset($homeData->image_features) ? basename($homeData->image_features) : 'Drop files here or click to upload' }}
                        </span>
                        <span id="featureFileName0" class="file-name"></span>
                    </div>
                    @error('image_features')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <!-- SECTION 3 -->
        @php
            $partners = old('image_partner', $homeData->image_partner ?? []);
            if (count($partners) == 0) {
                $partners = [''];
            }
        @endphp

        <div class="section-box">
            <div class="section-title">
                <strong>Partners</strong>
                <span class="tag">Section 3</span>
                <div class="edit">✎</div>
            </div>

            <div class="grid-2">
                <div>
                    <label>Main Title</label>
                    <input type="text" name="main_partner"
                        value="{{ old('main_partner', $homeData->main_partner ?? '') }}">
                </div>

                <div>
                    <label>Paragraph</label>
                    <textarea rows="4" name="p_partner">{{ old('p_partner', $homeData->p_partner ?? '') }}</textarea>
                </div>
            </div>

            <div id="partner-images-container" class="grid-2 mt-3">
                @foreach ($partners as $i => $img)
                    <div class="image-card">
                        <label>Image</label>

                        @if ($img)
                            <input type="hidden" name="old_image_partner[{{ $i }}]"
                                value="{{ $img }}">
                        @endif

                        <div class="upload-box"
                            onclick="document.getElementById('partnerUploadImage{{ $i }}').click()">
                            <input type="file" id="partnerUploadImage{{ $i }}" style="display:none"
                                name="image_partner[{{ $i }}]"
                                onchange="showFileName(event,'partner',{{ $i }})">

                            <span id="partnerUploadText{{ $i }}">
                                {{ $img ? basename($img) : 'Drop files here or click to upload' }}
                            </span>
                            <span id="partnerFileName{{ $i }}" class="file-name"></span>
                        </div>
                    </div>
                @endforeach
            </div>

            <button type="button" class="btn btn-success mt-3" onclick="addPartnerImage()">+ Add card</button>
        </div>

        <!-- SECTION 4 -->
        @php
            $reviews = old('p_reviews', $homeData->p_reviews ?? []);
            if (count($reviews) == 0) {
                $reviews = [''];
            }
        @endphp

        <div class="section-box">
            <div class="section-title">
                <strong>Reviews</strong>
                <span class="tag">Section 4</span>
                <div class="edit">✎</div>
            </div>

            <div id="reviews-container" class="grid-2">
                @foreach ($reviews as $i => $review)
                    <div>
                        <label>Paragraph</label>
                        <textarea rows="4" name="p_reviews[{{ $i }}]">{{ $review }}</textarea>
                    </div>

                    <div>
                        <label>Image</label>

                        {{-- لو في صورة قديمة نحتفظ بيها --}}
                        @if (!empty($homeData->image_reviews[$i]))
                            <input type="hidden" name="image_reviews[{{ $i }}]"
                                value="{{ $homeData->image_reviews[$i] }}">
                        @endif

                        <div class="upload-box"
                            onclick="document.getElementById('reviewsUploadImage{{ $i }}').click()">
                            <input type="file" id="reviewsUploadImage{{ $i }}" style="display:none"
                                name="image_reviews[{{ $i }}]"
                                onchange="showFileName(event,'reviews',{{ $i }})">
                            <span id="reviewsUploadText{{ $i }}">
                                {{ isset($homeData->image_reviews[$i]) ? basename($homeData->image_reviews[$i]) : 'Drop files here or click to upload' }}
                            </span>
                            <span id="reviewsFileName{{ $i }}" class="file-name"></span>
                        </div>
                    </div>

                    <div>
                        <label>Name</label>
                        <input type="text" name="name_reviews[{{ $i }}]"
                            value="{{ $homeData->name_reviews[$i] ?? '' }}">
                    </div>
                    <div>
                        <label>Job</label>
                        <input type="text" name="job_reviews[{{ $i }}]"
                            value="{{ $homeData->job_reviews[$i] ?? '' }}">
                    </div>
                    <div>
                        <label>Rating</label>
                        <input type="text" name="rating_reviews[{{ $i }}]"
                            value="{{ $homeData->rating_reviews[$i] ?? '' }}">
                    </div>
                    <div></div>
                @endforeach

            </div>

            <button type="button" class="btn btn-success mt-3" onclick="addReview()">+ Add Review</button>
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
                    <label>Image</label>
                    @if (isset($homeData->image_contact))
                        <input type="hidden" name="old_image_contact" value="{{ $homeData->image_contact }}">
                    @endif
                    <div class="upload-box" onclick="document.getElementById('contactUploadImage0').click()">
                        <input type="file" id="contactUploadImage0" accept="image/*" style="display:none"
                            onchange="showFileName(event, 'contact', 0)" name="image_contact">
                        <span id="contactUploadText0">
                            {{ isset($homeData->image_contact) ? basename($homeData->image_contact) : 'Drop files here or click to upload' }}
                        </span>
                        <span id="contactFileName0" class="file-name"></span>
                    </div>
                    @error('image_contact')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label>Social media links</label>
                    <input type="text" placeholder="instagram" name="instagram_link"
                        value="{{ old('instagram_link', $homeData->instagram_link ?? '') }}">
                    <input type="text" placeholder="facebook" name="facebook_link"
                        value="{{ old('facebook_link', $homeData->facebook_link ?? '') }}">
                    <input type="text" placeholder="linkedin" name="linkedin_link"
                        value="{{ old('linkedin_link', $homeData->linkedin_link ?? '') }}">
                </div>

                <div>
                    <label>Form fields</label>
                    <input type="text" placeholder="email" name="email"
                        value="{{ old('email', $homeData->email ?? '') }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" placeholder="phone number" name="phone_number"
                        value="{{ old('phone_number', $homeData->phone_number ?? '') }}">
                </div>
            </div>
        </div>

        <!-- SECTION 6 -->
        <div class="section-box">
            <div class="section-title">
                <strong>Footer</strong>
                <span class="tag">Section 6</span>
                <div class="edit">✎</div>
            </div>

            <div class="grid-2">
                <div>
                    <label>Main Title</label>
                    <input type="text" name="main_footer"
                        value="{{ old('main_footer', $homeData->main_footer ?? '') }}">
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
                    <label>Image</label>
                    @if (isset($homeData->image_footer))
                        <input type="hidden" name="old_image_footer" value="{{ $homeData->image_footer }}">
                    @endif
                    <div class="upload-box" onclick="document.getElementById('footerUploadImage0').click()">
                        <input type="file" id="footerUploadImage0" accept="image/*" style="display:none"
                            onchange="showFileName(event, 'footer', 0)" name="image_footer">
                        <span id="footerUploadText0">
                            {{ isset($homeData->image_footer) ? basename($homeData->image_footer) : 'Drop files here or click to upload' }}
                        </span>
                        <span id="footerFileName0" class="file-name"></span>
                    </div>
                    @error('image_footer')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label>Pages links</label>
                    <input type="text" placeholder="about us" name="about_link"
                        value="{{ old('about_link', $homeData->about_link ?? '') }}">
                    <input type="text" placeholder="services" name="services_link"
                        value="{{ old('services_link', $homeData->services_link ?? '') }}">
                    <input type="text" placeholder="contact us" name="contact_link"
                        value="{{ old('contact_link', $homeData->contact_link ?? '') }}">
                    <input type="text" placeholder="privacy & policy" name="plolicy_link"
                        value="{{ old('plolicy_link', $homeData->plolicy_link ?? '') }}">
                </div>
            </div>
        </div>

        <div class="text-center mt-3">
            <button type="submit" class="btn btn-submit mt-4">Send</button>
        </div>
    </form>

    <script>
        let partnerImageIndex = {{ count($partners) }};
        let reviewIndex = {{ count($reviews) }};

        function addPartnerImage() {
            document.getElementById('partner-images-container').insertAdjacentHTML('beforeend', `
    <div class="image-card">
        <label>Image</label>

        <div class="upload-box"
             onclick="document.getElementById('partnerUploadImage${partnerImageIndex}').click()">

            <input type="file"
                   id="partnerUploadImage${partnerImageIndex}"
                   style="display:none"
                   name="image_partner[${partnerImageIndex}]"
                   onchange="showFileName(event,'partner',${partnerImageIndex})">

            <span id="partnerUploadText${partnerImageIndex}">
                Drop files here or click to upload
            </span>
            <span id="partnerFileName${partnerImageIndex}" class="file-name"></span>
        </div>
    </div>
    `);

            partnerImageIndex++;
        }

        function addReview() {
            document.getElementById('reviews-container').insertAdjacentHTML('beforeend', `
    <div>
        <label>Paragraph</label>
        <textarea rows="4" name="p_reviews[${reviewIndex}]"></textarea>
    </div>

    <div>
        <label>Image</label>
        <div class="upload-box"
             onclick="document.getElementById('reviewsUploadImage${reviewIndex}').click()">

            <input type="file"
                   id="reviewsUploadImage${reviewIndex}"
                   style="display:none"
                   name="image_reviews[${reviewIndex}]"
                   onchange="showFileName(event,'reviews',${reviewIndex})">

            <span id="reviewsUploadText${reviewIndex}">Drop files here or click to upload</span>
            <span id="reviewsFileName${reviewIndex}" class="file-name"></span>
        </div>
    </div>

    <div><label>Name</label><input type="text" name="name_reviews[${reviewIndex}]" placeholder="Name"></div>
    <div><label>Job</label><input type="text" name="job_reviews[${reviewIndex}]" placeholder="Job"></div>
    <div><label>Rating</label><input type="text" name="rating_reviews[${reviewIndex}]" placeholder="Rating"></div>
    <div></div>
    `);

            reviewIndex++;
        }

        function showFileName(e, prefix, index) {
            const uploadText = document.getElementById(prefix + 'UploadText' + index);
            const fileNameSpan = document.getElementById(prefix + 'FileName' + index);

            if (uploadText) uploadText.style.display = 'none';

            if (fileNameSpan) {
                fileNameSpan.style.display = 'block';
                fileNameSpan.innerText = e.target.files[0].name;
            } else if (uploadText) {
                uploadText.innerText = e.target.files[0].name;
                uploadText.style.display = 'block';
            }
        }
    </script>

@endsection
