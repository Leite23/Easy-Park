<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function create() {
        return view('payment.create');
    }

    public function store(Request $request) {
        return to_route('lots.index');
    }
}
