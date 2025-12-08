<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
     // Show admin login form
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    // Handle logout
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    // Show password reset request form
    public function showLinkRequestForm()
    {
        return view('admin.password_reset_request');
    }

    // Send password reset email
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $admin = Admin::where('email', $request->email)->first();
        if (!$admin) return back()->withErrors(['email' => 'Email not found']);

        $token = Str::random(60);

        DB::table('admin_password_resets')->updateOrInsert(
            ['email' => $request->email],
            ['token' => $token, 'created_at' => now()]
        );

        $resetLink = route('admin.password.reset', $token) . '?email=' . urlencode($request->email);

        Mail::send('emails.admin_password_reset', ['link' => $resetLink], function ($message) use ($request) {
            $message->to($request->email)->subject('Admin Password Reset Link');
        });

        return back()->with('status', 'Password reset link sent to your email.');
    }

    // Show reset password form
    public function showResetForm(Request $request, $token)
    {
        $email = $request->query('email');
        return view('admin.password_reset', compact('token', 'email'));
    }

    // Handle password reset
    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'token' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);

        $record = DB::table('admin_password_resets')->where([
            ['email', $request->email],
            ['token', $request->token],
        ])->first();

        if (!$record) return back()->withErrors(['email' => 'Invalid token']);

        $admin = Admin::where('email', $request->email)->first();
        $admin->password = Hash::make($request->password);
        $admin->save();

        DB::table('admin_password_resets')->where('email', $request->email)->delete();

        return redirect()->route('admin.login')->with('status', 'Password reset successful. You can login now.');
    }
}
