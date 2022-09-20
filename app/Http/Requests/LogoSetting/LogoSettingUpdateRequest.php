<?php

namespace App\Http\Requests\LogoSetting;

use Illuminate\Foundation\Http\FormRequest;

class LogoSettingUpdateRequest extends FormRequest
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
            'fabicon_image' => 'max:1024',
            'logo_image' => 'max:1024',
            'site_name' => 'required|string',
        ];
    }
}
