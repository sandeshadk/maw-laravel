<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Menu extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['slug', 'name', 'url', 'icon', 'order' ];

    /**
     * Set the name attribute and the slug.
     *
     * @param string $value
     */
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

            return back()->withSuccess(trans('messages.create_success', ['entity' => 'Menu']))->with('collapse_in', $name);;
        }

        $this->attributes['slug'] = $slug;
    }

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
//     */
//    public function image()
//    {
//        return $this->morphOne('App\Models\Image', 'imageable');
//    }
//
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subMenus()
    {
        return $this->hasMany(SubMenu::class)->with('childsubMenus');
    }

    public function delete(array $options = array())
    {
        if ($this->image)
            $this->image->delete();

        /** @noinspection PhpMethodParametersCountMismatchInspection */
        return parent::delete($options);
    }
}
