<?php

namespace App\Http\Requests;

use App\Models\Menu;
use App\Models\Page;
use Illuminate\Foundation\Http\FormRequest;

class UpdateForm extends FormRequest {

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

        ];
    }

    public function data()
    {
        $data = [
            'title'                 => $this->get('title'),
            'course'                 => $this->get('course'),
            'location'                 => $this->get('location'),
            'graduate'                 => $this->get('graduate'),
            'view'               =>$this->get('formsection'),
            
            'is_published'       => $this->get('is_published') ? $this->get('is_published'): 0,
        ];

        if ($this->has('publish'))
        {
            $data['is_published'] = true;
        }

        return $data;
    }

}
