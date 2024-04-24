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
    public function getCourse()
    {
        $module = Module::all();
        $user = User::all();
        $course = Course::all();
        return view('course.course', compact('module', 'user', 'course'));
    }

    public function addCourse()
    {
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

        $course = Course::create([
            'user_id' => $request->input('user_id'),
            'name' => $request->input('fname'),
            'description' => $request->description,
            'highlighted' => $request->input('highlighted'),
            'picture' => $request->picture,
            'price' => $request->price,
            'role' => $request->role,
            'validate' => $request->validate,
        ]);

        $module = Module::create([
            'name' => $request->input('modulename'),
            'course_id' => $course->id,
        ]);



        $lesson = Lessons::create([
            'title' => $request->title,
            'description' => $request->description,
            'lesson_number' => $request->lesson_number,
            'platform' => $request->platform,
            'video_link' => $request->video_link,
            'user_id' => $request->user_id,

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
