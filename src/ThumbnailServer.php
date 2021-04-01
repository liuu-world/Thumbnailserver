<?php

namespace GregBrown\ThumbnailServer;
use Illuminate\Support\Facades\Storage;

class ThumbnailServer
{
    public function thumb($filename,$type,$size)
    {
        if( $filename != null) {
            if (Storage::disk('public')->exists("/$type/$size/" . $filename))
                return Storage::disk('public')->url("/$type/$size/" . $filename);
            else
                return url("https://via.placeholder.com/400x300.png");
        }
        else
            return url("https://via.placeholder.com/400x300.png");
    }
}
