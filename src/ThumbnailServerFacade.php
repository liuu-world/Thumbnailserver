<?php

namespace GregBrown\ThumbnailServer;

use Illuminate\Support\Facades\Facade;

/**
 * @see \GregBrown\ThumbnailServer\Skeleton\SkeletonClass
 */
class ThumbnailServerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'thumbnailserver';
    }
}
