<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Session;
use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function index($courseId)
    {
        $course = Course::findOrFail($courseId);
        $sessions = $course->sessions;
        return view('sessions.index', compact('course', 'sessions'));
    }

    public function show($courseId, $sessionId)
    {
        $course = Course::findOrFail($courseId);
        $session = Session::findOrFail($sessionId);
        return view('sessions.show', compact('course', 'session'));
    }
    

    public function create($courseId)
    {
        $course = Course::findOrFail($courseId);
        return view('sessions.create', compact('course'));
    }

    public function store(Request $request, $courseId)
    {
        $request->validate([
            'title' => 'required',
            'video_link' => 'required',
            'description' => 'required',
        ]);

        $course = Course::findOrFail($courseId);
        $course->sessions()->create($request->all());

        return redirect()->route('courses.sessions.index', $courseId)
            ->with('success', 'Session created successfully.');
    }

    public function edit($courseId, $sessionId)
    {
        $course = Course::findOrFail($courseId);
        $session = Session::findOrFail($sessionId);

        return view('sessions.edit', compact('course', 'session'));
    }

    public function update(Request $request, $courseId, $sessionId)
    {
        $request->validate([
            'title' => 'required',
            'video_link' => 'required',
            'description' => 'required',
        ]);

        $session = Session::findOrFail($sessionId);
        $session->update([
            'title' => $request->input('title'),
            'video_link' => $request->input('video_link'),
            'description' => $request->input('description'),
        ]);

        return redirect('/courses/' . $courseId . '/sessions')
            ->with('success', 'Session updated successfully.');
    }


    public function destroy($courseId, $sessionId)
    {
        $session = Session::findOrFail($sessionId);
        $session->delete();

        return redirect('/courses/' . $courseId . '/sessions')
        ->with('success', 'Session updated successfully.');
    }
}
