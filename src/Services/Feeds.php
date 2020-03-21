<?php

namespace RaivoVaisla\TvnetFeed\Services;

class Feeds
{
    /**
     * @var string
     */
    protected $feedUrl = 'https://www.tvnet.lv/rss';

    /**
     * Get transformed posts from feed.
     *
     * @param int $amount
     * @return array
     */
    public function getLatestPosts($amount): array
    {
        $file = simplexml_load_file($this->feedUrl);
        $posts = $file->xpath(sprintf('/rss/channel/item[position() <= %s]', $amount));

        $postArray = [];

        foreach ($posts as $post) {
            $postArray[] = [
                'title' => $post->title->__toString(),
                'description' => $post->description->__toString(),
                'url' => $post->link->__toString(),
                'image' => $post->enclosure['url']->__toString()
            ];
        }

        return $postArray;
    }
}
