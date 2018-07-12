<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackValidation extends FormRequest
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
            'feedbacks'=>'required|min:4|max:1000',
        ];
    }

    public function  messages()
    {
        return [
            'feedbacks.required'=>'You cannot submit empty feedback',
            'feedbacks.min'=>'You must enter more than 4 characters',
            'feedbacks.max'=>'You cannot enter more than 1000 characters',

        ];
    }
}
