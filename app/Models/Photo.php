<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  protected $fillable=[
    'title',
    'sub_description',
    'view',
    'url',
    'is_published'

  ];

  protected $casts=[
    'is_published'=>'boolean'
  ];
  /**
   * Get the route key for the model.
   *
   * @return string
   */
  public function getRouteKeyName()
  {
      return 'id';
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
  public function scopePrimary($query, $type = true)
  {
      return $query->where('is_primary', $type);
  }

  /**
   * @return \Illuminate\Database\Eloquent\Relations\MorphOne
   */
  public function image()
  {
      return $this->morphOne(Image::class, 'imageable');
  }

  /**
   * @param array $options
   * @return bool|null|void
   * @throws \Exception
   */
  public function delete(array $options = array())
  {
      if ($this->image)
      {
          $this->image->delete();
        }

      return parent::delete($options);
  }


}
