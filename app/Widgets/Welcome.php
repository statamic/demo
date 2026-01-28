<?php

namespace App\Widgets;

use Statamic\Widgets\VueComponent;
use Statamic\Widgets\Widget;

class Welcome extends Widget
{
    public function component()
    {
        return VueComponent::render('welcome-widget', [
            'newsCollectionUrl' => cp_route('collections.show', 'news'),
            'pagesCollectionUrl' => cp_route('collections.index', 'pages'),
            'assetsUrl' => cp_route('assets.browse.index', 'assets'),
        ]);
    }
}
