<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Return a paginated list of artists.
     * Only accessible to authenticated users.
     */
    public function list(Request $request)
    {
        $perPage = $request->input('per_page', 10);
        $page = $request->input('page', 1);

        $artists = Artist::paginate($perPage, ['*'], 'page', $page);

        return response()->json($artists);
    }
}
