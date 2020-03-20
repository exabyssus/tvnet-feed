<?php

namespace RaivoVaisla\TvnetFeed\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class FeedController extends Controller
{
    /**
     * @return Factory|View
     */
    public function getFeed()
    {
        return view('feed::pages.feed');
    }
}