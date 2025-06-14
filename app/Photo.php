<?php

namespace App;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Photo extends Model
{
    protected $fillable = [
        'slug',
        'name',
        'meta_description',
        'is_published',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;

        if ( ! $this->exists)
        {
            $this->setUniqueSlug($value, '');
        }
    }

    /**
     * Recursive routine to set a unique slug.
     *
     * @param string $name
     * @param mixed $extra
     */
    protected function setUniqueSlug($name, $extra)
    {
        $slug = Str::slug($name . '-' . $extra);

        if (static::whereSlug($slug)->exists())
        {
            $this->setUniqueSlug($name, $extra + 1);

            return;
        }

        $this->attributes['slug'] = $slug;
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

}