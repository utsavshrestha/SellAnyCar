<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventValidation extends FormRequest
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
         'image'=>'required|image',
         'eventsname'=>'required|min:2|max:25',
         'eventsdescription'=>'required|min:5|max:10000',
         'eventslocation'=> 'required|min:2|max:25',
         'eventsdatetime'=>'required|date',

        ];
    }
    public function messages()
    {
        return[
            'image.required'=>'Please select image',
            'image.image' => 'You are not allowed to put other than image',

            'eventsname.required'=>'Enter event name',
            'eventsname.min'=>'You are not allowed to enter less than 2 characters',
            'eventsname.max'=>'You can enter upto 25 characters only',

            'eventsdescription.required'=>'Please provide events description',
            'eventsdescription.min'=>'Your are not allowed to enter less than 5 characters',
            'eventsdescription.max'=>'You cannot enter more than 10000 characters',

            'eventslocation.required'=>'Enter event location',
            'eventslocation.min'=>'You are not allowed to enter less than 2 characters',
            'eventslocation.max'=>'You are not allowed to enter more than 25 characters',

            'eventsdatetime.required'=> 'Enter date of event',
            'eventsdatetime.date' => 'You are not allowed to enter other than date',

        ];
    }
}
