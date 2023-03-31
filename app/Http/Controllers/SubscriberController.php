<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function subscribe(Request $request)
    {
        $email = $request->get('email');
        $name = $request->get('name');

        $existingEmail = Subscriber::query()->where('email', $email)->first();
        if ($existingEmail) {
            return response()->json([
                'message' => 'Email already exists'
            ], 403);
        }

        $newSubscriber = Subscriber::create([
            'email' => $email,
            'name' => $name
        ]);

        return response()->json($newSubscriber, 201);
    }
}
