<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lessons;
use App\Models\Module;
use App\Models\Quizzs;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getCourse(){
        $module = Module::all();
        $user = User::all();
        $course = Course::all();
        return view('course.course', compact('module', 'user', 'course'));
    }

    public function addCourse(){
        return view('course.add');
    }
    public function index()
    {
       //
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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required',
            'description' => 'required|',
            'price' => 'required',
            'role' => 'required|',
            'user_id' => 'required|',
            'validate' => 'required|date',
            'picture' => 'required|',
            'platform' => 'required',

        ]);

        $course = Course::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'role' => $validatedData['role'],
            'validate' => $validatedData['validate'],
            'picture' => $validatedData['picture'],
            'user_id' => $validatedData['user_id'],
        ]);

        $module = Module::create([
            'name' => $validatedData['name'],
            'course_id' => $validatedData['course_id'],

        ]);

        $lesson = Lessons::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'lesson_number' => $validatedData['lesson_number'],
            'platform' => $validatedData['platform'],
            'video_link' => $validatedData['video_link'],
            'course_id' => $validatedData['course_id'],
            'module_id' => $validatedData['module_id'],

        ]);

        return redirect(compact('course', 'module', 'lesson'))->route('user')->with('success', 'Usuário criado com sucesso!');
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
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
