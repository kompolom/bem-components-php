<?php
return function ($bh) {

    $bh->match('progressbar_theme_simple', function($ctx, $json) {

        $ctx
            ->applyBase()
            ->content([
                [
                    'elem' => 'box',
                    'content' => $json->content
                ],
                [
                    'elem' => 'text',
                    'content' => $json->val
                ]
            ], true);

    });

};
