<?php

namespace App\Http\ViewComponents;

use App\GalleryImage;
use Illuminate\Contracts\Support\Htmlable;

class GalleryImages implements Htmlable
{
    /**
     * @var GalleryImage
     */
    private $galleryImages;

    public function __construct(GalleryImage $galleryImages)
    {
        $this->galleryImages = $galleryImages;
    }

    /**
     * @return string
     */
    public function toHtml(): string
    {
        return view('components.gallery-images')->with('images', GalleryImage::all());
    }
}
