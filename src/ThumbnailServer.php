<?php

namespace GregBrown\ThumbnailServer;

class ThumbnailServer
{
    public function thumb($path,$type,$size)
    {
        if (File::exists("/storage/public/{$type}/{$size}/" . $path))
            return url("/storage/public/{$type}/{$size}/" . $path);
        else
            return '<svg class="bd-placeholder-img" width="400" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">';
    }
}
