<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'user_id' => 'required|exists:App\Models\User,id',
            'client_id' => 'required|exists:App\Models\Client,id',
            'project_id' => 'required|exists:App\Models\Project,id',
            'titolo' => 'required|max:255',
            'data' => 'required|max:255',
            'ora' => 'required|max:255',
            'descrizione' => 'required|max:255',
        ];
    }
}
