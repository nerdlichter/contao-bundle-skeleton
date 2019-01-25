<?php

namespace Nerdlichter\DemoBundle\Hooks;

use Contao\DC_Table;

class HookArticle extends \Backend
{
    /**
     * @param array $actionButtons
     * @param DC_Table $table
     * @return mixed
     */
    public function sync(array $actionButtons, DC_Table $table)
    {
        //do something

        return $actionButtons;
    }
}
