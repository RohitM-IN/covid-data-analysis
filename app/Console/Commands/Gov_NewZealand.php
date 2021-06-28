<?php

namespace App\Console\Commands;

use App\Http\Helpers\ScraperHelper;
use Illuminate\Console\Command;

class Gov_NewZealand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'covid:gov-nz';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Government scraper for NewZealand';

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
        $start = microtime(true);
        $this->info("starting Gov_NewZealand scraper\t\t\ttime \t\t".memory_get_peak_usage(). "\t" . memory_get_usage());
        ScraperHelper::Gov_NewZealand();
        $this->info("completed Gov_NewZealand scraper\t\t". round(microtime(true) - $start,11). "\t" .memory_get_peak_usage(). "\t" . memory_get_usage());
        return 0;
    }
}
