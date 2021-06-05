<?php

namespace App\Console\Commands;

use App\Http\Helpers\ScraperHelper;
use Illuminate\Console\Command;

class Gov_SouthKorea extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'covid:gov-southkorea';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Government scraper for South Korea';

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
        $data = ScraperHelper::Gov_SouthKorea();
        return 0;
    }
}
