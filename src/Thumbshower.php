<?php

namespace GregBrown\Thumbshower;

#use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Thumbshower
{
    public function thumb($path,$type,$size)
    {
        if (File::exists("/storage/public/{$type}/{$size}/" . $path))
            return url("/storage/public/{$type}/{$size}/" . $path);
    }

}
