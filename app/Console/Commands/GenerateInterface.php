<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateInterface extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:interface {name : Example Loan or Finance/Expense}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create repository interface and bind it';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = str_replace('\\', '/', $this->argument('name'));

        $baseDir = app_path('Repositories/Contracts');
        $dir = $baseDir . '/' . dirname($name);

        $interfaceName = basename($name) . 'RepositoryInterface';
        $repositoryName = basename($name) . 'Repository';

        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        $path = "{$dir}/{$interfaceName}.php";

        if (file_exists($path)) {
            $this->error('❌ Interface already exists');
            return;
        }

        $namespace = 'App\\Repositories\\Contracts' .
            (dirname($name) !== '.' ? '\\' . str_replace('/', '\\', dirname($name)) : '');

        $content = <<<PHP
<?php

namespace {$namespace};

interface {$interfaceName}
{
    //
}

PHP;

        file_put_contents($path, $content);

        // 👉 REGISTRO AUTOMÁTICO
        $this->registerBinding($name);

        $this->info('✅ Interface created and registered.');
        $this->line("📁 {$path}");
    }
    protected function registerBinding(string $name)
    {
        $providerPath = app_path('Providers/AppServiceProvider.php');

        $interface = 'App\\Repositories\\Contracts\\' . str_replace('/', '\\', $name) . 'RepositoryInterface';
        $repository = 'App\\Repositories\\Eloquent\\' . str_replace('/', '\\', $name) . 'Repository';

        $binding = "        \$this->app->bind({$interface}::class, {$repository}::class);\n";

        $content = file_get_contents($providerPath);

        if (str_contains($content, $binding)) {
            return;
        }

        $content = str_replace(
            'public function register(): void' . PHP_EOL . '    {',
            "public function register(): void\n    {\n{$binding}",
            $content
        );

        file_put_contents($providerPath, $content);
    }
}
