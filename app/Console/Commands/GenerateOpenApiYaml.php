<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use OpenApi\Generator;

class GenerateOpenApiYaml extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:openapi {destination=public/openapi.yaml}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates the OpenAPI specification as a static YAML file';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $generator = Generator::scan([__DIR__ . '/../../../app']);
        $content = $generator->toYaml();

        $targetFile = $this->argument('destination');
        \file_put_contents($targetFile, $content);

        return Command::SUCCESS;
    }
}
