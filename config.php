<?php

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [
        'components' => [
            'path' => 'components/{category}/{filename}',
            'extends' => '_layouts.component',
        ],
        'categories' => [
            'path' => '/components/{filename}',
            'extends' => '_layouts.category',
            'sort' => 'order',
            'components' => static function ($page, $allComponents) {
                return $allComponents->filter(function ($component) use ($page) {
                    return $page->getFilename() === $component->category;
                });
            },
        ],
    ],
    'isPathActive' => static function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },
    'pathContains' => static function ($page, $path) {
        return strpos(trimPath($page->getPath()), trimPath($path)) !== false;
    },
    'stripIgnoredParts' => static function ($page, $string) {
        return preg_replace('/<!--ignore-->[\s\S]+?<!--endignore-->/', '', $string);
    },
];
