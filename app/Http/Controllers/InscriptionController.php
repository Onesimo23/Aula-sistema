<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscriptions = Inscription::all();
        $user = User::all();
        $course = Course::all();
        return view('inscriptions.inscription', compact('inscriptions', 'user', 'course'));
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
        $inscription = Inscription::create([
            'user_id' => $request->user_id,
            'course_id' => $request->course_id,
            'date_registration' => $request->date_registration,
            'status' => $request->status,
        ]);

        return redirect()->route('inscription.index')->with(['success' => 'Inscrição criada com sucesso!', 'inscription' => $inscription]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Inscription $inscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inscription $inscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inscription $inscription)
    {
        $request->validate([
            'name',
            'email',
            'date_registration',
            'status'
        ]);

        $inscription->update([
            'user_id' => $request->user_id,
            'course_id' => $request->course_id,
            'date_registration' => $request->date_registration,
            'status' => $request->status,
        ]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inscription $inscription)
    {
        $inscription->delete();
        return redirect()->route('inscription.index')->with('success', 'Inscrição excluída com sucesso.');
    }
}
