<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectListResource extends JsonResource
{
    public static $wrap = false;

    public function toArray($request): array
    {
        return [
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'cover' => $this->getFirstMediaUrl(),
        ];
    }
}
