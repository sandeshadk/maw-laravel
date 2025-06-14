<?php

namespace App\Http\Requests;

use App\Models\Menu;
use App\Models\Page;
use Illuminate\Foundation\Http\FormRequest;

class StoreCreateAlbumImage extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
             'image'   => 'image|max:8192'
        ];
    }

    public function data()
    {
        $data = [
//            'user_id'               => auth()->id(),
            'name'                  => $this->get('name'),
            'description'           => $this->get('description'),
            'cover_image'           => $this->get('image'),
            'is_published'          => $this->get('is_published') ? $this->get('is_published'): 0,
//            'is_featured'       => $this->get('is_featured') ? $this->get('is_featured'): 0
        ];

        if ($this->has('publish'))
        {
            $data['is_published'] = true;
        }

        return $data;
    }

}
