<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Program extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'slug',
	    'title',
	    'order',
	    'sub_description',
	    'is_published'
    ];

    /**
     * The attributes that should be typecast into boolean.
     *
     * @var array
     */
    protected $casts = [
        'is_published' => 'boolean',
        'is_featured' => 'boolean',
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Set the title attribute and the slug.
     *
     * @param string $value
     */
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;

        if ( ! $this->exists)
        {
            $this->setUniqueSlug($value, '');
        }
    }

    /**
     * Recursive routine to set a unique slug.
     *
     * @param string $title
     * @param mixed $extra
     */
    protected function setUniqueSlug($title, $extra)
    {
        $slug = Str::slug($title . '-' . $extra);

        if (static::whereSlug($slug)->exists())
        {
            $this->setUniqueSlug($title, $extra + 1);

            return;
        }

        $this->attributes['slug'] = $slug;
    }


    /**
     * @param $query
     * @param bool $type
     * @return mixed
     */
    public function scopePublished($query, $type = true)
    {
        return $query->where('is_published', $type);
    }

    /**
     * @param $query
     * @param bool $type
     * @return mixed
     */
    public function scopeFeatured($query, $type = true)
    {
        return $query->where('is_featured', $type);
    }

    /**
     * @param $query
     * @param bool $type
     * @return mixed
     */
    public function scopePrimary($query, $type = true)
    {
        return $query->where('is_primary', $type);
    }

     public function service()
      {
          return $this->belongsToMany(Service::class);
      }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
     public static function addNeededTags(array $programs)
    {
        if (count($programs) === 0) {
        return;
        }
        $found = static::whereIn('program', $programs)->pluck('program')->all();
        foreach (array_diff($programs, $found) as $program) {
        static::create([
            'program'     => $program,
            'title'     => $program,
            'subtitle'  => 'Subtitle for ' . $program,
            'meta_description' => ''
            ]);
        }

    /**
     * @param array $options
     * @return bool|null|void
     * @throws \Exception
     */
    public function delete(array $options = array())
    {
        if ($this->image)
            $this->image->delete();

        /** @noinspection PhpMethodParametersCountMismatchInspection */
        return parent::delete($options);
    }
}
