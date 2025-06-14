<?php

namespace App\Http\Controllers;
use App\Models\Program;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Str;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
     public function uploadRequestImage($request, $instance)
    {
        if ($request->hasFile('image'))
        {
            $imageDetails = [
                'name' => Str::slug(date('His') . ' ' . $request->image->getClientOriginalName()),
                'size' => $request->image->getSize(),
                'path' => request()->image->store(config('paths.image.' . class_basename($instance)), 'public')
            ];

            if ($instance->image)
            {
                $instance->image->deleteImage();
                $instance->image->update($imageDetails);
            }
            else
            {
                $instance->image()->create($imageDetails);
            }
        }

        else
        {
            if (!empty($request->removeimage))
            {
                $instance->image->delete();
            }
        }

        return false;
    }


       
}
