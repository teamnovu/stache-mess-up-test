<?php

namespace App\Console\Commands;

use App\Jobs\SaveAllEntries as JobsSaveAllEntries;
use Illuminate\Console\Command;

class SaveAllEntries extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'entries:save';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // JobsSaveAllEntries::dispatch()->onQueue('works-here');
        JobsSaveAllEntries::dispatch()->onQueue('does-not-work-here');
    }
}
