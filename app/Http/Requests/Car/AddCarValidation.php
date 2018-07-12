<?php

namespace App\Http\Requests\Car;

use Illuminate\Foundation\Http\FormRequest;

class AddCarValidation extends FormRequest
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
            'carimage'=>'required|image',
            'carname'=>'required|min:2|max:25',
            'cardescription'=>'required|min:5|max:10000',
            'cartype'=>'required|max:15',
            'carprice'=>'required|numeric|max:9999999999',
            'carusedfor'=>'required|min:5|max:15|string',
        ];
    }

    public function messages()
    {
        return[
            'carimage.required'=>'Please select image',
            'carimage.image'=>'Only image file is accepted',

            'carname.required'=>'Please enter the name of the car',
            'carname.min' =>'Please enter at least 2 character name',
            'carname.max' => 'You can enter up to 25 character only',
            'carname.alpha_dash'=> 'You can enter alpha numeric character',

            'cardescription.required'=>'You need to enter car description',
            'cardescription.min'=>'You need to enter at least 5 characters',
            'cardescription.max'=>'You can enter up to 10000 character only',

            'cartype.required'=>'Please enter your car type',
            'cartype.max'=>'You can enter upto 15 characters only',

            'carprice.required'=>'Please enter your car price',
            'carprice.numeric'=>'Please enter number only',
            'carprice.max'=> 'You are not allowed to enter mote than 9999999999',

            'carusedfor.required'=> 'How long you have used you car?',
            'carusedfor.min'=>'Please enter minimum 5 characters',
            'carusedfor.max'=>'You are now allowed to enter more than 15 characters',

        ];
    }
}
