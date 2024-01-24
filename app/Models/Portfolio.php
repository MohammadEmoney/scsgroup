<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Portfolio extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'name_en',
        'description',
        'description_en',
        'category_id',
        'is_active',
        'views',
        'slug',
        'year',
        'url',
        'client',
    ];

    protected $casts = [
        'categories' => 'array',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class)
                    ->withPivot('is_main')
                    ->withTimestamps();
    }

    public function mainCategory()
    {
        return $this->belongsToMany(Category::class)
                    ->wherePivot('is_main', 1);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }

    public function scopeIsActive($query)
    {
        $query->where('is_active', 1);
    }
}
