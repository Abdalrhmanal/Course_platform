<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }
    public function indexWE()
    {
        $teachers = Teacher::all();
        return view('welcome', compact('teachers'));
    }


    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.show', compact('teacher'));
    }
    public function showCor($id)
    {
        $course = Course::findOrFail($id);
        $teachers = Teacher::all(); // Retrieve all teachers
        return view('courses.show', compact('course', 'teachers'));
    }


    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'img' => 'required',
            'description' => 'required',
            'email' => 'required|email|unique:teachers',
            'password' => 'required',
        ]);

        Teacher::create($request->all());
        return redirect()->route('teachers.index')
            ->with('success', 'Teacher created successfully.');
    }

    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'img' => 'required',
            'description' => 'required',
            'email' => 'required|email|unique:teachers,email,' . $id,
            'password' => 'required',
        ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());

        return redirect()->route('teachers.index')
            ->with('success', 'Teacher updated successfully.');
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->route('teachers.index')
            ->with('success', 'Teacher deleted successfully.');
    }
}
