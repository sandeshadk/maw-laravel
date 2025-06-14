<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Download;

class StoreDownload extends FormRequest
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
        'title'      => 'required',
        'file' => 'file|required|max:100000',
    ];
}

public function data()
{
    // dd($this->get('download'));

    $path                   = Download::$path;
    $time                   = time();
    $data ['title']          = $this->get('title');
    $data ['is_published']  = $this->has('publish');

    if ($this->hasFile('file'))
    {
        if($this->file('file')->isValid())
        {
            $size        = $this->file('file')->getSize();
            $file_name   = $this->file('file')->getClientOriginalName();
            $extension   = $this->file('file')->getClientOriginalExtension();
            $title        = $time . '.' . $extension;

            $this->file('file')->move($path, $title);

            $data ['size']       = $size;
            $data ['file_name']  = $file_name;
            $data ['extension']  = $extension;
            $data ['path']       = "$title";
        }
    }

    return $data;
}

}
