<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class MakeFirstUserAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:make-admin {email?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a user an admin by email or make the first user admin';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $email = $this->argument('email');

        if ($email) {
            $user = User::where('email', $email)->first();
            
            if (!$user) {
                $this->error("User with email '{$email}' not found.");
                return 1;
            }
        } else {
            $user = User::first();
            
            if (!$user) {
                $this->error('No users found in the database.');
                return 1;
            }
        }

        if ($user->isAdmin()) {
            $this->info("User '{$user->email}' is already an admin.");
            return 0;
        }

        $user->makeAdmin();
        $this->info("User '{$user->email}' has been made an admin successfully!");

        return 0;
    }
}
