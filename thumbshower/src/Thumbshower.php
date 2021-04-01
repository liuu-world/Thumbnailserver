<?php

namespace Gb\Thumbshower;

#use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Thumbshower
{
    public function DoThumb($path,$type,$size)
    {
        if (File::exists("/storage/public/{$type}/{$size}/" . $path))
            return url("/storage/public/{$type}/{$size}/" . $path);
    }

}
