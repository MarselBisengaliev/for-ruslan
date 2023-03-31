<?php

namespace App\Http\Controllers;

use App\Mail\MailNotify;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RequestController extends Controller
{
    public function request(Request $request)
    {
        $display_name = $request->get('display_name');
        $email = $request->get('email');
        $event_id = $request->get('event_id');
        $phone = $request->get('phone');

        Registration::create([
            'display_name' => $display_name,
            'email' => $email,
            'event_id' => $event_id,
            'phone' => $phone,
        ]);

        $createdRegistration = Registration::query()->where('event_id', $event_id)->with(['event'])->first();

        Mail::to($email)->send(new MailNotify($createdRegistration));

        return response()->json($createdRegistration, 201);
    }
}
