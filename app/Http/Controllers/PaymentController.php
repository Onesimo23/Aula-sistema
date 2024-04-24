<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payment');
    }

    public function create()
    {
        $courses = course::all();
        return view('payment.create', compact('courses'));
    }
    public function store(Request $request)
    {
        // Valide os dados recebidos do modal
        $request->validate([
            'course_registrations_id' => 'required',
            'value' => 'required|numeric',
            'status' => 'required|in:paid,pending',
        ]);

        $payment = new Payment();
        $payment->course_registrations_id = $request->input('course_registrations_id');
        $payment->value = $request->input('value');
        $payment->status = $request->input('value');
        $payment->save();

        return response()->json(['success' => true]);
    }
}
