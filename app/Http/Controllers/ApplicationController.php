<?php

namespace App\Http\Controllers;
use App\Models\Application;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            $courses = Course::orderBy('name')->get();
    return view('academic.application', compact('courses'));
       // return view('academic.application');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'course' => 'required|exists:courses,id',
            'id_scan' => 'required|file|mimes:pdf,jpg,png,jpeg|max:2048',
            'academic_certificates' => 'required|file|mimes:pdf,jpg,png,jpeg|max:2048'
        ]);

        // Save the file
        $idScanPath = $request->file('id_scan')->store('applications/id_scans', 'public');
        $certPath = $request->file('academic_certificates')->store('applications/certificates', 'public');

        // You can save to DB here 
       $application = Application::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'course_id' => $data['course'],
            'id_scan' => $idScanPath,
            'academic_certificates' => $certPath,
        ]);
        $application->load('course'); 
         Mail::send('emails.admission', [
            'app' => $application
        ], function ($message) use ($application, $idScanPath, $certPath) {
            $message->to('info.siloamict@gmail.com')
                    ->subject('New Course Application')
                    ->attach(storage_path('app/public/' . $idScanPath))
                    ->attach(storage_path('app/public/' . $certPath));
        });
           Mail::send('emails.user_confirmation', [
            'name' => $application->name,
            'course' => $application->course->name
        ], function ($message) use ($application) {
            $message->to($application->email)
                    ->subject('Application Received');
        });
        // Application::create([...]);

        return back()->with('success', 'Application submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
