<?php
namespace GregBrown\Thumbshower\Facades;
use Illuminate\Support\Facades\Facade;

class ThumbshowerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'thumb';
    }
}
