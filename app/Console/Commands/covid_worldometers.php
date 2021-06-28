<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Helpers\ScraperHelper;

class covid_worldometers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'covid:worldometers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrapes worldometers covid data and saved it to cache';

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
        $this->info("starting COVID_worldometers scraper\t\ttime \t\t".memory_get_peak_usage(). "\t" . memory_get_usage());
        ScraperHelper::COVID_worldometers();
        $this->info("completed COVID_worldometers scraper\t\t". round(microtime(true) - $start,11). "\t" .memory_get_peak_usage(). "\t" . memory_get_usage());
        $this->info("starting COVID_worldometers_usa scraper\t\t".(microtime(true) - $start) . "\t".memory_get_peak_usage(). "\t" . memory_get_usage());
        ScraperHelper::COVID_worldometers_usa();
        $this->info("completed COVID_worldometers_usa scraper\t". round(microtime(true) - $start,11). "\t" .memory_get_peak_usage(). "\t" . memory_get_usage());
        return 0;
    }
}
