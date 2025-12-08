@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<section class="hero-inner">
    @include('includes.nav')

    <div class="container d-flex align-items-center justify-content-center">
        <h2 class="text-center text-light">
            {{ $contactUsData && !empty($contactUsData->p_hero)
                ? '“ ' . $contactUsData->p_hero . '.”'
                : '“ Start the conversation to established good relationship and business.”'
            }}
        </h2>
    </div>
</section>

<section class="contact-us-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $contactUsData?->image_content ?: asset('assets/images/small-logo-colored.png') }}" alt="" class="mb-3" style="width: 150px;">
                <h3 class="my-4 fw-bold">
                    {{ $contactUsData && !empty($contactUsData->p_content)
                        ? '" ' . $contactUsData->p_content . '."'
                        : '"Get in touch with us for support, inquiries, or to learn how we can help your business grow."'
                    }}
                </h3>
                <div class="links-icons d-flex pt-4 flex-wrap">
                    <a href="{{ $contactUsData?->facebook_link ?? '#' }}" target="_blank" class="text-decoration-none">
                        <div class="facebook-icon ms-4">
                            <i class="fa-brands fa-facebook text-dark fs-5"></i>
                        </div>
                    </a>

                    <a href="{{ $contactUsData?->instagram_link ?? '#' }}" target="_blank" class="text-decoration-none">
                        <div class="insta-icon ms-4">
                            <i class="fa-brands fa-instagram text-dark fs-5"></i>
                        </div>
                    </a>

                    <a href="{{ $contactUsData?->linkedin_link ?? '#' }}" target="_blank" class="text-decoration-none">
                        <div class="linkedin-icon ms-4">
                            <i class="fa-brands fa-linkedin text-dark fs-5"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-form-card">
                    <h1 class="text-center fw-bold mb-2 mb-md-4">
                        {{ $contactUsData && !empty($contactUsData->form_title_content)
                            ? $contactUsData->form_title_content
                            : 'CONTACT US'
                        }}
                    </h1>
                    <form action="{{ route('contact-us.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-2 mb-md-4">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="first_name"
                                        placeholder="{{ $contactUsData?->first_name ?? 'First name' }}" value="{{ old('first_name') }}">
                                    @error('first_name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="second_name"
                                        placeholder="{{ $contactUsData?->second_name ?? 'Second name' }}" value="{{ old('second_name') }}">
                                    @error('second_name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2 mb-md-4">
                            <input type="text" class="form-control" name="email" placeholder="{{ $contactUsData?->email ?? 'Email' }}"
                                value="{{ old('email') }}">
                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-2 mb-md-4">
                            <div class="d-flex align-items-center gap-2">
                                <div class="country-dropdown">
                                    <select class="form-select text-center" name="phone_code">
                                        @foreach ($countries as $country)
                                        <option value="{{ $country->phone_code }}"
                                            {{ old('phone_code') == $country->phone_code ? 'selected' : '' }}>
                                            {{ $country->phone_code }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('phone_code')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <input type="tel" class="form-control phone-input" name="phone_number"
                                    placeholder="{{ $contactUsData?->phone_number ?? 'Phone number' }}" value="{{ old('phone_number') }}">
                                @error('phone_number')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-2 mb-md-4">
                            <textarea class="form-control" name="message" placeholder="Message">{{ old('message') }}</textarea>
                            @error('message')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="text-center mt-3">
                            <button button type="submit" class="btn btn-submit mt-4">send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@include('includes.footer')

@endsection