<?php

namespace App;
use App\Helpers\FileHelper;
use Illuminate\Database\Eloquent\Model;
use File;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Image extends Model
{
    const THUMB_PATH = "thumbnails/";
    const IMAGE_PATH = "images/";
    const DEFAULT_THUMB = "public/img/avatar.png";
    protected $fillable = [ 'name', 'path', 'size','album_id','image'];
    protected $appends = [ 'thumbnail' ];



    /**
     * @param $image
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

    /**
     * Remove Image File Function
     */
    public function removeImage()
    {
        if ( ! is_null($this->path) && file_exists($this->path) && $this->path != "")
        {
            unlink($this->path);
        }
    }

    /**
     * @param int $w
     * @param int $h
     * @return string
     */
    public function resize($w = null, $h = null)
    {
        if (is_null($this->path) || $this->path == "" || ! file_exists($this->path))
        {
            return self::DEFAULT_THUMB;
        }
        else
        {
            return FileHelper::resize($w, $h, $this->path, self::THUMB_PATH, '_');
        }
    }

    /**
     * @return mixed
     */
    public function getImagePathAttribute()
    {
        $class = $this->imageable_type;
        if ( empty($class) ) return self::IMAGE_PATH;

        return ltrim(config('paths.image.'.$class), '/');
    }


    /**
     * @return string
     */
    public function getThumbnailAttribute()
    {
        return $this->thumbnail();
    }

    /**
     * @param int $w
     * @param int $h
     * @return string
     */
    public function thumbnail($w = 150, $h = 150)
    {
        if (is_null($this->path) || $this->path == "" || ! file_exists($this->path))
        {
            return self::DEFAULT_THUMB;
        }
        else
        {
            return FileHelper::getThumbnail($w, $h, $this->path, self::THUMB_PATH, '_');
        }
    }

    public static function create(array $attributes = [])
    {
        $model = new static($attributes);

        $model->save();

        return $model;
    }

    /**
     * @param array $options
     * @return bool|null
     * @throws \Exception
     */
    public function delete(array $options = [])
    {
        $this->removeImage();
        parent::delete($options);
    }
}
