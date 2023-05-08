<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'user' => Auth::user()
        ]);
    }

    public function login()
    {
        return view('auth.login');
    }

    public function classmate()
    {
        $user = Auth::user();
        $classmates = User::where('grade_id', $user->grade->id)
            ->whereNot('id', $user->id)
            ->get();

        return view('classmate', [
            'classmates' => $classmates,
            'user' => $user
        ]);
    }

    public function subject()
    {
        $user = Auth::user();
        $subjects = $user->grade->subject;

        return view('subject', [
            'user' => $user,
            'subjects' => $subjects
        ]);
    }

    public function experience()
    {
        return view('experience', [
            'user' => Auth::user()
        ]);
    }

    public function profile()
    {
        return view('profile', [
            'user' => Auth::user()
        ]);
    }
}
