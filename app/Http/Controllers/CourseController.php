<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.show', compact('course'));
    }

    public function create()
    {
        $teachers = Teacher::all(); // استيراد جميع المعلمين من قاعدة البيانات
        return view('courses.create', compact('teachers'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'teacher_id' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        Course::create($request->all());
        return redirect()->route('courses.index')
            ->with('success', 'Course created successfully.');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $teachers = Teacher::all(); // قم بجلب جميع المعلمين لاستخدامهم في القائمة المنسدلة

        return view('courses.edit', compact('course', 'teachers'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'teacher_id' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $course = Course::findOrFail($id);
        $course->update($request->all());

        return redirect()->route('courses.index')
            ->with('success', 'Course updated successfully.');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('courses.index')
            ->with('success', 'Course deleted successfully.');
    }
    public function register(Course $course)
    {
        // 1. التحقق من تسجيل الدخول
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Please log in to register for the course.');
        }

        // 2. التحقق من تسجيل المستخدم في الكورس
        if ($course->users->contains(auth()->user())) {
            return redirect()->route('courses.index')->with('warning', 'You are already registered for this course.');
        }

        // 3. تسجيل المستخدم في الكورس
        $course->users()->attach(auth()->user()->id);

        // 4. إعادة التوجيه مع رسالة نجاح
        return redirect()->route('purchases.index')->with('success', 'Course registered successfully.');
    }
}
