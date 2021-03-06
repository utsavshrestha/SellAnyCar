<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionValidation extends FormRequest
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
            'questiondescription'=>'required|min:10|max:1000',
        ];
    }

    public function messages()
    {
        return[
            'questiondescription.required'=>'You cannot submit empty ask some question first',
            'questiondescription.min' =>' You are not allowed to enter less than 10 characters',
            'questiondescription.max' => 'You cannot enter more than 1000 characters',

        ];
    }
}
