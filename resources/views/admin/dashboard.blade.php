@extends('partials.layouts')

@section('content')
<div class="container my-5">
    <h2>Admin Dashboard</h2>
    <p>Total Applications: <strong>{{ $totalApplications }}</strong></p>

    <a href="{{ route('admin.applications') }}" class="btn btn-primary mt-3">View Applications</a>
</div>
@endsection
