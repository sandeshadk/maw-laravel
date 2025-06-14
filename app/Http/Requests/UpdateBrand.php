<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBrand extends FormRequest
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
                  'title'   => 'required',
                  'order'   => 'required',
              ];
          }

          public function data()
          {
              $data = [
                  'title'            => $this->get('title'),
                 'meta_description' => $this->get('meta_description'),
                 'is_featured'      => $this->get('is_featured')? $this->get('is_featured') : 0,
                 'is_published'     => $this->has('publish')
              ];

              return $data;
          }
}
