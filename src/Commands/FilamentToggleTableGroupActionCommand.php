<?php

namespace Christmex\FilamentToggleTableGroupAction\Commands;

use Illuminate\Console\Command;

class FilamentToggleTableGroupActionCommand extends Command
{
    public $signature = 'filament-toggle-table-group-action';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
