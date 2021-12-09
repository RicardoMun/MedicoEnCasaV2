<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientStore extends FormRequest
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
            'name'=> 'required | min:1 | max:20',
            'oximetria'=> 'required | min:1 | max:20',
            'frec_respiratoria'=> 'required | min:1 | max:20',
            'frec_cardiaca'=> 'required | min:1 | max:20',
            'temperatura'=> 'required | min:1 | max:20',
            'presion_arterial'=> 'required | min:1 | max:20',
            'glicemias'=> 'required | min:1 | max:20',
        ];
    }
}
