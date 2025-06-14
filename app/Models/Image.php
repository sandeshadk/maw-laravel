<?php

namespace App\Models;

use Illuminate\Support\Str;
use Storage;
use App\ImageManipulator;
use Illuminate\Database\Eloquent\Model;


class Image extends Model {

    /**
     * Constant for default thumbnail path
     */
    const THUMB_PATH = 'thumbnails/';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'path', 'size'];

    /**
     * @param  string $value
     * @return string
     */
    public function getPathAttribute($value)
    {
        return 'storage/' . $value;
    }

    /**
     * @param int $w
     * @param int $h
     * @return string
     */

     public function setPath($image)
    {
        if ($image instanceof UploadedFile && $image->isValid())
        {
            $this->removeImage();
            $this->size = File::size($image);
            $this->path = FileHelper::upload($image, self::IMAGE_PATH);
            $this->save();
        }
    }
    public function resize($w = null, $h = null)
    {
        if ( ! empty($this->path) && file_exists($this->path))
        {
            return ImageManipulator::resize($w, $h, $this->path, self::THUMB_PATH);
        } else
        {
            return config('paths.placeholder.default');
        }
    }

    /**
     * @param int $w
     * @param int $h
     * @return string
     */
    public function thumbnail($w = 150, $h = 150)
    {
        if ( ! empty($this->path) && file_exists($this->path))
        {
            return ImageManipulator::getThumbnail($w, $h, $this->path, self::THUMB_PATH, Str::slug($this->imageable_type));
        } else
        {
            return config('paths.placeholder.default');
        }
    }

    /**
     * Unlink Image
     */
    public function deleteImage()
    {
        if ( ! empty($this->path) && file_exists($this->path))
            unlink($this->path);
    }

    /**
     * @return bool|null
     */
    public function delete()
    {
        $this->deleteImage();

        return parent::delete();
    }
}
