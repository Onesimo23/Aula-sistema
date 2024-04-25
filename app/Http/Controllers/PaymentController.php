<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Course;
use App\Models\User;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        $user = User::all();
        $course = Course::all();
        return view('payment', ['payments' => $payments, 'course' => $course, 'user' => $user]);
    }

    public function store(Request $request)
    {
            $payment = Payment::create([
                'user_id' => $request->user_id,
                'course_id' => $request->course_id,
                'status' => $request->input('status')
            ]);
            return redirect()->route('payment.index')->with(['success' => 'Inscrição criada com sucesso!', 'payments' => $payment]);
        }

}
