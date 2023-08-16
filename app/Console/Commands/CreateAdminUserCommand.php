<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\User\User;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Database\QueryException;

final class CreateAdminUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new admin user';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info('Create a new user with Administrator privileges');

        $password = $this->secret('Password');
        $passwordConfirmation = $this->secret('Confirm Password');

        if ($password !== $passwordConfirmation) {
            $this->info('Passwords do not match');
        }

        $this->info('Creating admin account...');

        try {
            $user = User::query()->forceCreate([
                'firstname' => fake()->firstName(),
                'lastname' => fake()->lastName(),
                'username' => fake()->userName(),
                'email' => fake()->safeEmail(),
                'email_verified_at' => now()->toDateTimeString(),
                'password' => $password,
            ]);
        } catch (Exception|QueryException $e) {
            $this->error($e->getMessage());
        }

        $this->info('Admin user created');
    }
}
