<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
            'imageId' => 'integer',
            'imageName'=> 'alpha_num',
            'extension'=> 'mimes:gif',
            'userId'=> 'exists:users,id',
            'client_id'=>'integer',
            'status'=> 'boolean',
            'imageSizeMb'=>'lt:2048'
        ];
    }
}
