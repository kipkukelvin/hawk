@extends('partials.layouts')

@section('content')
<div class="container my-5">
    <h2>Applications</h2>
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Submitted At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($applications as $app)
            <tr>
                <td>{{ $app->id }}</td>
                <td>{{ $app->name }}</td>
                <td>{{ $app->email }}</td>
                <td>{{ $app->course->name ?? 'N/A' }}</td>
                <td>{{ $app->created_at->format('d M Y H:i') }}</td>
                <td>
                    <a href="{{ route('admin.application.show', $app->id) }}" class="btn btn-sm btn-info">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $applications->links() }}
</div>
@endsection
