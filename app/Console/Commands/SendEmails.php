<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\CustomEmail;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:mails {email?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email to a specific user or all users if no email is provided';


    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->argument('email');

        if ($email) {
            // Send email to the specific user
            $user = User::where('email', $email)->first();
            if ($user) {
                Mail::to($user->email)->send(new CustomEmail($user));
                $this->info('Email sent to ' . $user->email);
            } else {
                $this->error('User with email ' . $email . ' not found.');
            }
        } else {
            // Send email to all users
            $users = User::all();
            foreach ($users as $user) {
                Mail::to($user->email)->send(new CustomEmail($user));
                $this->info('Email sent to ' . $user->email);

                // Add a delay to avoid hitting rate limits
                sleep(2);
            }
            $this->info('Custom emails sent successfully to all users.');
        }
    }
}
