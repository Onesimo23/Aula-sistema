<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lessons;
use App\Models\Module;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getCourse()
    {
        $module = Module::all();
        $user = User::all();
        $category = Category::all();
        $course = Course::all();
        return view('course.course', compact('module', 'user', 'course', 'category'));
    }

    public function addCourse()
    {
        return view('course.add');
    }
    public function index()
    {
        //
    }
    public function destaque()
    {
        $highlightedCourses = Course::where('highlighted', 'true')->get();

        return view('course.destaque', compact('highlightedCourses'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $users = User::all();
        $course = Course::create([
            'user_id' => $request->input('user_id'),
            'category_id' => $request->input('category_id'),
            'name' => $request->input('fname'),
            'description' => $request->description,
            'highlighted' => $request->input('highlighted'),
            'picture' => $request->picture,
            'price' => $request->price,
            'role' => $request->role,
            'validate' => $request->validate,
        ]);
        return view('user.index', compact('course', 'users'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course, Module $module, Lessons $lesson, $id)
    {
        $course = Course::findOrFail($id);
        $module = Module::findOrFail($id);
        $lesson = Lessons::findOrFail($id);

        compact('course', 'module', 'lesson');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course,Module $module, Lessons $lesson, $id)
    {
        $course = Course::findOrFail($id); // Find the course by ID
        $module = Module::findOrFail($id);
        $lesson = Lessons::findOrFail($id);

        $data = $request->validate([
            // Define validation rules for course data
            $data = request()->all()
        ]);

        $course->update($data);
        $module->update($data);
        $lesson->update($data);

        return redirect()->route('course')->with('success', 'Course updated successfully!');

        //return redirect()->route('course', compact('course', 'module', 'lesson'));
        //return view('course.course', compact('course', 'module', 'lesson'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
