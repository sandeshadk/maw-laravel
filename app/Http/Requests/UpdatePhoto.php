<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePhoto extends FormRequest
{
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
                'image' =>'image|max:4096'
        ];
    }
    public function data()
    {
    $data=[
       'title'          => $this->get('title'),
        'sub_description'=> $this->get('sub_description'),
       'view'           => $this->get('photo'),
       'url'                =>$this->get('url'),
       'is_published'   => $this->has('publish'),
      ];
      return $data;
    }
}
