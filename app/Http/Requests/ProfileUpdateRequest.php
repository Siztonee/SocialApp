<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => ['nullable', 'string', 'min:3', 'max:35'],
            'last_name' => ['nullable', 'string', 'min:3', 'max:55'],
            'education' => ['nullable', 'string', 'min:3', 'max:55'],
            'job' => ['nullable', 'string', 'min:3', 'max:55'],
            'relationship' => ['nullable', 'string', 'min:3', 'max:55'],
            'description' => ['nullable', 'string', 'min:20', 'max:255'],
            'profile' => 'nullable|image|mimes:png,jpg,jpeg,img|max:1024',
            'profile_bg' => 'nullable|image|mimes:png,jpg,jpeg,img|max:1024',
        ];

    }
}
