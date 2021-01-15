<?php

use App\Contentful\ContentfulCollection;
use Illuminate\Support\Str;

return [
    'baseUrl'         => '',
    'production'      => false,
    'siteName'        => 'Rafael Hernandez',
    'siteDescription' => 'I love creating software that empowers SME, join me in my journey.',
    'siteAuthor'      => 'Rafael Hernandez',

    // collections
    'collections'     => [
        'posts'      => [
            'author' => 'Rafael Hernandez', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'blog/{filename}',
        ],
        'categories' => [
            'path' => '/blog/categories/{filename}',
            'posts' => function ($page, $allPosts) {
                return $allPosts->filter(function ($post) use ($page) {
                    return $post->categories ? in_array($page->getFilename(), $post->categories, true) : false;
                });
            },
        ],
        'projects' => [
//            'extends' => '_layouts.contentful',
            'items' => function ($config) {
                return (new ContentfulCollection)->getPosts();
            },
        ],
    ],

    // helpers
    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
    'getExcerpt' => function ($page, $length = 255) {
        if ($page->excerpt) {
            return $page->excerpt;
        }

        $content = preg_split('/<!-- more -->/m', $page->getContent(), 2);
        $cleaned = trim(
            strip_tags(
                preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content[0]),
                '<code>'
            )
        );

        if (count($content) > 1) {
            return $cleaned;
        }

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
    'isActive'        => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },

    'imageAttribution' => function ($page, $html = false) {
        $str = '';

        $image_author = $page->image_author;
        $image_author_url = $page->image_author_url;

        if ($image_author) {
            $str .= "Foto por ";

            if ($html) {
                if ($image_author_url) {
                    $str .= '<a href="' . $image_author_url . '" title="' . $image_author . '">' . $image_author . '</a>';
                } else {
                    $str .= "$image_author ($image_author_url)";
                }
            } else {
                $str .= "$image_author";
            }
        }

        if ($page->image_unsplash) {
            if ($html) {
                $str .= ' en <a href="https://unsplash.com" title="Unsplash">Unsplash</a>';
            } else {
                $str .= ' on Unsplash (https://unsplash.com)';
            }
        }

        return $str;
    },
];
