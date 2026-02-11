@extends('layouts.appdash')

@section('title', 'About Us')

@section('content')

    <div class="section-header">
        <h3>About us Page - Sections</h3>
        <span>6 sections configured</span>
    </div>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('update-about-us') }}" method="POST" enctype="multipart/form-data">
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
                    <input type="text" name="main_hero" value="{{ old('main_hero', $aboutUsData->main_hero ?? '') }}">
                    @error('main_hero')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label>Paragraph</label>
                    <textarea rows="4" name="p_hero">{{ old('p_hero', $aboutUsData->p_hero ?? '') }}</textarea>
                    @error('p_hero')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label>Button</label>
                    <input type="text" name="button_name"
                        value="{{ old('button_name', $aboutUsData->button_name ?? '') }}">
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
                            @if (isset($aboutUsData->image_hero))
                                {{ basename($aboutUsData->image_hero) }}
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
                <strong>mission & vission</strong>
                <span class="tag">Section 2</span>
                <div class="edit">✎</div>
            </div>

            <div class="grid-2">
                @for ($i = 0; $i < 3; $i++)
                    <div>
                        <label>Main Title</label>
                        <input type="text" name="main_mission[{{ $i }}]"
                            value="{{ old('main_mission.' . $i, $aboutUsData->main_mission[$i] ?? '') }}">
                        @error('main_mission.' . $i)
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label>Paragraph</label>
                        <textarea rows="4" name="p_mission[{{ $i }}]">{{ old('p_mission.' . $i, $aboutUsData->p_mission[$i] ?? '') }}</textarea>
                        @error('p_mission.' . $i)
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label>Image</label>
                        <div class="upload-box"
                            onclick="document.getElementById('missionUploadImage{{ $i }}').click()">
                            <input type="file" id="missionUploadImage{{ $i }}" accept="image/*"
                                style="display:none" onchange="showFileName(event, 'mission', {{ $i }})"
                                name="image_mission[{{ $i }}]">
                            <span id="missionUploadText{{ $i }}">
                                @if (isset($aboutUsData->image_mission[$i]))
                                    {{ basename($aboutUsData->image_mission[$i]) }}
                                @else
                                    Drop files here or click to upload
                                @endif
                            </span>
                            <span id="missionFileName{{ $i }}"
                                style="display:none; font-weight:600; margin-top:10px; color:#333;"></span>
                        </div>
                        @error('image_mission.' . $i)
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div></div>
                @endfor
            </div>
        </div>

        <!-- SECTION 3 -->
        <div class="section-box">
            <div class="section-title">
                <strong>story</strong>
                <span class="tag">Section 3</span>
                <div class="edit">✎</div>
            </div>

            <div class="grid-2">
                @for ($i = 0; $i < 3; $i++)
                    <div>
                        <label>Main Title</label>
                        <input type="text" name="main_story[{{ $i }}]"
                            value="{{ old('main_story.' . $i, $aboutUsData->main_story[$i] ?? '') }}">
                        @error('main_story.' . $i)
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label>Paragraph</label>
                        <textarea rows="4" name="p_story[{{ $i }}]">{{ old('p_story.' . $i, $aboutUsData->p_story[$i] ?? '') }}</textarea>
                        @error('p_story.' . $i)
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label>Year</label>
                        <input type="text" name="year_story[{{ $i }}]"
                            value="{{ old('year_story.' . $i, $aboutUsData->year_story[$i] ?? '') }}">
                        @error('year_story.' . $i)
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label>Image</label>
                        <div class="upload-box"
                            onclick="document.getElementById('storyUploadImage{{ $i }}').click()">
                            <input type="file" id="storyUploadImage{{ $i }}" accept="image/*"
                                style="display:none" onchange="showFileName(event, 'story', {{ $i }})"
                                name="image_story[{{ $i }}]">
                            <span id="storyUploadText{{ $i }}">
                                @if (isset($aboutUsData->image_story[$i]))
                                    {{ basename($aboutUsData->image_story[$i]) }}
                                @else
                                    Drop files here or click to upload
                                @endif
                            </span>
                            <span id="storyFileName{{ $i }}"
                                style="display:none; font-weight:600; margin-top:10px; color:#333;"></span>
                        </div>
                        @error('image_story.' . $i)
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                @endfor
            </div>
        </div>

        <!-- SECTION 4 -->
        <div class="section-box">
            <div class="section-title">
                <strong>slider</strong>
                <span class="tag">Section 4</span>
                <div class="edit">✎</div>
            </div>

            <div class="grid-2">
                <div>
                    <label>Main Title</label>
                    <input type="text" name="main_slider"
                        value="{{ old('main_slider', $aboutUsData->main_slider ?? '') }}">
                    @error('main_slider')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label>Paragraph</label>
                    <textarea rows="4" name="p_slider">{{ old('p_slider', $aboutUsData->p_slider ?? '') }}</textarea>
                    @error('p_slider')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <!-- SECTION 5 -->
        <div class="section-box">
            <div class="section-title">
                <strong>features</strong>
                <span class="tag">Section 5</span>
                <div class="edit">✎</div>
            </div>

            <div class="grid-2">
                @for ($i = 0; $i < 5; $i++)
                    <div>
                        <label>Main Title</label>
                        <input type="text" name="main_features[{{ $i }}]"
                            value="{{ old('main_features.' . $i, $aboutUsData->main_features[$i] ?? '') }}">
                        @error('main_features.' . $i)
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label>Paragraph</label>
                        <textarea rows="4" name="p_features[{{ $i }}]">{{ old('p_features.' . $i, $aboutUsData->p_features[$i] ?? '') }}</textarea>
                        @error('p_features.' . $i)
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div>
                        <label>Image</label>
                        <div class="upload-box"
                            onclick="document.getElementById('featureUploadImage{{ $i }}').click()">
                            <input type="file" id="featureUploadImage{{ $i }}" accept="image/*"
                                style="display:none" onchange="showFileName(event, 'feature', {{ $i }})"
                                name="image_features[{{ $i }}]">
                            <span id="featureUploadText{{ $i }}">
                                @if (isset($aboutUsData->image_features[$i]))
                                    {{ basename($aboutUsData->image_features[$i]) }}
                                @else
                                    Drop files here or click to upload
                                @endif
                            </span>
                            <span id="featureFileName{{ $i }}"
                                style="display:none; font-weight:600; margin-top:10px; color:#333;"></span>
                        </div>
                        @error('image_features.' . $i)
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div></div>
                @endfor
            </div>
        </div>

        <!-- SECTION 6 -->
        <div class="section-box">
            <div class="section-title">
                <strong>Team Member</strong>
                <span class="tag">Section <span
                        id="sectionCount">{{ max(count(old('job_member', $aboutUsData->job_member ?? [])), 1) }}</span></span>
                <div class="edit">✎</div>
            </div>

            <div class="grid-2" id="teamSections">
                @php
                    // إذا ما فيش أعضاء موجودين خلي عندنا عضو ابتدائي
                    $teamMembers = old('job_member', $aboutUsData->job_member ?? ['']);
                @endphp

                @foreach ($teamMembers as $i => $job)
                    <div>
                        <label>Job Title</label>
                        <input type="text" name="job_member[{{ $i }}]" value="{{ $job }}">
                    </div>

                    <div>
                        <label>Name</label>
                        <textarea rows="4" name="name_member[{{ $i }}]">{{ old('name_member.' . $i, $aboutUsData->name_member[$i] ?? '') }}</textarea>
                    </div>

                    <div>
                        <label>Image</label>
                        <div class="upload-box"
                            onclick="document.getElementById('teamUploadImage{{ $i }}').click()">
                            <input type="file" id="teamUploadImage{{ $i }}" accept="image/*"
                                style="display:none" onchange="showFileName(event, 'team', {{ $i }})"
                                name="image_member[{{ $i }}]">

                            <span id="teamUploadText{{ $i }}">
                                {{ isset($aboutUsData->image_member[$i]) ? basename($aboutUsData->image_member[$i]) : 'Drop files here or click to upload' }}
                            </span>
                        </div>
                        

                        {{-- Hidden input لإرسال الصورة القديمة إذا ما تم رفع جديدة --}}
                        @if (isset($aboutUsData->image_member[$i]))
                            <input type="hidden" name="image_member[{{ $i }}]"
                                value="{{ $aboutUsData->image_member[$i] }}">
                        @endif
                    </div>
                    <div></div>
                @endforeach

            </div>

            <button type="button" id="addTeamSection" class="btn btn-success" style="margin-top:20px;">+ Add
                new</button>
        </div>



        <div class="text-center mt-3">
            <button type="submit" class="btn btn-submit mt-4">Send</button>
        </div>
    </form>

    <script>
        let currentIndex = {{ max(count(old('job_member', $aboutUsData->job_member ?? [])), 1) }};

        const addTeamSectionBtn = document.getElementById('addTeamSection');
        const teamSectionsContainer = document.getElementById('teamSections');
        const sectionCountSpan = document.getElementById('sectionCount');

        addTeamSectionBtn.addEventListener('click', addTeamSection);

        function addTeamSection() {
            const html = `
        <div>
            <label>Job Title</label>
            <input type="text" name="job_member[${currentIndex}]" value="">
        </div>

        <div>
            <label>Name</label>
            <textarea rows="4" name="name_member[${currentIndex}]"></textarea>
        </div>

        <div>
            <label>Image</label>
            <div class="upload-box" onclick="document.getElementById('teamUploadImage${currentIndex}').click()">
                <input type="file" id="teamUploadImage${currentIndex}" accept="image/*" style="display:none"
                       onchange="showFileName(event, 'team', ${currentIndex})"
                       name="image_member[${currentIndex}]">
                <span id="teamUploadText${currentIndex}">Drop files here or click to upload</span>
                <span id="teamFileName${currentIndex}" style="display:none; font-weight:600; margin-top:10px; color:#333;"></span>
            </div>
        </div>
        <div></div>
    `;

            teamSectionsContainer.insertAdjacentHTML('beforeend', html);

            currentIndex++;
            sectionCountSpan.textContent = currentIndex;
        }



        function showFileName(event, prefix, index) {
            const file = event.target.files[0];
            const uploadText = document.getElementById(prefix + 'UploadText' + index);
            const fileNameSpan = document.getElementById(prefix + 'FileName' + index);

            if (!uploadText || !fileNameSpan) {
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
