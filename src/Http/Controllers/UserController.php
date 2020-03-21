<?php

namespace RaivoVaisla\TvnetFeed\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RaivoVaisla\TvnetFeed\Models\User;

class UserController extends Controller
{
    /**
     * Return json response if user exists with the passed email.
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function validateEmail(Request $request)
    {
        return response()->json(['taken' => User::where('email', $request->get('email'))->exists()], 200);
    }
}