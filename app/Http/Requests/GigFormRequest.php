<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GigFormRequest extends FormRequest
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
            //
            'gig_title'=>['required'],
           // 'gig_slug'=>['required'],
            'gig_body'=>['required'],
        ];
    }
}
