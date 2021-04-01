<?php
namespace GB\GBThumbnail\Facades;
use Illuminate\Support\Facades\Facade;

class GBThumbnail extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'thumb';
    }
}
