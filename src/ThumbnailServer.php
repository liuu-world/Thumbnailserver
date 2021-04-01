<?php

namespace GregBrown\ThumbnailServer;
use Illuminate\Support\Facades\File;

class ThumbnailServer
{
    public function thumb($path,$type,$size)
    {
        if( $path != null) {
            if (Storage::disk('public')->exists("/public/$type/$size/" . $path))
                return Storage::disk('public')->url("/public/$type/$size/" . $path);
            else
                return url("https://via.placeholder.com/400x300.png");
        }
        else
            return url("https://via.placeholder.com/400x300.png");
    }
}
