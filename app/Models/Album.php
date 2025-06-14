<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Album extends Model
{
    protected $table = 'albums';

    protected $fillable = array('name','description','cover_image');

    public function Photos(){
        return $this->hasMany('App\Image');
    }


//    /**
//     * The attributes that are mass assignable.
//     *
//     * @var array
//     */
//    protected $fillable = [
//        'name',
//        'description',
//        'cover_image',
//        'is_featured',
//        'is_published'
//    ];
//
//    /**
//     * The attributes that should be typecast into boolean.
//     *
//     * @var array
//     */
//    protected $casts = [
//        'is_published' => 'boolean',
//        'is_featured' => 'boolean',
//    ];
//
//    /**
//     * Get the route key for the model.
//     *
//     * @return string
//     */
//    public function getRouteKeyName()
//    {
//        return 'id';
//    }
//
//    /**
//     * Set the title attribute and the slug.
//     *
//     * @param string $value
//     */
//    public function setTitleAttribute($value)
//    {
//        $this->attributes['name '] = $value;
//
//        if ( ! $this->exists)
//        {
//            $this->setUniqueSlug($value, '');
//        }
//    }
//
//    /**
//     * Recursive routine to set a unique slug.
//     *
//     * @param string $title
//     * @param mixed $extra
//     */
//    protected function setUniqueSlug($name, $extra)
//    {
//        $slug = Str::slug($name . '-' . $extra);
//
//        if (static::whereSlug($slug)->exists())
//        {
//            $this->setUniqueSlug($name, $extra + 1);
//
//            return;
//        }
//
//        $this->attributes['slug'] = $slug;
//    }
//
//    /**
//     * @param $query
//     * @param bool $type
//     * @return mixed
//     */
//    public function scopePublished($query, $type = true)
//    {
//        return $query->where('is_published', $type);
//    }
//
//    /**
//     * @param $query
//     * @param bool $type
//     * @return mixed
//     */
//    public function scopeFeatured($query, $type = true)
//    {
//        return $query->where('is_featured', $type);
//    }
//
//    /**
//     * @param $query
//     * @param bool $type
//     * @return mixed
//     */
//    public function scopePrimary($query, $type = true)
//    {
//        return $query->where('is_primary', $type);
//    }
//
//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
//     */
//    public function image()
//    {
//        return $this->morphOne(Image::class, 'imageable');
//    }
//
//    /**
//     * @param array $options
//     * @return bool|null|void
//     * @throws \Exception
//     */
//    public function delete(array $options = array())
//    {
//        if ($this->image)
//            $this->image->delete();
//
//        /** @noinspection PhpMethodParametersCountMismatchInspection */
//        return parent::delete($options);
//    }
//
////    public function Photos(){
////        return $this->hasMany(Image::class);
////    }
}