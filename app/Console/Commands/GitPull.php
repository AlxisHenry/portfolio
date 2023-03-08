<?php

namespace App\Console\Commands;

use App\Console\Git;
use Illuminate\Support\Facades\Process;

class GitPull extends Git
{

    private const IGNORED_DIRECTORIES = [
        "",
        "build/",
        "assets/",
        "storage/",
    ];
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'git:pull';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Pulls the latest changes from the remote repository.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $process = Process::run("cd ". self::ROOT ." && ls -d */");
        $directories = explode(PHP_EOL, $process->output());
        foreach ($directories as $directory) {
            if (!in_array($directory, self::IGNORED_DIRECTORIES)) {
                $path = self::ROOT ."/". $directory;
                $this->info("Pulling changes from ". $path);
                $pr = Process::run("cd $path && git pull");
                $this->info($pr->output());
            }
        }
    }
}
