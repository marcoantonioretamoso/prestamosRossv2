<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateRepository extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:repository {name : Example Loan or Finance/Expense}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a repository class';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = str_replace('\\', '/', $this->argument('name'));

        $baseDir = app_path('Repositories/Eloquent');
        $dir = $baseDir . '/' . dirname($name);
        $className = basename($name) . 'Repository';

        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        $path = "{$dir}/{$className}.php";

        if (file_exists($path)) {
            $this->error('❌ Repository already exists');
            return;
        }

        $namespace = 'App\\Repositories\\Eloquent' .
            (dirname($name) !== '.' ? '\\' . str_replace('/', '\\', dirname($name)) : '');

        $content = <<<PHP
<?php

namespace {$namespace};

class {$className}
{
    public function __construct()
    {
        //
    }
}

PHP;

        file_put_contents($path, $content);

        $this->info('✅ Repository created successfully.');
        $this->line("📁 {$path}");
    }
}
