<?php

namespace Christmex\FilamentToggleTableGroupAction\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Christmex\FilamentToggleTableGroupAction\FilamentToggleTableGroupAction
 */
class FilamentToggleTableGroupAction extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Christmex\FilamentToggleTableGroupAction\FilamentToggleTableGroupAction::class;
    }
}
