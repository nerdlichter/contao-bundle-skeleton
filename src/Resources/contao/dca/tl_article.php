<?php

$GLOBALS['TL_DCA']['tl_article']['edit']['buttons_callback'][] = [\Nerdlichter\DemoBundle\Hooks\HookArticle::class, 'sync'];