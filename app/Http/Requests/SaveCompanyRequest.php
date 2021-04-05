<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveCompanyRequest extends FormRequest
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
            'company_name' => 'string|required_if:role,company|max:255',
            'email' => 'string|required_if:role,user|max:255',
            'phone' => 'string|required_if:role,company|max:255',
            'alternative_phone' => 'string|nullable|max:255',
            'classification' => 'string|required_if:role,company|max:255',
            'about_company' => 'string|nullable|max:255',
            'main_services' => 'string|nullable|max:255',
            'address' => 'string|required_if:role,company|max:255',
            /* 'province' => 'string|required|max:255',
            'district' => 'string|required|max:255', */
            'license' => 'string|required_if:role,company|max:255',
            'password' => 'required|between:8,255|confirmed',
            'password_confirmation' => 'required|between:8,255',
            'segment_area' => 'string|required_if:role,company|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            //normal user
            'last_name' => 'string|required_if:role,user|max:255',

        ];
    }
}
