<?php

namespace App\Custom;

use Illuminate\Support\Str;
use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\PathGenerator\PathGenerator;

class MediaPathGenerator implements PathGenerator
{
    public function getPath(Media $media): string
    {
        if ($this->parseClassName($media->model_type) == 'daikazularavelblogpost') {
            return 'blog/'.$media->id.'/';
        }

        return $this->parseClassName($media->model_type).$media->id.'/';
    }

    public function getPathForConversions(Media $media): string
    {
        return $this->getPath($media).'conversions/';
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getPath($media).'responsive-images/';
    }

    private function parseClassName(string $name): string
    {
        return Str::slug(str_replace('App\\', '', $name));
    }
}
