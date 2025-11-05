<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\Artist;

class LastfmService
{
    protected $apiKey;
    protected $baseUrl = 'https://ws.audioscrobbler.com/2.0/';

    public function __construct()
    {
        $this->apiKey = env('LASTFM_API_KEY');
    }

    /**
     * Get top artists
     */
    public function getTopArtistsFromApi($page = 1, $limit = 50)
    {
        $response = Http::get($this->baseUrl, [
            'method' => 'chart.getTopArtists', 'api_key' => $this->apiKey, 'format' => 'json', 'page' => $page,
            'limit'  => $limit,
        ]);

        if ($response->successful()) {
            return $response->json()['artists']['artist'] ?? [];
        }

        return [];
    }


    public function saveArtists(array $artists)
    {
        $data = [];
        foreach ($artists as $artist) {

            if ( ! isset($artist['mbid'])) {
                continue;
            }
            $data[] = [
                'name'       => $artist['name'], 'mbid' => $artist['mbid'], 'play_count' => $artist['playcount'] ?? 0,
                'listeners'  => $artist['listeners'] ?? 0, 'image' => $artist['image'][2]['#text'] ?? null,
                'streamable' => isset($artist['streamable']) ? (bool) $artist['streamable'] : false,
                'url'        => $artist['url'] ?? null, 'created_at' => now(), 'updated_at' => now(),
            ];
        }

        Artist::upsert($data, ['mbid'], // unique keys
            ['name', 'play_count', 'listeners', 'image', 'streamable', 'url', 'updated_at'] // columns to update
        );
    }


}
