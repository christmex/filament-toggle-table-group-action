<?php

namespace Christmex\FilamentToggleTableGroupAction\Actions;

use Filament\Actions\Action;
use Filament\Support\Icons\Heroicon;

class ToggleTableGroupAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->label('Toggle Details');

        $this->icon(Heroicon::ArrowsPointingOut);

        $this->color('gray');

        $this->alpineClickHandler("
            const collapsed = document.querySelectorAll('.fi-ta-group-header.fi-collapsed');
            if (collapsed.length > 0) {
                collapsed.forEach(el => el.click());
            } else {
                document.querySelectorAll('.fi-ta-group-header:not(.fi-collapsed)').forEach(el => el.click());
            }
        ");
    }
}
