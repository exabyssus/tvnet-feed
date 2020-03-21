<?php

namespace RaivoVaisla\TvnetFeed\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use RaivoVaisla\TvnetFeed\Services\Feeds;

class FeedController extends Controller
{
    /**
     * @var Feeds
     */
    private $feedsService;

    /**
     * FeedController constructor.
     */
    public function __construct()
    {
        $this->feedsService = (new Feeds());
    }

    /**
     * Feed page.
     *
     * @return Factory|View
     */
    public function getFeed()
    {
        $posts = [];
        try {
            $posts = $this->feedsService->getLatestPosts(5);
            session()->flash('success', 'Successfully fetched the feed!');
        } catch (\Exception $e) {
            session()->flash('error', 'Error loading the feed. Please try again!');
        }

        return view('feed::pages.feed', compact('posts'));
    }
}