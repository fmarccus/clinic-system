<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientStoreRequest extends FormRequest
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
            'last_name' => ['required','regex:/^[a-zA-Z\s]+$/'],//regex = regular expression = pattern
            'first_name'=> ['required','regex:/^[a-zA-Z\s]+$/'],
            'sex' => ['required','in:Male,Female'],
            'age' => ['required','numeric','min:0','max:120'],
            'email' => ['required','email'],
            'contact_number' => ['required'], 
            'general_condition' => ['required'],
            'medical_history' => ['required']
        ];
    }
}