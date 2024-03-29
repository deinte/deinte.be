<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProjectListResource extends JsonResource
{
    public static $wrap = false;

    public function toArray($request): array
    {
        /** @var Media $media */
        $media = $this->getFirstMedia();

        return [
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'website' => $this->website,
            'cover' => [
                'srcset' => $media->getSrcset('default'),
                'url' => $media->originalUrl,
            ],
        ];
    }
}
