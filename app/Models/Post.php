<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\ModelStatus\HasStatuses;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Tags\HasTags;

class Post extends Model implements HasMedia
{
    use HasFactory;
    use HasSlug;
    use HasTags;
    use HasStatuses;
    use InteractsWithMedia;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'short_content',
        'content',
        'status',
        'category_id',
        'user_id',
        'is_visible',
        'is_featured',
        'published_at',
        'views',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_visible' => 'boolean',
        'is_featured' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Is Visible Scope
     *
     * @param Builder $query
     * @return void
     */
    public function scopeIsVisible($query)
    {
        $query->where('is_visible', 1);
    }

    /**
     * Is Featured Scope
     *
     * @param Builder $query
     * @return void
     */
    public function scopeIsFeatured($query)
    {
        $query->where('is_featured', 1);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaCollection('FeaturedImage')
            ->useFallbackPath(public_path('/images/placeholder.png'));
        $this->addMediaConversion('thumb')
            ->fit(Manipulations::FIT_STRETCH, 400, 333)
            ->performOnCollections('FeaturedImage')->nonQueued();
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }
}
