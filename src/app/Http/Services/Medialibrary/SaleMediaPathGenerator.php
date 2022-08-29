<?php

namespace App\Http\Services\Medialibrary;

use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\Support\PathGenerator\PathGenerator;

class SaleMediaPathGenerator implements PathGenerator
{

    public function getPath(Media $media): string
    {
        return 'media/' . $media->model->created_at->toDateString() . '/' . $media->model->user_id . '/' . $media->model->id;
    }

    public function getPathForConversions(Media $media): string
    {
        return $this->getPath($media) . 'conversation';
    }

    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getPath($media) . 'responsive';
    }
}
