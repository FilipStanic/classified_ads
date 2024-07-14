<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CustomEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Notifications\CustomNotification;
use App\Jobs\LogJob;
use App\Events\LogEvent;


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

    public function startJob()
    {
        LogJob::dispatch();
        return back()->with('success', 'Job started successfully!');
    }

    public function startEvent()
    {
        event(new LogEvent());
        return back()->with('success', 'Event started successfully!');
    }
}
