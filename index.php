<?php

// TODO add data-theme="dark" when in darkmode in theme-toggle.js

Kirby::plugin('mirthe/tweet', [
    'options' => [
        'cache' => true
    ],
    'tags' => [
        'tweet' => [
            'attr' =>[
                'url'
            ],
            'html' => function($tag) {

                $tweeturl = $tag->url;

                $mijnoutput = '<blockquote class="twitter-tweet">';
                $mijnoutput .= '<a href="'. $tweeturl. '"></a>';
                $mijnoutput .= '</blockquote>';
                $mijnoutput .= '<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>';

                return $mijnoutput;
            }
        ]
    ]
]);

?>