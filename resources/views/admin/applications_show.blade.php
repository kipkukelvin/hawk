@extends('partials.layouts')

@section('content')
<div class="container my-5">
    <h2>Application Details</h2>

    <p><strong>Name:</strong> {{ $application->name }}</p>
    <p><strong>Email:</strong> {{ $application->email }}</p>
    <p><strong>Course:</strong> {{ $application->course->name ?? 'N/A' }}</p>

    <p>
        <strong>ID Scan:</strong>
        <a href="{{ asset('storage/' . $application->id_scan) }}" target="_blank">View/Download</a>
    </p>
    <p>
        <strong>Academic Certificates:</strong>
        <a href="{{ asset('storage/' . $application->academic_certificates) }}" target="_blank">View/Download</a>
    </p>

    <a href="{{ route('admin.applications') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection
