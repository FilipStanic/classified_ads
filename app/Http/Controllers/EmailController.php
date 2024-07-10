<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CustomEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Notifications\CustomNotification;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $user = User::find(1);
        Mail::to('admin@gmail.com')->send(new CustomEmail($user));
        return back()->with('success', 'Email sent successfully!');
    }

    public function sendNotification()
    {
        $user = User::find(1);
        $user->notify(new CustomNotification());

        return back()->with('success', 'Notification sent successfully!');
    }
}
