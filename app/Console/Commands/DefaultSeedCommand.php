<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\Store;
use App\Models\User;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DefaultSeedCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hermes:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        if ( ! $this->confirm('Are you sure to proceed with this?')) {
            return;
        }

        $this->info('Creating default Admin user...');

        $this->seedDefaultSuperAdmin();
    }

    private function seedDefaultSuperAdmin(): void
    {
        try {
            DB::transaction(
                callback: fn () => tap(User::query()->create([
                    'first_name' => 'Admin',
                    'username' => 'admin',
                    'password' => Hash::make('password')
                ]), function (User $user): void {
                    $this->seedDefaultStore($user);
                })
            );
        } catch (Exception | QueryException $e) {
            $this->error($e->getMessage());
        }
    }

    private function seedDefaultStore(User $user): void
    {
        $user->ownedStores()->save(Store::forceCreate([
            'user_id' => $user->id,
            'name' => explode(' ', $user->first_name, 2)[0] . "'s Store",
            'personal_store' => true
        ]));
    }
}
