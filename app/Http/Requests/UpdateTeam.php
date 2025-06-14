<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeam extends FormRequest
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
          'image' =>'image|max:4096'
        ];
    }

    public function data()
    {
      $data =[
        'name'            =>$this->get('name'),
        'position'        =>$this->get('position'),
        'content'         =>$this->get('content'),
        'email'           =>$this->get('email'),
        'view'            =>$this->get('teamsection'),
        'is_published'    =>$this->has('publish'),
      ];
      return $data;
    }


}
