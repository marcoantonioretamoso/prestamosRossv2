<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class GenerateService extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name_service : The name of the service (e.g. Auth/AuthService)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new service class inside app/Services';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $nameService = $this->argument('name_service');

        // Normalizamos rutas
        $nameService = str_replace('\\', '/', $nameService);

        // Carpeta base de servicios
        $baseDir = app_path('Services');
        $dir = dirname("$baseDir/$nameService");
        $fileName = basename($nameService);

        // Si no termina en .php, lo agregamos
        if (!Str::endsWith($fileName, '.php')) {
            $fileName .= '.php';
        }

        $path = "$dir/$fileName";

        // Crear directorio si no existe
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }

        // Verificar si el archivo ya existe
        if (file_exists($path)) {
            $this->error("❌ The service already exists: {$path}");
            return;
        }

        // Calcular namespace según la ruta
        $relativeNamespace = str_replace('/', '\\', trim(str_replace($baseDir, '', $dir), '/'));
        $namespace = 'App\\Services' . ($relativeNamespace ? '\\' . $relativeNamespace : '');

        // Nombre de clase sin extensión
        $className = pathinfo($fileName, PATHINFO_FILENAME);

        // Generar contenido del servicio
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

        // Crear el archivo
        file_put_contents($path, $content);

        // Mensaje de éxito estilo Laravel
        $this->info('✅ Service created successfully.');
        $this->line("📁 Path: " . str_replace(base_path() . '/', '', $path));
    }
}
