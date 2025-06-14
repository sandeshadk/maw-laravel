<?php

namespace App\Http\Requests;

use App\Models\Menu;
use App\Models\Page;
use Illuminate\Foundation\Http\FormRequest;

class StorePage extends FormRequest {

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
            'title' => 'required',
            'image'   => 'image|max:4096'
        ];
    }

    public function data()
    {
        $data = [
            'title'                 => $this->get('title'),
            'meta_description'      => $this->get('meta_description'),
            'content'               => $this->get('content'),
            'view'               =>$this->get('pagesection'),
            'url'                =>$this->get('url'),
            'is_published'       => $this->get('is_published') ? $this->get('is_published'): 0,
            'is_featured'       => $this->get('is_featured') ? $this->get('is_featured'): 0
        ];

        if ($this->has('publish'))
        {
            $data['is_published'] = true;
        }

        return $data;
    }

}
