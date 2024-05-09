<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Course;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Mail\PaymentNotification;
use Illuminate\Support\Facades\Mail;
use App\Models\Inscription;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Inscription::where('status', 'pending')->get();
        // $payments = Payment::where('status', 'pending')->get();
        return view('payment', ['payments' => $payments]);
    }

    public function store(Request $request)
    {
        $user_id = Auth::id();
        $payment = Payment::create([
            'course_id' => $request->course_id,
            'status' => $request->input('status'),
            'user_id' => $user_id,
        ]);

        if ($request->input('status') === 'paid') {
            $user = Auth::user();
            Mail::to($user->email)->send(new PaymentNotification());
        }

        return redirect()->route('payment.index')->with(['success' => 'Inscrição criada com sucesso!', 'payment' => $payment]);
    }

    public function approve($id)
    {
        $payment = Payment::findOrFail($id);
        $payment->status = 'paid';
        $payment->save();

        // Envie um email de notificação, se necessário

        return redirect()->back()->with('success', 'Inscrição aprovada com sucesso!');
    }
}
