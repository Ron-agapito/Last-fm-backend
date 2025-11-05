<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Services\LastfmService;

class LastfmImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'lastfm:import';

    protected $page = 10;
    protected $sleepSeconds = 2;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import data from Last.fm API';

    /**
     * Execute the console command.
     */
    public function handle(LastfmService $lastfmService)
    {
        $this->info('Starting Last.fm import...');

        for ($i = 1; $i <= $this->page; $i++) {
            $artists = $lastfmService->getTopArtistsFromApi($i);
            $lastfmService->saveArtists($artists);

            //delay between requests
            sleep($this->sleepSeconds);
        }

        $this->info('Import finished!');

        return 0;
    }

    //bulk save


}
