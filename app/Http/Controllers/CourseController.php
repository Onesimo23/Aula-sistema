<?php

namespace App\Http\Controllers;

use App\Models\Course;
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
        return view('course.course', compact('module', 'user'));
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
            'title' => 'request',
            'description' => 'required|',
            'price' => 'required|double',
            'role' => 'required|',
            'user_id' => 'required|',
            'validate' => 'required|date',

        ]);

        $course = Course::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'role' => $validatedData['role'],
            'validate' => $validatedData['validate'],
            'user_id' => $validatedData['user_id'],
        ]);

        $module = Module::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
        ]);

        $quizz = Quizzs::class([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
        ]);

        return redirect(compact('course', 'module', 'quizz'))->route('user')->with('success', 'Usuário criado com sucesso!');
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
