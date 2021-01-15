<?php

namespace App\Contentful;

use Contentful\Delivery\Client;
use Contentful\Delivery\Query;

class ContentfulCollection
{
    public $client;

    public function __construct()
    {
        $this->client = new Client(
            env('CONTENTFUL_ACCESS_TOKEN'),
            env('CONTENTFUL_SPACE_ID')
        );
    }

    public function getPosts()
    {
        $query = (new Query)->setContentType('project')
            ->orderBy('fields.publishedDate', $descending = true);

        $collection = collect($this->client->getEntries($query)->getItems());

        return $collection
            ->map(function ($item) {
                return [
                    'name' => $item->name,
                    'publishedDate' => $item->publishedDate,
                    'logo' => $item->logo ? $item->logo->getFile('en-US')->getUrl() : null,
                    'repositoryUrl' => $item->repositoryUrl,
                    'description' => $item->description,
                    'projectUrl' => $item->projectUrl,
                    'type' => $item->type,
                ];
            });
    }
}