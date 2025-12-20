<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateServiceRepositoryAndInterface extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:sri {name : Example Loan or Finance/Expense}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Service, Repository and Interface';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');

        // 🔥 Llamamos a los comandos existentes
        $this->call('make:service', [
            'name_service' => $name . 'Service',
        ]);

        $this->call('make:repository', [
            'name' => $name,
        ]);

        $this->call('make:interface', [
            'name' => $name,
        ]);

        $this->info('🎉 Service, Repository and Interface created successfully.');
    }
}
