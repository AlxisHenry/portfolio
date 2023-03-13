<?php

namespace App\Console\Commands;

use App\Console\Git;
use Illuminate\Support\Facades\Process;

class GitClone extends Git
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'git:clone 
        {--b|branch= : Branch you want to clone for this repository} 
        {repository}
        {--N|name= : Name of the directory you want to clone the repository into}
    ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clone a repository into the public directory of the application.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        /**
         * @var string $branch
         */
        $branch = $this->option('branch') ?? "";
 
        /**
         * @var string $repository
         */
        $repository = $this->argument('repository');
        
        /**
         * @var string $name
         */
        $name = $this->option('name') ?? basename($repository, '.git');
        
        if (is_dir(self::ROOT ."/". $name)) {
            $choice = $this->choice("The directory $name already exists. Do you want to overwrite it?", ['Yes, overwrite it!', 'No, are you crazy?'], 1);
            if ($choice === 'No, are you crazy?') {
                $this->info("Aborting.");
                return;
            } else {
                if ($this->confirm("Are you sure you want to overwrite the directory $name?", true)) {
                    $this->comment(" Removing the directory $name.");
                    $process = Process::run("cd ". self::ROOT ." && rm -rf $name");
                    $this->comment($process->output());
                } else {
                    $this->comment(" Aborting.");
                    return;
                }
            }
        } else {
            $this->comment(" The directory $name does not exist. Cloning the repository into it.\n");
        }

        // Check if the repository exist and is public
        $this->info(" Checking if the repository $repository exists and is public.\n");
        $process = Process::run("git ls-remote $repository");
        if ($process->output() === "") {
            $this->line("");
            $this->comment(" The repository $repository does not exist or is not public.\n");
            return;
        }

        $this->info(" Cloning $repository into the public directory.");
        $command = "cd ". self::ROOT ." && git clone ". (!$branch ? "" : "-b $branch" )." $repository $name";
        $process = Process::run($command);
        $this->info($process->output());
    }
}
