@extends('layouts.appdash')

@section('title', 'Book Session')

@section('content')

<div class="section-header">
    <h3>Book Session Page - Sections</h3>
    <span>3 sections configured</span>
    <button class="btn">+ Add new</button>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<form action="{{ route('update-book-session') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- SECTION 1 -->
    <div class="section-box">
        <div class="section-title">
            <strong>Hero Section Content</strong>
            <span class="tag">Section 1</span>
            <div class="edit">✎</div>
        </div>

        <label>paragraph</label>
        <textarea rows="4" name="p_hero">{{ old('p_hero', $bookSessionData->p_hero ?? '') }}</textarea>
        @error('p_hero')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- SECTION 2 -->
    <div class="section-box">
        <div class="section-title">
            <strong>Book Session Content</strong>
            <span class="tag">Section 2</span>
            <div class="edit">✎</div>
        </div>

        <div class="grid-2">

            <div>
                <strong>Main Title</strong>
                <input type="text" name="title_content" value="{{ old('title_content', $bookSessionData->title_content ?? '') }}">
                @error('title_content')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>

        <div class="grid-2">

            <div>
                <strong>form fields</strong>
                <input type="text" placeholder="first name" name="first_name" value="{{ old('first_name', $bookSessionData->first_name ?? '') }}">
                <input type="text" placeholder="second name" name="second_name" value="{{ old('second_name', $bookSessionData->second_name ?? '') }}">
                <input type="text" placeholder="email" name="email" value="{{ old('email', $bookSessionData->email ?? '') }}">
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <input type="text" placeholder="phone number" name="phone_number" value="{{ old('phone_number', $bookSessionData->phone_number ?? '') }}">
            </div>

            <div>
                <input type="text" placeholder="Company Name" name="company_name" value="{{ old('company_name', $bookSessionData->company_name ?? '') }}">
                <input type="text" placeholder="Inquiry Type" name="inquiry_type" value="{{ old('inquiry_type', $bookSessionData->inquiry_type ?? '') }}">
                <strong>button</strong>
                <input type="text" placeholder="Book A Session" name="button_name" value="{{ old('button_name', $bookSessionData->button_name ?? '') }}">
            </div>
        </div>

    </div>

    <div class="section-box">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Message</th>
                    <th>status</th>
                    <th>:</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookSessions as $bookSession)
                <tr>
                        <td> {{ $bookSession->id }}</td>
                        <td> {{ $bookSession->first_name . ' ' . $bookSession->second_name }}</td>
                        <td> {{ $bookSession->email }}</td>
                        <td> {{ $bookSession->phone_number }}</td>
                        <td> {{ $bookSession->message }}</td>
                        <td> {{ $bookSession->status }}</td>
                        <td>
                            <button class="btn btn-sm btn-primary">CallBack</button>
                        </td>
                        
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

    <div class="text-center mt-3">
        <button type="submit" class="btn btn-submit mt-4">Send</button>
    </div>
</form>

@endsection