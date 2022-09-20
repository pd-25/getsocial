<?php

namespace App\Http\Requests\SiteSetting;

use Illuminate\Foundation\Http\FormRequest;

class SiteSettingCreateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'address' => 'required|string|between:30,600',
            'email' => 'nullable|required_without:phone|email',
            'phone' => 'required_without:email|min:11|numeric',
            'twitter' => 'nullable|string|between:6,200',
            'facebook' => 'nullable|string|between:6,200',
            'youtube' => 'nullable|string|between:6,200',
            'instagram' => 'nullable|string|between:6,200',
            

        ];
    }
}
