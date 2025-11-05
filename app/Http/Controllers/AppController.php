<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function view(Request $request)
    {
        $token       = $request->user()->createToken("app-token");
        $frontendUrl = env('FRONTEND_URL');

        return view('app', ['token' => $token->plainTextToken, 'frontendUrl' => $frontendUrl]);
    }

}
