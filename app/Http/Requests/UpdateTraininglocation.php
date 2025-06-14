<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTraininglocation extends FormRequest
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
          'name'=>'required',
          
          
        ];
    }

    public function data()
    {
      $data =[
        'name'            =>$this->get('name'),
        'address'        =>$this->get('address'),
        'phone'         =>$this->get('phone'),
        'is_published'    =>$this->has('publish'),
      ];
      return $data;
    }


}
