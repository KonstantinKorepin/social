<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            //'name' => 'required|min:3|max:50',
            //'surname' => 'required|min:3|max:50'
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes(): array
    {
        return [
            'name' => 'имя',
            'surname' => 'фамилия',
            'middlename' => 'отчество',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Поле имя является обязательным',
            'surname.required' => 'Поле фамилия является обязательным',
            'name.min' => 'Имя должно быть не меньше 3 символов',
            'surname.min' => 'Фамилия должна быть не меньше 3 символов',
        ];
    }

}
