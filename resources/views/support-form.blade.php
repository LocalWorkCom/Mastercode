@extends('layouts.app')

@section('title', 'Book a Session')

@section('content')

<section class="hero-inner">
    @include('includes.nav')

    <!-- Hero content -->
    <div class="container d-flex align-items-center justify-content-center ">
        <h2 class="text-center text-light">
            {{ $bookSessionData && !empty($bookSessionData->p_hero)
                    ? '"' . $bookSessionData->p_hero . '."'
                    : '"Ready to take the next step? Book a session with our team and discover how our tailored solutions can
                elevate your business and streamline your operations."'
                }}

        </h2>
    </div>
</section>

<!-- support form section -->
<section class="support-form my-5">
    <div class="container">
        <h2 class="text-light text-center fw-bold">
            {{ $bookSessionData && !empty($bookSessionData->title_content)
                    ? '"' . $bookSessionData->title_content . '."'
                    : '"Interested in our services? Reach out to us today and let\'s discuss how we can support your business."'
                }}
            
        </h2>

        <div class="support-floating-form container">
            <form class="p-2 p-md-5 bg-white shadow-lg rounded-4" action="{{ route('book-session.store') }}"
                method="POST">
                @csrf
                <div class="form-group mb-2 mb-md-4">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="firstName" placeholder="{{ $bookSessionData?->first_name ?? 'First name' }}"
                                name="first_name" value="{{ old('first_name') }}">
                            @error('first_name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="lastName" placeholder="{{ $bookSessionData?->second_name ?? 'Second name' }}"
                                name="second_name" value="{{ old('second_name') }}">
                            @error('second_name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group mb-2 mb-md-4">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center gap-2">
                                <div class="country-dropdown">
                                    <select id="countrySelect" class="form-select text-center" name="phone_code">
                                        @foreach ($countries as $country)
                                        <option value="{{ $country->phone_code }}"
                                            {{ old('phone_code') == $country->phone_code ? 'selected' : '' }}>
                                            {{ $country->phone_code }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <input type="tel" class="form-control phone-input" id="phoneNumber"
                                    name="phone_number" placeholder="{{ $bookSessionData?->phone_number ?? 'Phone number' }}" value="{{ old('phone_number') }}">
                                @error('phone_number')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="email" placeholder="{{ $bookSessionData?->email ?? 'Email' }}" name="email"
                                value="{{ old('email') }}">
                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group mb-2 mb-md-4">
                    <div class="row g-2">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="companyName" placeholder="{{ $bookSessionData?->company_name ?? 'Company Name' }}"
                                name="company_name" value="{{ old('company_name') }}">
                            @error('company_name')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inquiryType" placeholder="{{ $bookSessionData?->inquiry_type ?? 'Inquiry type' }}"
                                name="inquiry_type" value="{{ old('inquiry_type') }}">
                            @error('inquiry_type')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group mb-2 mb-md-4">
                    <textarea class="form-control" id="message" name="message" placeholder="Message">{{ old('message') }}</textarea>
                    @error('message')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-submit">{{ $bookSessionData && !empty($bookSessionData->button_name)
                    ? $bookSessionData->button_name
                    : 'Book a Session'
                }}</button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content text-center p-4">
            <div class="modal-body">
                <h3 class="text-dark fw-bold">"Your message has been successfully sent. Our team will review your
                    request and get
                    back to you shortly. Thank you for reaching out!"
                </h3>
            </div>
            <div class="modal-footer border-0 justify-content-center">
                <button type="button" class="btn btn-submit" data-bs-dismiss="modal">continue</button>
            </div>
        </div>
    </div>
</div>

@if (session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var successModal = new bootstrap.Modal(document.getElementById('exampleModal'));
        successModal.show();
    });
</script>
@endif


@include('includes.footer')

@endsection