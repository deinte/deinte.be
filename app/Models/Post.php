<?php

namespace App\Models;

use App\Models\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\CommonMarkConverter;

class Post extends Model
{
    use HasFactory;
    use HasSlug;

    protected $guarded = ['id'];

    protected $casts = [
        'published' => 'boolean'
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function getTextAsHtmlAttribute(): string
    {
        $converter = new CommonMarkConverter();
        return $converter->convert($this->text);
    }

    public function resolveRouteBinding($value, $field = null): ?Model
    {
        return static::query()
            ->where($field, $value)
            ->where('published', true)
            ->firstOrFail();
    }

    public function scopePublished($query)
    {
        return $query->where('published', true);
    }

    public function getSlug(): string
    {
        return "$this->id $this->title";
    }
}
