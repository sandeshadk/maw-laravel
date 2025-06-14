<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Download;

class UpdateDownload extends FormRequest
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
      ];
  }

  public function data($downloads)
  {
      $path                   = Download::$path;
      $delete_file            = $path . $downloads->path;
      $time                   = time();
      $data ['title']          = $this->get('title');
      
      $data ['is_published']  = $this->has('publish');

      if ($this->hasFile('file'))
      {
          if ($this->file('file')->isValid())
          {
              unlink($delete_file);

              $size           = $this->file('file')->getSize();
              $file_name      = $this->file('file')->getClientOriginalName();
              $extension      = $this->file('file')->getClientOriginalExtension();
              $title           = $time . '.' . $extension;

              $this->file('file')-> move($path, $title);

              $data ['size']          = $size;
              $data ['file_name']     = $file_name;
              $data ['extension']     = $extension;
              $data ['path']          = "$title";
          }
      }

      return $data;
  }

}
