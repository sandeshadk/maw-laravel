<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;


class StoreSlider extends FormRequest
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
            'image' => 'required|image|max:4096',
        ];
    }
   

    public function data()
    {
      $data = [
        'title'               =>$this->get('title'),
        'content'               =>$this->get('content'),
        'first_button_title'    =>$this->get('first_button_title'),
        'second_button_title'   =>$this->get('second_button_title'),
        'first_button_url'      =>$this->get('first_button_url'),
        'second_button_url'     =>$this->get('second_button_url'),
        'is_published'         =>$this->has('publish')
      ];
      return $data;

    }
}
