<?php

namespace App\Http\Controllers;

use App\Models\Lessons;
use App\Models\Module;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $module = Module::all();
        $lesson = Lessons::all();
        return view('lessons.index', compact('module', 'lesson'));
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
        $module = Module::all();
        $lesson = Lessons::create([
            'module_id' => $request->input('module_id'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'lesson_number' => $request->input('lesson_number'),
            'platform' => $request->input('platform_name'),
            'video_link' => $request->input('video_link'),
        ]);
        return view('lessons.index', compact('lesson', 'module'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Lessons $lessons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lessons $lessons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lessons $lessons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lessons $lessons)
    {
        //
    }
}
