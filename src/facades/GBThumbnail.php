<?php
namespace GregBrown\Thumbshower\Facades;
use Illuminate\Support\Facades\Facade;

class Thumbshower extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'thumb';
    }
}
