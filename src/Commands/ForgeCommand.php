<?php

namespace Astrogoat\Forge\Commands;

use Illuminate\Console\Command;

class ForgeCommand extends Command
{
    public $signature = 'forge';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
