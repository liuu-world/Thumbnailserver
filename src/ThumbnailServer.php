<?php

namespace GregBrown\ThumbnailServer;
use Illuminate\Support\Facades\Storage;

class ThumbnailServer
{
    public function thumb($filename,$type,$size,$placeHolderX='420',$placeHolderY='280')
    {
        $placeHolderX != null ? $x = $placeHolderX : $x = '420';
        $placeHolderY != null ? $y = $placeHolderY : $x = '280';
        if( $filename != null) {
            if (Storage::disk('public')->exists("/$type/$size/" . $filename))
                return Storage::disk('public')->url("/$type/$size/" . $filename);
            else
                return url("https://via.placeholder.com/{$x}x{$y}.png");
        }
        else
            return url("https://via.placeholder.com/{$x}x{$y}.png");
    }
}
