<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Project extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $guarded = [];

    protected $casts = [
        'published' => 'boolean',
    ];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('published', true);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('default')
            ->onlyKeepLatest(1)
            ->withResponsiveImages();
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('default')
            ->withResponsiveImages()
            ->width(800);

        $this->addMediaConversion('preview')
            ->width(300);
    }
}
