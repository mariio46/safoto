<?php

namespace App\Http\Requests;

use App\Models\Biodata;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UserBioUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'fullName'      => ['required', 'string', 'max:255'],
            'birthDay'      => ['date'],
            'birthCity'     => ['string', 'max:255'],
            'instagram'     => ['max:255'],
            'facebook'      => ['max:255'],
            'tiktok'        => ['max:255'],
        ];
    }
}
