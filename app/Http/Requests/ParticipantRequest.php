<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Participant;

class ParticipantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Participant::where('email', $this->input('email'))->count()){
            return false;
        }
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
            'name'  =>  'required|max:255',
            'email' =>  'required|email|unique',
            'phone' =>  'required|max:25',
            'from'  =>  'required|max:255'
        ];
    }
}
