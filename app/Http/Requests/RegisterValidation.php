<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterValidation extends FormRequest
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
            'firstname'=>'required| min:2| max:15|alpha',
            'lastname'=>'required| min:4| max:15|alpha',
            'phonenumber'=>'required|numeric|max: 9999999999|unique:users',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6| confirmed',
            'address'=>'required|min:5| max :15|string',
            'username'=>'required| string| unique:users',
            'image'=>'required|image',

            //
        ];
    }

    public function messages()
    {
        return[
            'firstname.required'=>'Please enter fistname',
            'firstname.min'=>'Please enter at least 2 characters',
            'firstname.max'=>'Please enter less than 15 characters',
            'firstname.alpha'=>'Please enter only characters without spaces or numbers',

            'lastname.required'=>'Please enter lastname',
            'lastname.min'=>'Please enter at least 4 characters',
            'lastname.max'=>'please enter less than 15 characters',
            'lastname.alpha'=>'Please enter only characters without spaces or numbers',

            'phonenumber.required'=>'Please enter your phone number',
            'phonenumber.numeric'=>'You are not allowed to enter other than numbers',
            'phonenumber.unique'=>'Number already exist',

            'email.required'=>'Please enter your email id',
            'email.unique'=>'email already exist',

            'password.required'=>'Please enter the password',
            'password.min'=>'Password must be minimum 6 character long',

            'address.required'=>'Please enter you address',
            'address.min'=>'Address must be 5 character long',
            'address.max'=>'Your address must be less than 15 characters',


            'username.required'=>'Please enter you username',
            'username.unique'=>'Username already exist',
            'image.required'=>'Please select image',
             'image.image'=>'Only image file required',




        ];
    }
}
