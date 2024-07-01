<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;

class Test extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'something';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will do something';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //    $user = User::find(1);
        $name = $this->choice(
            'What is your name?',
            ['Taylor', 'Dayle'],
            0
        );

    }

}
