<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

      protected $fillable = [
          'brand',
          'title',
          'is_published',
          'meta_description'
      ];
      public function getRouteKeyName()
      {
          return 'brand';
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
                  $this->setUniqueBrand($value, '');
              }
          }

    /**
     * Recursive routine to set a unique slug.
     *
     * @param string $title
     * @param mixed $extra
     */
    protected function setUniqueBrand($title, $extra)
    {
        $brand = str_slug($title . '-' . $extra);

        $extra = !empty($extra) ?: 1;

        if (static::whereBrand($brand)->exists())
        {
            $this->setUniqueBrand($title, $extra + 1);

            return;
        }

        $this->attributes['brand'] = $brand;
    }

    public function image()
    {
      return $this->morphOne(Image::class, 'imageable');
    }
      /**
       * Add brands from the list.
       *
       * @param array $brands List of brands to check/add
       */
    public static function addNeededTags(array $brands)
    {
        if (count($brands) === 0) {
        return;
        }
        $found = static::whereIn('brand', $brands)->pluck('brand')->all();
        foreach (array_diff($brands, $found) as $brand) {
        static::create([
            'brand'     => $brand,
            'title'     => $brand,
            'subtitle'  => 'Subtitle for ' . $brand,
            'meta_description' => ''
            ]);
        }
    }

      /**
       * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
       */
      public function product()
      {
          return $this->belongsToMany(Product::class);
      }
}
