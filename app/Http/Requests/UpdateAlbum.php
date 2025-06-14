<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAlbum extends FormRequest {

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
            'name'             => 'required|max:200',
            'description'      => 'required',
            'cover_image'      => 'image|max:4096'
        ];
    }

    /**
     * @return array
     */
    public function data()
    {
        $inputs = [
            'name'              => $this->get('name'),
            'description'       => $this->get('description'),
            'cover_image'       => $this->get('image'),
            'is_published'      => $this->get('is_published') ? $this->get('is_published'): 0,
//            'is_featured'       => $this->get('is_featured') ? $this->get('is_featured'): 0
        ];

        if ($this->has('publish'))
        {
            $inputs['is_published'] = true;
        }

        return $inputs;
    }
}
