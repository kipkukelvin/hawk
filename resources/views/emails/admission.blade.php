<h2>New Course Application</h2>

<p><strong>Name:</strong> {{ $app->name }}</p>
<p><strong>Email:</strong> {{ $app->email }}</p>
<p><strong>Phone:</strong> {{ $app->phone ?? 'N/A' }}</p>

<p><strong>Course Applied For:</strong> {{ $app->course->name }}</p>

<p>Attached are the applicant’s ID and academic certificates.</p>

