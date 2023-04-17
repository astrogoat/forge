<?php

namespace Astrogoat\Forge\Actions;

use Helix\Lego\Apps\Actions\Action;

class ForgeAction extends Action
{
    public static function actionName(): string
    {
        return 'Forge action name';
    }

    public static function run(): mixed
    {
        return redirect()->back();
    }
}
