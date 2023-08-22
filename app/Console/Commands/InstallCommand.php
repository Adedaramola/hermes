<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hermes:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Hermes';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if ($this->confirm('Would you like to configure Hermes before installation?')) {
            $this->configureEnvironmentVariables();
        }

        $this->info('Hermes is installed!');
    }

    private function configureEnvironmentVariables(): void
    {
        $environmentDirc = app()->environmentPath();
        $environmentFile = app()->environmentFile();
        $environmentPath = "{$environmentDirc}/{$environmentFile}";

        if (file_exists( $environmentPath )) {
            $this->line('Environment file already exists');
            return;
        }

        copy("$environmentPath.example", $environmentPath);
        
        // generate app key
        $this->call('key:generate');
    }
}
