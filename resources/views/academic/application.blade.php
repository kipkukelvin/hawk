@extends('partials.layouts')

@section('content')
@section('title','Siloam College - Application Form')
<link rel="stylesheet" href="{{ asset('assets/main.css') }}">
<div class="container my-5 d-flex justify-content-center">
    <div class="card shadow-lg p-4" style="max-width: 600px; width: 100%;">
      @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <h3 class="mb-4 text-center">Course Application Form</h3>

        <form action="{{ route('academic.application.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label class="form-label">Full Names</label>
            <input type="text" name="name" class="form-control" required>

            <label class="form-label mt-3">Email</label>
            <input type="email" name="email" class="form-control" required>

            <label class="form-label">Phone Number</label>

            <input id="phone" name="phone" type="tel" class="form-control" required>

            <label class="form-label">Select Course</label>
           <select name="course" class="form-select" required>
    <option value="">-- Select Course --</option>
    @foreach($courses as $course)
        <option value="{{ $course->id }}">{{ $course->name }}</option>
    @endforeach
</select>

            <label class="form-label mt-3">Upload ID</label>
            <input type="file" name="id_scan" class="form-control" required>

             <label class="form-label mt-3">Academic Cerificates</label>
            <input type="file" name="academic_certificates" class="form-control" required>

            <button class="btn btn-success w-100 mt-4" type="submit">Submit Application</button>
        </form>

    </div>
</div>
@endsection
